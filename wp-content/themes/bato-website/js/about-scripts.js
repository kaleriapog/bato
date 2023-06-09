import animationWave from "./modules/animationWave.js";
import teamCubes from "./modules/teamCubes.js";
import animationSections from "./modules/animationSections.js";
import heroAbout from "./modules/heroAbout.js";
import sectionOurValues from "./modules/sectionOurValues.js";
import mapAbout from "./modules/mapAbout.js";
import sectionAboutReviews from "./modules/sectionAboutReviews.js";
import animationAboutFamily from "./modules/animationAboutFamily.js";
import fixedHeader from "./modules/fixed-header.js";

document.addEventListener("DOMContentLoaded", () => {
  const cardTitleItems = document.querySelectorAll(
    ".section-cards .card-title"
  );

  const sectionAboutHero = document.querySelector(".section-about-hero");
  const sectionAboutOurValues = document.querySelector(".section-our-values");
  const sectionAboutMap = document.querySelector(".section-about-hq");
  const sectionAReviews = document.querySelector(".section-about-reviews");
  const sectionAboutFamily = document.querySelector(".section-about-family");
  const sections = document.querySelectorAll(".section:not(.map)");
  const sectionsMap = document.querySelectorAll(".map");
  const secondBlockInPage = document.querySelector(".section-about-our-story");
  const sectionFollowLinks = document.querySelectorAll(".section-about-follow__link a");

  animationWave(cardTitleItems);
  animationWave(sectionFollowLinks);
  teamCubes();

  animationSections(sections, 0.1);
  animationSections(sectionsMap, 0.4);

  sectionOurValues(sectionAboutOurValues);
  sectionAboutReviews(sectionAReviews);
  heroAbout(sectionAboutHero);
  mapAbout(sectionAboutMap);
  animationAboutFamily(sectionAboutFamily);
  fixedHeader(secondBlockInPage);
});
