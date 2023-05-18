import animationWave from "./modules/animationWave.js";
import mobileMenu from "./modules/mobileMenu.js";
import animationFooter from "./modules/animationFooter.js";
import cookies from "./modules/cookies.js"
import preloader from "./modules/preloader.js";

document.addEventListener("DOMContentLoaded", () => {
  if (navigator.platform !== "MacIntel") {
    document.body.classList.add("windows");
  }

  const page = document.querySelector(".page");

  // for video for Mozilla Firefox, Safari
  if (
    navigator.userAgent.indexOf("Safari") != -1 &&
    navigator.userAgent.indexOf("Chrome") === -1
  ) {
    page.classList.add("body-safari");
  } else if (navigator.userAgent.indexOf("Firefox") != -1) {
    page.classList.add("body-firefox");
  }

  const menuMainItems = document.querySelectorAll(".header-menu .menu-item a");
  const socialMedia = document.querySelectorAll(".social-media .menu-item a");
  const cursorBlock = document.querySelector('.radial-gradient');

 animationWave(menuMainItems);
 animationWave(socialMedia);

  const cookiesBlock = document.querySelector(".block-cookies");
  const footer = document.querySelectorAll(".footer");
  let blocksToScroll = document.querySelectorAll(".custom-scrollbar");

  mobileMenu();
  animationFooter(footer);

  if (cookiesBlock) {
    cookies(cookiesBlock);
  }

  if(blocksToScroll) {
    const mediaLaptop = window.innerWidth <= 1024

    if(mediaLaptop) {
      let Scrollbar = window.Scrollbar;

      blocksToScroll.forEach((block) => {
        Scrollbar.init(block, {
          alwaysShowTracks: true,
        });
      })
    }
  }

  preloader();
});
