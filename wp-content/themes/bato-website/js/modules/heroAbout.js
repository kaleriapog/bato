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
    const heightElem = document.getElementById("lottie-people-inner")
      .clientHeight;

    timelineToLottie.to({ frame: 0 }, 1, {
      frame: animScroll.totalFrames - 1,
      onUpdate: function () {
        animScroll.goToAndStop(Math.round(this._targets[0].frame), true);
      },
      Ease: Linear.easeNone,
    });

    new ScrollMagic.Scene({
      triggerElement: ".section-about-hero__media",
      offset: mediaLaptop ? -65 : -120,
      duration: mediaLaptop ? "100%" : "100%",
      triggerHook: mediamobile ? "onLeave" : mediaLaptop ? 0.3 : "onLeave",
    })
      .setTween(timelineToLottie)
      .setPin("#lottie-people-inner")
    //   .addIndicators({ name: "trigger-line" })
      .addTo(controller);
  });
}
