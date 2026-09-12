/**
 * 3D Blueprint Scan Hero & Pointer Tracking Interaction (§4)
 */
export function initHeroBlueprint() {
  const stage = document.querySelector('.hero-stage');
  const plane = document.querySelector('.blueprint-plane');
  const scanline = document.querySelector('.scanline-sweep');
  const svg = document.querySelector('.leader-line-svg');

  if (!stage || !plane) return;

  const prefersReduced = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

  // Single Scan-line sweep once on load
  if (!prefersReduced && scanline) {
    setTimeout(() => {
      scanline.classList.add('animate');
    }, 400);
  }

  // Resting tilt values
  const restingX = 4;
  const restingY = -6;

  if (prefersReduced) {
    plane.style.transform = `rotateX(${restingX}deg) rotateY(${restingY}deg)`;
    updateLeaderLines();
    return;
  }

  let targetRotateX = restingX;
  let targetRotateY = restingY;
  let currentRotateX = restingX;
  let currentRotateY = restingY;

  // Track cursor across stage
  stage.addEventListener('mousemove', (e) => {
    const rect = stage.getBoundingClientRect();
    const x = e.clientX - rect.left;
    const y = e.clientY - rect.top;

    const centerX = rect.width / 2;
    const centerY = rect.height / 2;

    // Normalizing between -1 and 1
    const normX = (x - centerX) / centerX;
    const normY = (y - centerY) / centerY;

    // Max 8–10 degrees
    targetRotateX = -normY * 8 + restingX;
    targetRotateY = normX * 9 + restingY;
  });

  stage.addEventListener('mouseleave', () => {
    targetRotateX = restingX;
    targetRotateY = restingY;
  });

  // Physics animation loop with smooth lerp
  let animationFrameId;
  function animate() {
    currentRotateX += (targetRotateX - currentRotateX) * 0.08;
    currentRotateY += (targetRotateY - currentRotateY) * 0.08;

    plane.style.transform = `rotateX(${currentRotateX.toFixed(2)}deg) rotateY(${currentRotateY.toFixed(2)}deg)`;

    updateLeaderLines();
    animationFrameId = requestAnimationFrame(animate);
  }

  animate();

  // Function to draw SVG connecting leader lines from photo corners to facts
  function updateLeaderLines() {
    if (!svg) return;

    const callouts = document.querySelectorAll('.leader-callout');
    if (!callouts.length) return;

    const stageRect = stage.getBoundingClientRect();
    const planeRect = plane.getBoundingClientRect();

    let pathsHtml = '';

    callouts.forEach((callout) => {
      const calloutRect = callout.getBoundingClientRect();
      const anchor = callout.dataset.anchor; // 'tl', 'tr', 'bl', 'br'

      let planeX, planeY;
      let calloutX, calloutY;

      // Plane coordinates relative to stage
      if (anchor === 'tl') {
        planeX = planeRect.left - stageRect.left + 15;
        planeY = planeRect.top - stageRect.top + 25;
        calloutX = calloutRect.right - stageRect.left;
        calloutY = calloutRect.top - stageRect.top + calloutRect.height / 2;
      } else if (anchor === 'tr') {
        planeX = planeRect.right - stageRect.left - 15;
        planeY = planeRect.top - stageRect.top + 25;
        calloutX = calloutRect.left - stageRect.left;
        calloutY = calloutRect.top - stageRect.top + calloutRect.height / 2;
      } else if (anchor === 'bl') {
        planeX = planeRect.left - stageRect.left + 15;
        planeY = planeRect.bottom - stageRect.top - 25;
        calloutX = calloutRect.right - stageRect.left;
        calloutY = calloutRect.top - stageRect.top + calloutRect.height / 2;
      } else { // 'br'
        planeX = planeRect.right - stageRect.left - 15;
        planeY = planeRect.bottom - stageRect.top - 25;
        calloutX = calloutRect.left - stageRect.left;
        calloutY = calloutRect.top - stageRect.top + calloutRect.height / 2;
      }

      // Midpoint elbow construction line
      const midX = (planeX + calloutX) / 2;

      pathsHtml += `
        <circle cx="${planeX}" cy="${planeY}" r="3" fill="#DCE8F5" />
        <path d="M ${planeX} ${planeY} L ${midX} ${planeY} L ${calloutX} ${calloutY}" 
              fill="none" stroke="#DCE8F5" stroke-width="0.9" stroke-dasharray="3 3" opacity="0.65" />
      `;
    });

    svg.innerHTML = pathsHtml;
  }

  window.addEventListener('resize', updateLeaderLines);
}
