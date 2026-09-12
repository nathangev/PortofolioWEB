/**
 * Interactive Leaf Classifier Pathology Comparison Slider
 */
export function initLeafInspector() {
  const container = document.querySelector('.leaf-slider-container');
  const afterPane = document.querySelector('.leaf-slider-after');
  const handle = document.querySelector('.leaf-slider-handle');

  if (!container || !afterPane || !handle) return;

  let isDragging = false;

  function setSliderPosition(x) {
    const rect = container.getBoundingClientRect();
    let pos = (x - rect.left) / rect.width;
    pos = Math.max(0.08, Math.min(0.92, pos));

    afterPane.style.width = `${pos * 100}%`;
    handle.style.left = `${pos * 100}%`;
  }

  handle.addEventListener('mousedown', () => { isDragging = true; });
  window.addEventListener('mouseup', () => { isDragging = false; });
  window.addEventListener('mousemove', (e) => {
    if (!isDragging) return;
    setSliderPosition(e.clientX);
  });

  // Touch support for mobile devices
  handle.addEventListener('touchstart', () => { isDragging = true; }, { passive: true });
  window.addEventListener('touchend', () => { isDragging = false; });
  window.addEventListener('touchmove', (e) => {
    if (!isDragging || !e.touches[0]) return;
    setSliderPosition(e.touches[0].clientX);
  }, { passive: true });

  // Click on container jumps slider
  container.addEventListener('click', (e) => {
    setSliderPosition(e.clientX);
  });
}
