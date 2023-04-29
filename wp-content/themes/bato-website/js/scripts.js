// document.addEventListener("DOMContentLoaded", () => {
//   let controller = new ScrollMagic.Controller();
//   let body = document.querySelector("body");
//   const pageTemplateHome = document.querySelector(".page-template-home");
//   const menuMainItems = document.querySelectorAll(".header-menu .menu-item a");
//   const cardTitleItems = document.querySelectorAll(
//     ".section-cards .card-title"
//   );
//   const socialMedia = document.querySelectorAll(".social-media .menu-item a");

//   // const preloaderBlock = document.querySelector(".preloader");
//   const page = document.querySelector(".page");
//   const sectionNumbersNumber = document.querySelectorAll(
//     ".section-numbers__number"
//   );
//   const linkContactPhrase = document.querySelector(
//     ".section-contact__phrase a"
//   );

//   const speedSlider = 1;

//   const header = document.querySelector("header");
//   // const allCardsInSectionServices = document.querySelectorAll(".card-services");
//   // let teamCube = document.querySelector(".section-team__items-wrapp");
//   let scrollCount = 0;
//   let isScrolling;
//   let teamItemWidth;
//   // let halo = document.querySelector(".halo");
//   let sectionBannerSubtitle = document.querySelector(
//     ".section-banner .subtitle"
//   );
  // let sliderHome = document.querySelector(".slider-home");

//   //page About
//   const sectionAboutHeroMedia = document.querySelector(
//     ".section-about-hero__media"
//   );
//   const sectionOurValues = document.querySelector(".section-our-values");
//   const splideAboutTeam = document.querySelector(".splide-about-team");
//   const sectionAboutHqImages = document.querySelector(
//     ".section-about-hq__images"
//   );
//   const sectionAboutFamily = document.querySelector(".section-about-family");
//   const sectionAboutReviews = document.querySelector(".section-about-reviews");
//   // const followAboutItems = document.querySelectorAll(
//   //   ".section-about-follow__link a"
//   // );

//   const mediaLaptop = window.screen.width <= 1024;
//   const mediaPortrait = window.innerWidth < window.innerHeight;
//   const mediaMobile = window.innerWidth <= 768;
//   const mediaMobileSmall = window.innerWidth <= 350;
//   const mediaHeightMobileExtraSmall = window.innerHeight <= 500;

//   // for windows
//   if (navigator.platform !== "MacIntel") {
//     document.body.classList.add("windows");
//   }

//   // preloader
//   // if (preloaderBlock) {
//   //   window.addEventListener("load", () => {
//   //     preloaderBlock.classList.add("preloader-start");
//   //     page.classList.add("visible");
//   //     halo.classList.remove("halo-hiden");
//   //   });
//   // }

//   // add border in header mobile
//   if (header && mediaLaptop) {
//     new ScrollMagic.Scene({
//       triggerElement: ".site-main",
//       duration: "65",
//       triggerHook: "onLeave",
//     })
//       // .addIndicators({name: "section-interactive"})
//       .on("start end", (e) => {
//         if (e.state === "AFTER" && e.scrollDirection === "FORWARD") {
//           header.classList.add("header-mobile-border");
//         } else if (e.state === "DURING" && e.scrollDirection === "REVERSE") {
//           header.classList.remove("header-mobile-border");
//         }
//       })
//       .addTo(controller)
//       .reverse(true);
//   }

//   // open nav
//   // iconOpenNav.addEventListener("click", () => {
//   //   setTimeout(() => {
//   //     header.classList.add("open-header-menu");
//   //   }, 400);
//   //   navBlockHeader.classList.add("open-menu");
//   //   page.classList.remove("visible");
//   //   preloaderMenuMob.classList.add("preloader-menu-mob-start");
//   // });

//   // close nav
//   // iconCloseNav.addEventListener("click", () => {
//   //   setTimeout(() => {
//   //     header.classList.remove("open-header-menu");
//   //   }, 400);
//   //   navBlockHeader.classList.remove("open-menu");
//   //   page.classList.add("visible");
//   //   preloaderMenuMob.classList.remove("preloader-menu-mob-start");
//   // });

//   // close menu on click menu item
//   // if (menuItem) {
//   //   menuItem.forEach((el) => {
//   //     el.addEventListener("click", () => {
//   //       setTimeout(() => {
//   //         header.classList.remove("open-header-menu");
//   //       }, 400);
//   //       navBlockHeader.classList.remove("open-menu");

