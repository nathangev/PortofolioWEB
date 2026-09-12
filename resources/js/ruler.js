/**
 * Blueprint Left Ruler Rail & Mobile Progress Scroll Spy
 */
export function initRuler() {
  const sections = document.querySelectorAll('section[data-ruler-section]');
  const rulerNodes = document.querySelectorAll('.ruler-section-node');
  const mobileFill = document.querySelector('.mobile-progress-fill');

  if (!sections.length) return;

  const sectionRegisters = {};
  sections.forEach((section) => {
    sectionRegisters[section.id] = section.dataset.register || 'blueprint';
  });

  const observerOptions = {
    root: null,
    rootMargin: '-30% 0px -40% 0px',
    threshold: 0,
  };

  const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        const id = entry.target.id;
        
        // Update ruler active state
        rulerNodes.forEach((node) => {
          if (node.getAttribute('href') === `#${id}`) {
            node.classList.add('active');
          } else {
            node.classList.remove('active');
          }
        });

        // Toggle bench register mode on body for contrast
        const register = sectionRegisters[id];
        if (register === 'bench') {
          document.body.classList.add('bench-active');
        } else {
          document.body.classList.remove('bench-active');
        }
      }
    });
  }, observerOptions);

  sections.forEach((section) => observer.observe(section));

  // Mobile progress line on scroll
  window.addEventListener('scroll', () => {
    const totalHeight = document.documentElement.scrollHeight - window.innerHeight;
    if (totalHeight > 0 && mobileFill) {
      const progress = (window.scrollY / totalHeight) * 100;
      mobileFill.style.width = `${Math.min(100, Math.max(0, progress))}%`;
    }
  }, { passive: true });
}
