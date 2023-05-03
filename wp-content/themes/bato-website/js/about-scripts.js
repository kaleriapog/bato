import preloader from "./modules/preloader.js";
import animationWave from "./modules/animationWave.js";
import teamCubes from "./modules/teamCubes.js";
import animationSections from "./modules/animationSections.js";
import heroAbout from "./modules/heroAbout.js";
import sectionOurValues from "./modules/sectionOurValues.js";
import sliderAboutTeam from "./modules/sliderAboutTeam.js";
import mapAbout from "./modules/mapAbout.js";
import sectionAboutReviews from "./modules/sectionAboutReviews.js";
import animationAboutFamily from "./modules/animationAboutFamily.js";

document.addEventListener("DOMContentLoaded", () => {
  const cardTitleItems = document.querySelectorAll(
    ".section-cards .card-title"
  );

  const sectionAboutHero = document.querySelector(".section-about-hero");
  const sectionAboutOurValues = document.querySelector(".section-our-values");
  const sectionAboutSliderTeam = document.querySelector(".section-about-team");
  const sectionAboutMap = document.querySelector(".section-about-hq");
  const sectionAReviews = document.querySelector(".section-about-reviews");
  const sectionAboutFamily = document.querySelector(".section-about-family");
  const sections = document.querySelectorAll(".section");

  preloader();
  animationWave(cardTitleItems);

  teamCubes();
  animationSections(sections, 0.1);

  heroAbout(sectionAboutHero);
  sectionOurValues(sectionAboutOurValues);
  sliderAboutTeam(sectionAboutSliderTeam);
  mapAbout(sectionAboutMap);
  sectionAboutReviews(sectionAReviews);
  animationAboutFamily(sectionAboutFamily);

  // window.addEventListener("resize", () => {
  //   if (window.screen.width <= 1024) {
  //     location.reload();
  //   }
  // });
});