//   //       if (!page.classList.contains("visible")) {
//   //         page.classList.add("visible");
//   //       }
//   //       if (preloaderMenuMob.classList.contains("preloader-menu-mob-start")) {
//   //         preloaderMenuMob.classList.remove("preloader-menu-mob-start");
//   //       }
//   //     });
//   //   });
//   // }

//   // animation wave
//   // function animationWave(arr) {
//   //   arr.forEach(function (el) {
//   //     let item = el.innerHTML;
//   //     let itemInSpan = item
//   //       .split("")
//   //       .reduce(
//   //         (res, char, index) =>
//   //           `${res}<span style="--index: ` + `${index}` + `">${char}</span>`,
//   //         ""
//   //       );

//   //     el.innerHTML =
//   //       `
//   //           <span class="animation-wrapp-wave">
//   //               <span class="wave-item">` +
//   //       itemInSpan +
//   //       `</span>
//   //               <span class="wave-item-clone">` +
//   //       itemInSpan +
//   //       `</span>
//   //           </span>`;
//   //   });
//   // }

//   // animation subtitle
//   // class TextScramble {
//   //   constructor(el) {
//   //     this.el = el;
//   //     this.chars = "!\\/?#abdehkmnpswxz";
//   //     this.update = this.update.bind(this);
//   //   }
//   //   setText(newText) {
//   //     const oldText = this.el.innerText;
//   //     const length = Math.max(oldText.length, newText.length);
//   //     const promise = new Promise((resolve) => (this.resolve = resolve));
//   //     this.queue = [];
//   //     for (let i = 0; i < length; i++) {
//   //       const from = oldText[i] || "";
//   //       const to = newText[i] || "";
//   //       const start = Math.floor(Math.random() * 40);
//   //       const end = start + Math.floor(Math.random() * 40);
//   //       this.queue.push({ from, to, start, end });
//   //     }
//   //     cancelAnimationFrame(this.frameRequest);
//   //     this.frame = 0;
//   //     this.update();
//   //     return promise;
//   //   }
//   //   update() {
//   //     let output = "";
//   //     let complete = 0;
//   //     for (let i = 0, n = this.queue.length; i < n; i++) {
//   //       let { from, to, start, end, char } = this.queue[i];
//   //       if (this.frame >= end) {
//   //         complete++;
//   //         output += to;
//   //       } else if (this.frame >= start) {
//   //         if (!char || Math.random() < 0.28) {
//   //           char = this.randomChar();
//   //           this.queue[i].char = char;
//   //         }
//   //         output += '<span class="dud-text">' + char + "</span>";
//   //       } else {
//   //         output += from;
//   //       }
//   //     }
//   //     this.el.innerHTML = output;
//   //     if (complete === this.queue.length) {
//   //       this.resolve();
//   //     } else {
//   //       this.frameRequest = requestAnimationFrame(this.update);
//   //       this.frame++;
//   //     }
//   //   }
//   //   randomChar() {
//   //     return this.chars[Math.floor(Math.random() * this.chars.length)];
//   //   }
//   // }

//   //  for video for Mozilla Firefox, Safari
//   if (
//     navigator.userAgent.indexOf("Safari") != -1 &&
//     navigator.userAgent.indexOf("Chrome") === -1
//   ) {
//     page.classList.add("body-safari");
//   } else if (navigator.userAgent.indexOf("Firefox") != -1) {
//     page.classList.add("body-firefox");
//   }

//   // if (!document.querySelector("body").classList.contains("body-safari")) {
//   //   animationWave(cardTitleItems);
//   //   animationWave(menuMainItems);
//   //   animationWave(socialMedia);
//   //   animationWave(followAboutItems);
//   // }

  // for splide slide
  // if (sliderHome && pageTemplateHome) {
  //   const splideSliderHome = new Splide(".slider-home", {
  //     updateOnMove: true,
  //     type: "loop",
  //     focus: "center",
  //     gap: 100,
  //     autoWidth: true,
  //     arrows: false,
  //     pagination: false,
  //     clones: 2,
  //     drag: false,
  //     autoScroll: {
  //       speed: speedSlider,
  //       pauseOnHover: false,
  //       pauseOnFocus: false,
  //     },
  //     breakpoints: {
  //       992: {
  //         gap: 55,
  //       },
  //     },
  //   });

  //   splideSliderHome.mount(window.splide.Extensions);
  // }

