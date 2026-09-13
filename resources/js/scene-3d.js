/**
 * Blueprint 3D Background Scene
 * -----------------------------------------------------------------------------
 * A fixed, full-viewport WebGL layer that sits behind all page content.
 *
 * Design intent: this is not decoration for its own sake. The scene reads as an
 * engineering drawing suspended in space — wireframe construction grids, framed
 * technical solids, and a node/edge routing graph that echoes the actual
 * subjects of the portfolio (relational schemas, batch modules, route
 * optimization).
 *
 * Motion is driven by scroll position: the camera travels forward through the
 * scene as the visitor reads, and the solids rotate. Nothing loops
 * aimlessly in place while the page is still.
 */
// Named imports (rather than a namespace import) so the bundler can drop the
// large parts of three.js this scene never touches.
import {
  WebGLRenderer,
  Scene,
  Fog,
  PerspectiveCamera,
  Group,
  GridHelper,
  IcosahedronGeometry,
  OctahedronGeometry,
  BoxGeometry,
  TorusGeometry,
  DodecahedronGeometry,
  ConeGeometry,
  EdgesGeometry,
  LineSegments,
  LineBasicMaterial,
  BufferGeometry,
  Vector3,
  Points,
  PointsMaterial,
  Clock,
} from 'three';

// Palette locked to the site's six design tokens.
const COLOR_LINE = 0xdce8f5; // blueprint line
const COLOR_AMBER = 0xc98a2e; // amber accent
const COLOR_SAGE = 0x6e9c87; // sage accent

