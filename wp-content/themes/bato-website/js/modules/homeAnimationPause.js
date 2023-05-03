export default function homeAnimationPause() {
  const sections = document.querySelectorAll("section");

  const observerOptions = {
    root: null,
    rootMargin: "100px",
    threshold: 0.5,
  };

  const observer = new IntersectionObserver(observerCallback, observerOptions);
  function observerCallback(entries) {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        entry.target.classList.add("anim");
      } else {
        entry.target.classList.remove("anim");
      }
    });
  }

  sections.forEach((i) => {
    if (i) {
      observer.observe(i);
    }
  });
}