//   // section numbers
//   if (sectionNumbersNumber) {
//     sectionNumbersNumber.forEach((el) => {
//       let itemInSpan = el.innerHTML
//         .split("")
//         .reduce(
//           (res, char, index) =>
//             `${res}<span style="animation-delay: ${
//               1 + index / 3
//             }s;">${char}</span>`,
//           ""
//         );
//       el.innerHTML = itemInSpan;
//     });
//   }

//   if (
//     !document.querySelector("body").classList.contains("body-safari") &&
//     linkContactPhrase
//   ) {
//     if (pageTemplateHome) {
      // function upSpeedSlider() {
      //   scrollCount += 0.05;
      //   splideSliderHome.options = {
      //     autoScroll: {
      //       speed:
      //         speedSlider + scrollCount <= 5 ? speedSlider + scrollCount : 5,
      //     },
      //   };

      //   window.clearTimeout(isScrolling);

      //   isScrolling = setTimeout(function () {
      //     splideSliderHome.options = {
      //       autoScroll: {
      //         speed: speedSlider,
      //       },
      //     };
      //   }, 66);
      // }

      // function sliderSpeedOnScroll() {
      //   window.addEventListener("scroll", upSpeedSlider, false);
      // }

      // function defaultSpeedScrollSlider() {
      //   window.removeEventListener("scroll", upSpeedSlider, false);
      // }
  //   }
  // }


//   // for mobile
//   if (window.screen.width <= 1024) {
//     // back to top
//     let buttonToTop = document.getElementById("back-to-top");

//     buttonToTop.addEventListener("click", backToTop);

//     function backToTop() {
//       document.body.scrollTop = 0;
//       document.documentElement.scrollTop = 0;
//     }

//     // animation back to top button
//     let buttonToTopAnimation = new ScrollMagic.Scene({
//       triggerElement: "#back-to-top",
//       triggerHook: 0.9,
//     })
//       .setClassToggle(".back-to-top", "back-to-top-animation")
//       // .addIndicators({name: "5 - section-team"})
//       .addTo(controller)
//       .reverse(false);
//   }

//   // if (window.screen.width < 768) {
//   //   // for focus animation card om mobile
//   //   allCardsInSectionServices.forEach((card, index) => {
//   //     let cardInSectionServices = new ScrollMagic.Scene({
//   //       triggerElement: `#card-services-${index}`,
//   //       triggerHook: "onLeave",
//   //       duration: "35%",
//   //       triggerHook: 0.6,
//   //     })
//   //       .setClassToggle(`.card-services-${index}`, "color-card")
//   //       // .addIndicators({name: "card-services-0"})
//   //       .addTo(controller)
//   //       .reverse(true);
//   //   });
//   // }

//   if (sectionAboutHeroMedia) {
//     let animScroll = bodymovin.loadAnimation({
//       container: document.getElementById("lottie-people-inner"),
//       path: "../wp-content/themes/bato-website/images/people.json",
//       renderer: "canvas",
//       className: "lottie-item",
//       loop: false,
//       autoplay: false,
//       name: "animScroll",
//     });

//     animScroll.addEventListener("DOMLoaded", function () {
//       let timelineToLottie = new TimelineMax({ repeat: 0 });

//       timelineToLottie.to({ frame: 0 }, 1, {
//         frame: animScroll.totalFrames - 1,
//         onUpdate: function () {
//           animScroll.goToAndStop(Math.round(this._targets[0].frame), true);
//         },
//         Ease: Linear.easeNone,
//       });

//       new ScrollMagic.Scene({
//         triggerElement: ".section-about-hero__media",
//         offset: 0,
//         duration: mediaLaptop ? "100%" : "300%",
//         triggerHook: "onLeave",
//       })
//         .setTween(timelineToLottie)
//         .setPin("#lottie-people-inner")
//         // .addIndicators({name: 'trigger-line'})
//         .addTo(controller);
//     });
//   }

