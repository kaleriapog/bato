// export default function sliderTeam(el) {
//   if (!el) return;
//
//
//   let sBrowser, sUsrAg = navigator.userAgent;
//
//   let mozilla = false
//
//   if (sUsrAg.indexOf("Firefox") > -1) {
//     sBrowser = "Mozilla Firefox";
//     //"Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:61.0) Gecko/20100101 Firefox/61.0"
//     mozilla = true
//   }
//
//   const mediaLaptop = window.screen.width <= 1024;
//   const mediamobile = window.screen.width <= 767;
//   const windowHeight = window.innerHeight;
//   let controller = new ScrollMagic.Controller();
//
//   let animScroll = bodymovin.loadAnimation({
//     container: document.getElementById("lottie-people-inner"),
//     path: "../wp-content/themes/bato-website/images/people.json",
//     renderer: mozilla ? 'canvas' : 'svg',
//     className: "lottie-item",
//     loop: false,
//     autoplay: false,
//     name: "animScroll",
//   });
//
//   animScroll.addEventListener("DOMLoaded", function () {
//     let timelineToLottie = new TimelineMax({ repeat: 0 });
//     const heightElem = document.getElementById("lottie-people-inner").clientHeight;
//     const lottieMask = document.querySelector(".lottie-mask");
//     const heroMedia = document.querySelector(".section-about-hero__media")
//
//     let triggerPositionLaptop = -windowHeight * 0.1
//
//     timelineToLottie
//         .to({ frame: 30 }, 1, { frame: animScroll.totalFrames - 1, onUpdate: function () { animScroll.goToAndStop(Math.round(this._targets[0].frame), true);}, Ease: Linear.easeNone, }, '<');
//
//     new ScrollMagic.Scene({
//       triggerElement: ".section-about-hero__media",
//       offset: mediaLaptop ? triggerPositionLaptop : -120,
//       duration: "200%",
//       triggerHook: mediamobile ? "onLeave" : mediaLaptop ? 0.15 : "onLeave",
//     })
//       .setTween(timelineToLottie)
//       .setPin("#lottie-people-inner")
//       // .addIndicators({ name: "trigger-line" })
//       .addTo(controller);
//
//     //start of the first 15 frames before the section is fixed
//     new ScrollMagic.Scene({ triggerElement: ".section-about-hero__media", duration: mediamobile ? '50%' : mediaLaptop ? '15%' : '50%',  offset: mediaLaptop ? triggerPositionLaptop : -120, triggerHook:  mediamobile ? 0.5 : mediaLaptop ? 0.3 : 0.5})
//         .setTween(new TimelineMax({ repeat: 0 })
//           // .fromTo(['.section-about-hero__media'], {}, {y: 0, ease: Linear.easeNone})
//           .to({ frame: 0 }, 1, { frame: animScroll.totalFrames - 30, onUpdate: function () { animScroll.goToAndStop(Math.round(this._targets[0].frame), true);}, Ease: Linear.easeNone, }, '<'))
//         // .addIndicators({ name: "trigger-lineTo222" })
//         // .on("start end", function (e) {
//         //   if (e.type === 'start' && e.state === 'DURING') {
//         //     lottieMask.style.opacity = '0'
//         //     heroMedia.style.zIndex = '0'
//         //   }
//         //   if (e.type === 'start' && e.state === 'BEFORE') {
//         //     lottieMask.style.opacity = '1'
//         //     heroMedia.style.zIndex = '-1'
//         //   }
//         // })
//         .addTo(controller);
//   });
// }


export default function sliderTeam(el) {
  if (!el) return;


  let sBrowser, sUsrAg = navigator.userAgent;

  let mozilla = false

  if (sUsrAg.indexOf("Firefox") > -1) {
    sBrowser = "Mozilla Firefox";
    //"Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:61.0) Gecko/20100101 Firefox/61.0"
    mozilla = true
  }

  const mediaLaptop = window.screen.width <= 1024;
  const mediamobile = window.screen.width <= 767;
  const windowHeight = window.innerHeight;
  let controller = new ScrollMagic.Controller();

  let animScroll = bodymovin.loadAnimation({
    container: document.getElementById("lottie-people-inner"),
    path: "../wp-content/themes/bato-website/images/people.json",
    renderer: mozilla ? 'canvas' : 'svg',
    className: "lottie-item",
    loop: false,
    autoplay: false,
    name: "animScroll",
  });

  animScroll.addEventListener("DOMLoaded", function () {
    let timelineToLottie = new TimelineMax({ repeat: 0 });
    const heightElem = document.getElementById("lottie-people-inner").clientHeight;
    const lottieMask = document.querySelector(".lottie-mask");
    const heroMedia = document.querySelector(".section-about-hero__media")

    let triggerPositionLaptop = -windowHeight * 0.1
    //
    // timelineToLottie
    //     .to({ frame: 30 }, 1, { frame: animScroll.totalFrames - 1, onUpdate: function () { animScroll.goToAndStop(Math.round(this._targets[0].frame), true);}, Ease: Linear.easeNone, }, '<');
    //
    // new ScrollMagic.Scene({
    //   triggerElement: ".section-about-hero__media",
    //   offset: 0,
    //   duration: "200%",
    //   triggerHook: 0,
    // })
    //     .setTween(timelineToLottie)
    //     .setPin("#lottie-people-inner")
    //     .addIndicators({ name: "trigger-line" })
    //     .addTo(controller);

    //start of the first 15 frames before the section is fixed
    new ScrollMagic.Scene({ triggerElement: ".lottie-people-inner", duration: '300%',  offset: 0, triggerHook: 0})
        .setPin(".lottie-people-inner")
        .setTween(new TimelineMax({ repeat: 0 })
            .fromTo(['.lottie-mask'], {}, {opacity: 0, duration: 0.2, ease: Linear.easeNone})
            .fromTo(['.about-decorative-page'], {}, {opacity: 0, duration: 0.2, ease: Linear.easeNone}, '<')
            .to({ frame: 0 }, 1, { frame: animScroll.totalFrames - 1, onUpdate: function () { animScroll.goToAndStop(Math.round(this._targets[0].frame), true);}, Ease: Linear.easeNone, }))
        // .addIndicators({ name: "trigger-lineTo222" })
        // .on("start end", function (e) {
        //   if (e.type === 'start' && e.state === 'DURING') {
        //     lottieMask.style.opacity = '0'
        //     heroMedia.style.zIndex = '0'
        //   }
        //   if (e.type === 'start' && e.state === 'BEFORE') {
        //     lottieMask.style.opacity = '1'
        //     heroMedia.style.zIndex = '-1'
        //   }
        // })
        .addTo(controller);
  });
}
