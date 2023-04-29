export default function animationSections(sections) {
  if (!sections) return;

  const observerOptions = {
    root: null,
    rootMargin: "100px",
    threshold: 0.1,
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