//   if (sectionOurValues) {
//     let timelineSectionOurValues = new TimelineMax();
//     let timelineSectionOurValues2 = new TimelineMax();
//     let ourValuesItems = document.querySelectorAll(".section-our-values__item");
//     let title = document.querySelector(".section-our-values .title");
//     let startBlock = document.querySelector(
//       ".section-our-values-scene-trigger-start"
//     );
//     let heightWindow = window.screen.height;
//     const itemsLength = ourValuesItems.length;

//     timelineSectionOurValues2.fromTo(
//       [".section-our-values__items"],
//       { transform: "translateY(60%)" },
//       { transform: "translateY(-90%)", ease: Linear.easeNone }
//     );

//     new ScrollMagic.Scene({
//       triggerElement: ".section-our-values",
//       triggerHook: "onLeave",
//       duration: "300%",
//     })
//       .setPin(".section-our-values")
//       .setTween(timelineSectionOurValues2)
//       .addIndicators({ name: "section-interactive" })
//       .addTo(controller)
//       .reverse(true);

//     ourValuesItems.forEach((item, idx) => {
//       const lastItem = itemsLength - 1;

//       new ScrollMagic.Scene({
//         triggerElement: `.section-our-values__item-${idx}`,
//         triggerHook: "0.8",
//         duration: `${item.offsetHeight}`,
//       })
//         .addIndicators({ name: "section-interactive-item" })
//         .setTween(
//           new TimelineMax()
//             .fromTo(
//               [
//                 `.section-our-values__item-${idx} .section-our-values__item-title`,
//               ],
//               {},
//               {
//                 backgroundImage:
//                   "linear-gradient(141.8deg, #00FFFF 14.44%, #01C4E5 86.47%)",
//                 ease: Linear.easeNone,
//               }
//             )
//             .fromTo(
//               [`.section-our-values__item-${idx} .item-number`],
//               {},
//               {
//                 backgroundImage:
//                   "linear-gradient(141.8deg, #00FFFF 14.44%, #01C4E5 86.47%)",
//                 ease: Linear.easeNone,
//               },
//               "<"
//             )
//             .fromTo(
//               [
//                 `.section-our-values__item-${idx} .section-our-values__item-text`,
//               ],
//               {},
//               { color: "#bbbbbb", ease: Linear.easeNone },
//               "<"
//             )
//             .fromTo(
//               [`.section-our-values__item-${idx - 1}`],
//               {},
//               { opacity: "0", ease: Linear.easeNone },
//               "<"
//             )
//             .fromTo(
//               [`.section-our-values__item-${idx}`],
//               {},
//               {
//                 opacity: lastItem === idx - 1 ? "0" : "1",
//                 ease: Linear.easeNone,
//               },
//               "<"
//             )
//         )
//         .addTo(controller)
//         .reverse(true);
//     });

//     //
//     // new ScrollMagic.Scene({triggerElement: `.section-our-values-scene-trigger-end`, triggerHook: '0.5' })
//     //     // .addIndicators({name: 'section-our-values-scene-trigger'})
//     //     .addTo(controller)
//     //     .on('start end', (e) => {
//     //         if(e.state === 'DURING' && e.type === 'start') {
//     //             title.style.transform = 'translateY(-100%)';
//     //         }
//     //
//     //         if(e.state === 'BEFORE' && e.type === 'start') {
//     //             title.style.transform = 'translateY(0%)';
//     //         }
//     //     })
//     //     .reverse(true);

//     // let sceneOurValuesTitle = new ScrollMagic.Scene({triggerElement: '.section-our-values-scene-trigger-start', triggerHook: 'onLeave' })
//     //     // .addIndicators({name: 'title'})
//     //     .on('progress', (e) => {
//     //         let progress = e.progress.toFixed(3)
//     //
//     //         if(progress >= 1) {
//     //             title.style.position = 'fixed';
//     //         } if(progress <= 0) {
//     //             title.style.position = 'absolute';
//     //         }
//     //     })
//     //     .addTo(controller)
//     //     .reverse(true);

