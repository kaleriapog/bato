import mobileMenu from './modules/mobileMenu.js';
import preloader from './modules/preloader.js';
import animationWave from './modules/animationWave.js';
import teamCubes from './modules/teamCubes.js';
import slider from './modules/slider.js';
import animationSections from './modules/animationSections.js';
import animationFooter from './modules/animationFooter.js';
import heroAbout from './modules/heroAbout.js';
import sectionOurValues from "./modules/sectionOurValues.js";
import sliderAboutTeam from "./modules/sliderAboutTeam.js";
import mapAbout from "./modules/mapAbout.js";
import sectionAboutReviews from "./modules/sectionAboutReviews.js";
import animationAboutFamily from "./modules/animationAboutFamily.js";
import cookies from "./modules/cookies.js";

document.addEventListener('DOMContentLoaded', () => {
    const page = document.querySelector('.page');

    if (navigator.platform !== 'MacIntel') {
        document.body.classList.add('windows');
    }

    //  for video for Mozilla Firefox, Safari
    if (
        navigator.userAgent.indexOf('Safari') != -1 &&
        navigator.userAgent.indexOf('Chrome') === -1
    ) {
        page.classList.add('body-safari');
    } else if (navigator.userAgent.indexOf('Firefox') != -1) {
        page.classList.add('body-firefox');
    }

    const cardTitleItems = document.querySelectorAll('.section-cards .card-title');
    const menuMainItems = document.querySelectorAll('.header-menu .menu-item a');
    const socialMedia = document.querySelectorAll('.social-media .menu-item a');
    const sliderHome = document.querySelector('.section-slider .slider-home');
    const sectionService = document.querySelectorAll('.section-cards');
    const sectionAbout = document.querySelectorAll('.section-about');
    const sectionOffers = document.querySelectorAll('.section-offers');
    const sectionNumbers = document.querySelectorAll('.section-numbers');
    const sectionContact = document.querySelectorAll('.section-contact');
    const footer = document.querySelectorAll('.footer')
    const sectionAboutHero = document.querySelector('.section-about-hero')
    const sectionAboutOurValues = document.querySelector('.section-our-values')
    const sectionAboutSliderTeam = document.querySelector('.section-about-team')
    const sectionAboutMap = document.querySelector('.section-about-hq')
    const sectionAReviews = document.querySelector('.section-about-reviews')
    const sectionAboutFamily = document.querySelector('.section-about-family')
    const cookiesBlock = document.querySelector('.block-cookies')

    mobileMenu();
    preloader();
    animationWave(cardTitleItems);
    animationWave(menuMainItems);
    animationWave(socialMedia);
    teamCubes();
    slider(sliderHome);
    animationSections(sectionService);
    animationSections(sectionAbout);
    animationSections(sectionOffers);
    animationSections(sectionNumbers);
    animationSections(sectionContact);
    animationFooter(footer);
    heroAbout(sectionAboutHero)
    sectionOurValues(sectionAboutOurValues)
    sliderAboutTeam(sectionAboutSliderTeam)
    mapAbout(sectionAboutMap)
    sectionAboutReviews(sectionAReviews)
    animationAboutFamily(sectionAboutFamily)
    cookies(cookiesBlock)

    if(window.screen.width <= 1024) {
        window.addEventListener("orientationchange", function () {
               location.reload();
        }, false);
    }
});
