import mobileMenu from './modules/mobileMenu.js';
import animationText from './modules/animationText.js';
import preloader from './modules/preloader.js';
import animationWave from './modules/animationWave.js';
import teamCubes from './modules/teamCubes.js';
import magneticBtn from './modules/magneticBtn.js';
import slider from './modules/slider.js';
import animationSections from './modules/animationSections.js';
import animationFooter from './modules/animationFooter.js';
import cookies from "./modules/cookies.js";
import accordion from "./modules/accordion.js";
import fixedHeader from "./modules/fixed-header.js";
import interactiveBlock from "./modules/interactive-block.js";

document.addEventListener('DOMContentLoaded', () => {
  if (navigator.platform !== 'MacIntel') {
    document.body.classList.add('windows');
  }

  const page = document.querySelector(".page");

   // for video for Mozilla Firefox, Safari
  if (
    navigator.userAgent.indexOf('Safari') != -1 &&
    navigator.userAgent.indexOf('Chrome') === -1
  ) {
    page.classList.add('body-safari');
  } else if (navigator.userAgent.indexOf('Firefox') != -1) {
    page.classList.add('body-firefox');
  }

  const cardTitleItems = document.querySelectorAll(
    '.section-cards .card-title'
  );
  const menuMainItems = document.querySelectorAll('.header-menu .menu-item a');
  const socialMedia = document.querySelectorAll('.social-media .menu-item a');
  const linkContactPhrase = document.querySelectorAll(
    '.section-contact__phrase a'
  );
  const heroHome = document.querySelectorAll('.section-banner');
  const sliderHome = document.querySelector('.section-slider .slider-home');
  const sectionService = document.querySelectorAll('.section-cards');
  const sectionAbout = document.querySelectorAll('.section-about');
  const sectionOffers = document.querySelectorAll('.section-offers');
  const sectionTeam = document.querySelectorAll('.section-team');
  const sectionNumbers = document.querySelectorAll('.section-numbers');
  const sectionContact = document.querySelectorAll('.section-contact')
  const sectionAccordion = document.querySelectorAll('.section-accordion')
  const splideAboutTeam = document.querySelector('.splide-about-team')
  const footer = document.querySelectorAll('.footer')
  const cubeSmall = document.querySelector('.block-cube-small')
  const cookiesBlock = document.querySelector('.block-cookies')
  const accordionBlock = document.querySelectorAll('.accordion')
  const footerMain = document.querySelector('.footer')

  mobileMenu()
  animationText()
  preloader()
  teamCubes()
  magneticBtn(linkContactPhrase)
  slider(sliderHome)
  animationSections(sectionService)
  animationSections(sectionAbout)
  animationSections(sectionOffers)
  animationSections(sectionTeam)
  animationSections(sectionNumbers)
  animationSections(sectionContact)
  animationSections(sectionAccordion)
  animationFooter(footer)
  cookies(cookiesBlock)
  accordion(accordionBlock)
  fixedHeader(heroHome)
  interactiveBlock(footerMain)

  if (!document.querySelector('body').classList.contains('body-safari')) {
    animationWave(cardTitleItems);
    animationWave(menuMainItems);
    animationWave(socialMedia);
  }

  if (document.querySelector('body').classList.contains('body-safari')) {
    cardTitleItems.forEach((item) => {
      item.classList.add('animation-no-wave');
    })
    menuMainItems.forEach((item) => {
      item.classList.add('animation-no-wave');
    })
    socialMedia.forEach((item) => {
      item.classList.add('animation-no-wave');
    })
  }

  const video = document.querySelector("#video-bg");
  if (video) {
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
          entry.target.pause();
        }
      });
    }
    observer.observe(video);
  }
});

