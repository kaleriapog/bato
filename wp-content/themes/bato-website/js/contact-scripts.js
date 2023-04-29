import mobileMenu from './modules/mobileMenu.js';
import preloader from './modules/preloader.js';
import animationWave from './modules/animationWave.js';
import cookies from "./modules/cookies.js";

document.addEventListener('DOMContentLoaded', () => {
    if (navigator.platform !== 'MacIntel') {
        document.body.classList.add('windows');
    }

    const page = document.querySelector('.page');

     // for video for Mozilla Firefox, Safari
    if (
      navigator.userAgent.indexOf('Safari') != -1 &&
      navigator.userAgent.indexOf('Chrome') === -1
    ) {
      page.classList.add('body-safari');
    } else if (navigator.userAgent.indexOf('Firefox') != -1) {
      page.classList.add('body-firefox');
    }

    const menuMainItems = document.querySelectorAll('.header-menu .menu-item a');
    const socialMedia = document.querySelectorAll('.social-media .menu-item a');
    const cookiesBlock = document.querySelector('.block-cookies')

    mobileMenu();
    preloader();
    animationWave(menuMainItems);
    animationWave(socialMedia);
    cookies(cookiesBlock)
});

