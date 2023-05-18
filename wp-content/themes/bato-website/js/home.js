import animationText from "./modules/animationText.js";
import animationWave from "./modules/animationWave.js";
import teamCubes from "./modules/teamCubes.js";
import magneticBtn from "./modules/magneticBtn.js";
import animationSections from "./modules/animationSections.js";
import animationFooter from "./modules/animationFooter.js";
import accordion from "./modules/accordion.js";
import fixedHeader from "./modules/fixed-header.js";
import interactiveBlock from "./modules/interactive-block.js";
import homeAnimationPause from "./modules/homeAnimationPause.js";

document.addEventListener("DOMContentLoaded", () => {
  const cardTitleItems = document.querySelectorAll(
    ".section-cards .card-title"
  );
  const menuMainItems = document.querySelectorAll(".header-menu .menu-item a");
  const socialMedia = document.querySelectorAll(".social-media .menu-item a");
  const linkContactPhrase = document.querySelectorAll( ".section-contact__phrase a");
  const heroHomeFirst = document.querySelector(".section-banner");
  const sectionService = document.querySelectorAll(".section-cards");
  const sectionAbout = document.querySelectorAll(".section-about");
  const sectionOffers = document.querySelectorAll(".section-offers");
  const sectionTeam = document.querySelectorAll(".section-team");
  const sectionNumbers = document.querySelectorAll(".section-numbers");
  const sectionContact = document.querySelectorAll(".section-contact");
  const sectionAccordion = document.querySelectorAll(".section-accordion");
  const sectionTechnologies = document.querySelectorAll(".section-technologies");
  const safari = document.querySelector("body").classList.contains("body-safari")
  const footer = document.querySelectorAll(".footer");
  const accordionBlock = document.querySelectorAll(".accordion");
  const footerMain = document.querySelector(".footer");

  animationText();
  accordion(accordionBlock);
  teamCubes();
  magneticBtn(linkContactPhrase);
  animationSections(sectionService);
  animationSections(sectionAbout);
  animationSections(sectionOffers);
  animationSections(sectionTeam, 0.1);
  animationSections(sectionNumbers);
  animationSections(sectionContact);
  animationSections(sectionAccordion);
  animationSections(sectionTechnologies);
  animationFooter(footer);
  homeAnimationPause();
  fixedHeader(heroHomeFirst);
  interactiveBlock(footerMain);

  if (!safari) {
    animationWave(cardTitleItems);
  }

  if (safari) {
    cardTitleItems.forEach((item) => {
      item.classList.add("animation-no-wave");
    });
    menuMainItems.forEach((item) => {
      item.classList.add("animation-no-wave");
    });
    socialMedia.forEach((item) => {
      item.classList.add("animation-no-wave");
    });
  }

  const video = document.querySelector("#video-bg");

  if (video) {
    let videoPlayOnLoad = true

      function isSafariNoVideo() {
        //hide video on safari if the user has power saving mode enabled
        //monitor whether the browser has paused the video
          const mediaLaptop = window.innerWidth <= 1024;

          if (!mediaLaptop) {
            heroHomeFirst.classList.add("no-video")
            videoPlayOnLoad = false
          }
      }

      if(safari) {
        video.addEventListener("pause", () => {
          if(videoPlayOnLoad) {
            isSafariNoVideo()
          }
        })
      }

    window.innerWidth <= 1024 ? video.pause() : video.play();
    const observerOptions = {
      root: null,
      rootMargin: "100px",
      threshold: 0.5,
    };
    let observer = new IntersectionObserver(observerCallback, observerOptions);
    function observerCallback(entries) {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          entry.target.play();
        } else {
          videoPlayOnLoad = false
          entry.target.pause();
        }
      });
    }
    observer.observe(video);
  }
});