//     // ourValuesItems.forEach((item, idx) => {
//     //     new ScrollMagic.Scene({triggerElement: `.section-our-values__item-${idx}`, duration: `${heightWindow * 0.4}`, triggerHook: '0.8' })
//     //         .setClassToggle(`.section-our-values__item-${idx}`, 'active')
//     //         .addIndicators({name: 'section-interactive'})
//     //         .on('start end', (e) => {
//     //             if(e.state === 'AFTER' && e.type === 'end') {
//     //                 if (mediaLaptop) {
//     //                     item.style.opacity = '0.8'
//     //                 } else  {
//     //                     item.style.opacity = '0'
//     //                 }
//     //             }
//     //
//     //             if(e.state === 'DURING' && e.type === 'end') {
//     //                 item.style.opacity = '1'
//     //             }
//     //         })
//     //         .addTo(controller)
//     //         .reverse(true);
//     // })
//     //
//     // new ScrollMagic.Scene({triggerElement: `.section-our-values-scene-trigger-end`, triggerHook: '0.5' })
//     //     // .addIndicators({name: 'section-our-values-scene-trigger'})
//     //     .addTo(controller)
//     //     .on('start end', (e) => {
//     //         if(e.state === 'DURING' && e.type === 'start') {
//     //             title.style.transform = 'translateY(-100%)';
//     //         }
//     //
//     //         if(e.state === 'BEFORE' && e.type === 'start') {
//     //             title.style.transform = 'translateY(0%)';
//     //         }
//     //     })
//     //     .reverse(true);
//   }

//   if (splideAboutTeam) {
//     let splideAboutTeam = new Splide(".splide-about-team", {
//       updateOnMove: false,
//       type: "slide",
//       focus: "left",
//       gap: 20,
//       autoWidth: true,
//       arrows: true,
//       pagination: false,
//       perPage: 8,
//       autoScroll: {
//         speed: 0,
//         autoStart: false,
//         rewind: false,
//       },
//       breakpoints: {
//         992: {
//           gap: 20,
//         },
//       },
//       grid: {
//         rows: mediaMobile ? 1 : 2,
//       },
//     });
//     splideAboutTeam.mount(window.splide.Extensions);

//     splideAboutTeam.on("autoplay", function () {
//       console.log("log");
//     });
//   }

//   if (sectionAboutHqImages) {
//     // let timelineSectionAboutHqImages = new TimelineMax();
//     let heightWindow = window.innerHeight;

//     // timelineSectionAboutHqImages
//     //     .fromTo(['.section-about-hq__images'], {}, {top: '78%', ease: Linear.easeNone})
//     //     .fromTo(['.section-about-hq__images'], {}, {left: '35%', ease: Linear.easeNone}, '<')
//     //     .fromTo(['.section-about-hq__images'], {}, {width: '750vw', ease: Linear.easeNone}, '<')
//     //     .fromTo(['.section-about-hq__images'], {}, {maxWidth: '750vw', ease: Linear.easeNone}, '<')
//     //     .fromTo(['.section-about-hq__images .pin-dots'], {}, {transform: 'scale(0.08)', ease: Linear.easeNone}, '<')
//     //     .fromTo(['.section-about-hq__images .pin-1'], {}, {top: '46.4%', right: '42.6%', ease: Linear.easeNone}, '<')
//     //     .fromTo(['.section-about-hq__images .pin-2'], {}, {top: '48.1%', right: '52%', ease: Linear.easeNone}, '<')
//     //     .fromTo(['.section-about-hq__images-globe'], {}, {opacity: '0', ease: Linear.easeNone}, '-=0.3')
//     //     .fromTo(['.section-about-hq__images-countries'], {}, {opacity: '1', ease: Linear.easeNone}, '<')
//     //     .fromTo(['.section-about-hq__images .pin-1'], {}, {top: '46.4%', right: '42.6%', ease: Linear.easeNone})
//     //     .fromTo(['.section-about-hq__images .pin-dots'], {}, {clipPath: 'inset(0 0% 0 0)', ease: Linear.easeNone}, '<')

//     new ScrollMagic.Scene({
//       triggerElement: ".section-about-hq__interactive",
//       offset: -(heightWindow / 2),
//       triggerHook: 0,
//     })
//       // .setPin('.section-about-hq__interactive')
//       // .setTween(timelineSectionAboutHqImages)
//       .setClassToggle(".section-about-hq__interactive", "active")
//       // .addIndicators({name: 'section-interactive'})
//       .on("start end", (e) => {
//         // body.classList.add('no-scroll')
//         // document.getElementsByClassName('section-about-hq__interactive').classList.add('active')
//         // if(body.classList.contains('no-scroll')) {
//         //     setTimeout(() => {
//         //         body.classList.remove('no-scroll')
//         //     }, 2000)
//         // }
//       })
//       .addTo(controller)
//       .reverse(false);
//   }

