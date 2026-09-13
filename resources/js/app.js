import { initRuler } from './ruler';
import { initHeroBlueprint } from './hero-blueprint';
import { initLeafInspector } from './leaf-inspector';

document.addEventListener('DOMContentLoaded', () => {
  initRuler();
  initHeroBlueprint();
  initLeafInspector();

  // The 3D background is a progressive enhancement. three.js is pulled in as a
  // separate chunk after the page has painted, so the readable content is never
  // waiting on it. If the import or WebGL init fails, the flat backgrounds stay.
  if (document.getElementById('scene-3d')) {
    import('./scene-3d')
      .then(({ initScene3d }) => initScene3d())
      .catch(() => {
        /* No 3D layer available — the page renders fine without it. */
      });
  }
});
