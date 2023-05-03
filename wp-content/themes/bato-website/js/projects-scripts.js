import sectionAboutReviews from "./modules/sectionAboutReviews.js";
import preloader from "./modules/preloader.js";
import animationSections from "./modules/animationSections.js";

document.addEventListener("DOMContentLoaded", () => {
  const sectionAReviews = document.querySelector(".section-projects-reviews");
  const sections = document.querySelectorAll(".section");

  const target = document.querySelector(".section-projects");

  const observerOptions = {
    root: null,
    rootMargin: "200px",
    threshold: 0.2,
  };

  let observer = new IntersectionObserver(observerCallback, observerOptions);
  function observerCallback(entries) {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        entry.target.classList.add("animation");
      }
    });
  }

  observer.observe(target);

  animationSections(sections);
  preloader();

  sectionAboutReviews(sectionAReviews);

  // window.addEventListener("resize", () => {
  //   if (window.innerWidth <= 1024 || window.innerHeight <= 500) {
  //     location.reload();
  //   }
  // });
});
