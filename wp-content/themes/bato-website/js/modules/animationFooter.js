export default function animationFooter(sections) {
  if (!sections) return;

  const heightDevice = window.innerHeight

  const observerOptions = {
    root: null,
    rootMargin: `${heightDevice - 50}px`,
    threshold: 0.5,
  };

  let observer = new IntersectionObserver(observerCallback, observerOptions);
  function observerCallback(entries) {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        entry.target.classList.add("animation");
      }
    });
  }
  sections.forEach((i) => {
    if (i) {
      observer.observe(i);
    }
  });
}
