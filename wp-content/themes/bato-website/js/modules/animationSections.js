export default function animationSections(sections, thresholdCustom = 0.3) {
  if (!sections) return;

  const observerOptions = {
    root: null,
    rootMargin: "0px",
    threshold: thresholdCustom,
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
