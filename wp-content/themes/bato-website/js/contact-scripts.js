import preloader from "./modules/preloader.js";
import animationSections from "./modules/animationSections.js";

document.addEventListener("DOMContentLoaded", () => {
  const sections = document.querySelectorAll(".section");
  animationSections(sections);

  preloader();
});