export function initScene3d() {
  const canvas = document.getElementById('scene-3d');
  if (!canvas) return;

  // Bail out entirely if the browser cannot give us a WebGL context, so the
  // page simply falls back to its flat backgrounds instead of erroring.
  let renderer;
  try {
    renderer = new WebGLRenderer({
      canvas,
      alpha: true,
      antialias: true,
      powerPreference: 'low-power',
    });
  } catch (err) {
    return;
  }

  const prefersReduced = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

  renderer.setPixelRatio(Math.min(window.devicePixelRatio, 2));
  renderer.setSize(window.innerWidth, window.innerHeight, false);
  renderer.setClearColor(0x000000, 0);

  const scene = new Scene();
  // Fog fades distant geometry into the page background instead of ending abruptly.
  scene.fog = new Fog(0x1b2a4a, 26, 78);

  const camera = new PerspectiveCamera(
    52,
    window.innerWidth / window.innerHeight,
    0.1,
    140
  );
  camera.position.set(0, 0, 16);

  // The whole drawing lives in one group so it can be tilted as a unit.
  const world = new Group();
  world.rotation.x = 0.06;
  scene.add(world);

  // ---------------------------------------------------------------------------
  // 1. Construction grids — the "sheet" the drawing sits on, floor and ceiling.
  // ---------------------------------------------------------------------------
  const grids = [];
  [
    { y: -9, opacity: 0.18 }, // floor reads stronger, like a drawing surface
    { y: 9, opacity: 0.1 },
  ].forEach(({ y, opacity }) => {
    const grid = new GridHelper(140, 56, COLOR_LINE, COLOR_LINE);
    grid.position.y = y;
    grid.material.transparent = true;
    grid.material.opacity = opacity;
    grid.material.depthWrite = false;
    // Kept on the object so the render loop never re-hardcodes these values.
    grid.userData.baseOpacity = opacity;
    world.add(grid);
    grids.push(grid);
  });

  // ---------------------------------------------------------------------------
  // 2. Technical solids — wireframe modules distributed along the travel path.
  // ---------------------------------------------------------------------------
  const solidGeometries = [
    new IcosahedronGeometry(2.1, 0),
    new OctahedronGeometry(1.9, 0),
    new BoxGeometry(2.6, 2.6, 2.6),
    new TorusGeometry(1.9, 0.55, 8, 14),
    new DodecahedronGeometry(1.8, 0),
    new ConeGeometry(1.8, 3, 6),
  ];

  // Hand-placed so nothing crowds the centre of the viewport where text sits.
  const solidLayout = [
    { x: -12.5, y: 3.4, z: 2, color: COLOR_LINE, opacity: 0.6 },
    { x: 12.8, y: -2.6, z: -5, color: COLOR_AMBER, opacity: 0.65 },
    { x: -14.5, y: -4.2, z: -14, color: COLOR_SAGE, opacity: 0.6 },
    { x: 13.5, y: 4.6, z: -23, color: COLOR_LINE, opacity: 0.52 },
    { x: -11.5, y: 2.2, z: -33, color: COLOR_AMBER, opacity: 0.5 },
    { x: 12.2, y: -3.8, z: -42, color: COLOR_SAGE, opacity: 0.46 },
    { x: -13.8, y: -1.4, z: -52, color: COLOR_LINE, opacity: 0.4 },
    { x: 11.8, y: 3.2, z: -61, color: COLOR_AMBER, opacity: 0.36 },
  ];

  const solids = solidLayout.map((spec, index) => {
    const geometry = solidGeometries[index % solidGeometries.length];
    const material = new LineBasicMaterial({
      color: spec.color,
      transparent: true,
      opacity: spec.opacity,
      depthWrite: false,
    });
    const mesh = new LineSegments(new EdgesGeometry(geometry), material);
    mesh.position.set(spec.x, spec.y, spec.z);
    mesh.rotation.set(Math.random() * Math.PI, Math.random() * Math.PI, 0);

    // Each solid gets its own drift so the field never rotates in lockstep.
    mesh.userData.spin = {
      x: (Math.random() - 0.5) * 0.16,
      y: (Math.random() - 0.5) * 0.16,
    };
    mesh.userData.baseY = spec.y;
    mesh.userData.phase = Math.random() * Math.PI * 2;

    world.add(mesh);
    return mesh;
  });

  // ---------------------------------------------------------------------------
  // 3. Routing graph — nodes joined by edges, a nod to the MBG route solver.
  // ---------------------------------------------------------------------------
  const NODE_COUNT = 90;
  const nodePositions = [];
  for (let i = 0; i < NODE_COUNT; i += 1) {
    nodePositions.push(
      new Vector3(
        (Math.random() - 0.5) * 46,
        (Math.random() - 0.5) * 15,
        -Math.random() * 72 + 6
      )
    );
  }

  const nodeGeometry = new BufferGeometry().setFromPoints(nodePositions);
  const nodes = new Points(
    nodeGeometry,
    new PointsMaterial({
      color: COLOR_LINE,
      size: 0.19,
      transparent: true,
      opacity: 0.85,
      depthWrite: false,
      sizeAttenuation: true,
    })
  );
  world.add(nodes);

  // Connect only genuinely close pairs, so the result reads as a sparse graph
  // rather than a dense cobweb.
  const edgePoints = [];
  const LINK_RADIUS = 9;
  for (let i = 0; i < nodePositions.length; i += 1) {
    for (let j = i + 1; j < nodePositions.length; j += 1) {
      if (nodePositions[i].distanceTo(nodePositions[j]) < LINK_RADIUS) {
        edgePoints.push(nodePositions[i], nodePositions[j]);
      }
    }
  }

  const edges = new LineSegments(
    new BufferGeometry().setFromPoints(edgePoints),
    new LineBasicMaterial({
      color: COLOR_LINE,
      transparent: true,
      opacity: 0.2,
      depthWrite: false,
    })
  );
  world.add(edges);

  // ---------------------------------------------------------------------------
  // 4. Scroll + pointer state
  // ---------------------------------------------------------------------------
  const CAMERA_START_Z = 16;
  const TRAVEL_DEPTH = 64; // how far the camera advances across a full read

  let targetProgress = 0;
  let currentProgress = 0;
  let pointerX = 0;
  let pointerY = 0;
  let targetPointerX = 0;
  let targetPointerY = 0;

  function readScrollProgress() {
    const scrollable = document.documentElement.scrollHeight - window.innerHeight;
    targetProgress = scrollable > 0 ? window.scrollY / scrollable : 0;
  }

  readScrollProgress();
  currentProgress = targetProgress;

  window.addEventListener('scroll', readScrollProgress, { passive: true });

  window.addEventListener(
    'pointermove',
    (event) => {
      targetPointerX = (event.clientX / window.innerWidth - 0.5) * 2;
      targetPointerY = (event.clientY / window.innerHeight - 0.5) * 2;
    },
    { passive: true }
  );

  function resize() {
    camera.aspect = window.innerWidth / window.innerHeight;
    camera.updateProjectionMatrix();
    renderer.setPixelRatio(Math.min(window.devicePixelRatio, 2));
    renderer.setSize(window.innerWidth, window.innerHeight, false);
  }

  window.addEventListener('resize', resize);

  // ---------------------------------------------------------------------------
  // 5. Render
  // ---------------------------------------------------------------------------
  function applyProgress(progress, elapsed) {
    camera.position.z = CAMERA_START_Z - progress * TRAVEL_DEPTH;

    // A gentle sideways sway keeps the travel from feeling like a straight tunnel.
    camera.position.x = Math.sin(progress * Math.PI * 2) * 1.9 + pointerX * 1.1;
    camera.position.y = Math.cos(progress * Math.PI * 1.5) * 1.1 - pointerY * 0.8;
    camera.lookAt(0, 0, camera.position.z - 12);

    solids.forEach((mesh, index) => {
      // Rotation is anchored to scroll so the scene is still when the page is.
      mesh.rotation.x = mesh.userData.phase + progress * mesh.userData.spin.x * 26 + elapsed * 0.04;
      mesh.rotation.y = mesh.userData.phase + progress * mesh.userData.spin.y * 26 + elapsed * 0.05;
      mesh.position.y =
        mesh.userData.baseY + Math.sin(elapsed * 0.4 + index) * 0.32;
    });

    // Grids slide toward the viewer, reinforcing the sense of forward travel.
    grids.forEach((grid) => {
      grid.position.z = ((progress * 40) % 5) - 2.5;
      grid.material.opacity = grid.userData.baseOpacity * (1 - progress * 0.3);
    });

    nodes.rotation.y = progress * 0.5;
    edges.rotation.y = progress * 0.5;
    world.rotation.z = Math.sin(progress * Math.PI) * 0.03;
  }

  if (prefersReduced) {
    // Honour reduced-motion: draw one composed frame and stop.
    applyProgress(0, 0);
    renderer.render(scene, camera);
    // Still respond to scroll, but without continuous animation.
    window.addEventListener(
      'scroll',
      () => {
        applyProgress(targetProgress, 0);
        renderer.render(scene, camera);
      },
      { passive: true }
    );
    return;
  }

  const clock = new Clock();
  let running = true;

  document.addEventListener('visibilitychange', () => {
    running = !document.hidden;
    if (running) {
      clock.getDelta(); // discard time spent hidden
      requestAnimationFrame(tick);
    }
  });

  function tick() {
    if (!running) return;

    const elapsed = clock.getElapsedTime();

    // Smooth every input so scrolling feels weighted rather than twitchy.
    currentProgress += (targetProgress - currentProgress) * 0.07;
    pointerX += (targetPointerX - pointerX) * 0.05;
    pointerY += (targetPointerY - pointerY) * 0.05;

    applyProgress(currentProgress, elapsed);
    renderer.render(scene, camera);
    requestAnimationFrame(tick);
  }

  requestAnimationFrame(tick);
}
