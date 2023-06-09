import sectionAboutReviews from "./modules/sectionAboutReviews.js";
import animationSections from "./modules/animationSections.js";
import fixedHeader from "./modules/fixed-header.js";

document.addEventListener("DOMContentLoaded", () => {
  const sectionAReviews = document.querySelector(".section-about-reviews");
  const sections = document.querySelectorAll(".section");
  const projectsItems = document.querySelectorAll(".section-projects__item");
  const sectionHero = document.querySelector(".section-projects-hero");
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

  animationSections(sections, 0);
  animationSections(projectsItems, 0);
  sectionAboutReviews(sectionAReviews);
  fixedHeader(sectionHero);
});
