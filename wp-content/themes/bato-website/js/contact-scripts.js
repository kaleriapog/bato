import preloader from "./modules/preloader.js";
import animationSections from "./modules/animationSections.js";
import fixedHeader from "./modules/fixed-header.js";

document.addEventListener("DOMContentLoaded", () => {
  const sections = document.querySelectorAll(".section");
  const sectionContact = document.querySelector(".contact-page");

  animationSections(sections);
  fixedHeader(sectionContact);

  preloader();
});