//   if (sectionAboutFamily) {
//     // let timelineSectionAboutFamily = new TimelineMax();
//     //
//     // timelineSectionAboutFamily
//     //     .fromTo(['.section-about-family__image.image-0'], {}, {transform: 'translate(0%, 0%) rotate(0)', ease: Linear.easeNone})
//     //     .fromTo(['.section-about-family__image.image-0 .section-about-family__image-bg'], {}, {backgroundColor: 'rgba(0, 0, 0, 0.35)', ease: Linear.easeNone}, '<')
//     //     .fromTo(['.section-about-family__image.image-1'], {}, {transform: 'translate(0%, 0%) rotate(0)', ease: Linear.easeNone}, '<')
//     //     .fromTo(['.section-about-family__image.image-1 .section-about-family__image-bg'], {}, {backgroundColor: 'rgba(0, 0, 0, 0.35)', ease: Linear.easeNone}, '<')
//     //     .fromTo(['.section-about-family__image.image-2'], {}, {transform: 'translate(0%, 0%) rotate(0)', ease: Linear.easeNone}, '<')
//     //     .fromTo(['.section-about-family__image.image-2 .section-about-family__image-bg'], {}, {backgroundColor: 'rgba(0, 0, 0, 0.35)', ease: Linear.easeNone}, '<')
//     //     .fromTo(['.section-about-family__image.image-1'], {}, { borderImageSlice: '0', ease: Linear.easeNone}, '<')

//     new ScrollMagic.Scene({
//       triggerElement: ".section-about-family__content",
//       triggerHook: "0",
//     })
//       .setClassToggle(".section-about-family__images", "active")
//       // .addIndicators({name: 'section-interactive'})
//       .on("start end", (e) => {
//         body.classList.add("no-scroll");

//         if (body.classList.contains("no-scroll")) {
//           setTimeout(() => {
//             body.classList.remove("no-scroll");
//           }, 2000);
//         }
//       })
//       .addTo(controller)
//       .reverse(false);
//   }

//   if (sectionAboutReviews && !mediaHeightMobileExtraSmall) {
//     let timelineSectionAboutReviews = new TimelineMax();
//     let items = document.querySelectorAll(".section-about-reviews__item");
//     let durationReviews = items.length * 800;

//     items.forEach((item, idx) => {
//       let lastItem = items.length - 1 === idx;
//       sliderSpeedOnScroll;
//       if (!lastItem) {
//         timelineSectionAboutReviews
//           .fromTo(
//             [`.section-about-reviews__item-${idx + 1}`],
//             {},
//             { top: "30px", ease: Linear.easeNone }
//           )
//           .fromTo(
//             [`.section-about-reviews__item-${idx}`],
//             {},
//             {
//               maxWidth: mediaMobileSmall
//                 ? "280px"
//                 : mediaMobile
//                 ? "80vw"
//                 : "650px",
//               top: "0",
//               ease: Linear.easeNone,
//             },
//             "<"
//           )
//           .fromTo(
//             [`.section-about-reviews__item-${idx} .go-opacity`],
//             {},
//             { opacity: "0.4", ease: Linear.easeNone },
//             "<"
//           )
//           .fromTo(
//             [`.section-about-reviews__item-${idx} .reviews-item-bg`],
//             {},
//             { opacity: "0", ease: Linear.easeNone },
//             "<"
//           );
//       }
//     });

//     new ScrollMagic.Scene({
//       triggerElement: ".section-about-reviews",
//       offset: mediaLaptop ? -80 : 0,
//       duration: durationReviews,
//       triggerHook: "onLeave",
//     })
//       .setPin(".section-about-reviews")
//       .setTween(timelineSectionAboutReviews)
//       // .addIndicators({name: "section-interactive"})
//       .addTo(controller)
//       .reverse(true);
//   }

//   //   const title_basic = document.querySelectorAll(".title_basic");

//   //   const sectionContact2 = document.querySelector(".section-contact");

//   //   const sectionAbout2 = document.querySelector(".section-about");

//   //   const sectionBanner2 = document.querySelector(".section-banner");


//   //   title_basic.forEach((el) => {
//   //     el.addEventListener("animationend", () => {
//   //       el.style.willChange = "auto";
//   //     });
//   //   });
// });
