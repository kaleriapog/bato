export default function sliderTeam(el) {
  if (!el) return;

  let sBrowser, sUsrAg = navigator.userAgent;

  let mozilla = false

  if (sUsrAg.indexOf("Firefox") > -1) {
    mozilla = true
  }

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
    const mediaMobile = window.innerWidth <= 767;
    const mediaHeight600 = window.innerHeight <= 600 && window.innerWidth <= 767;

    new ScrollMagic.Scene({ triggerElement: ".lottie-people-inner", duration: mediaHeight600 ? '140%' : mediaMobile ? '120%' : 1800,  offset: mediaMobile ? -80 : 0, triggerHook: 0})
        .setPin(".lottie-people-inner")
        .setTween(new TimelineMax({ repeat: 0 })
            .fromTo(['.lottie-mask'], {}, {opacity: 0, duration: 0.2, ease: Linear.easeNone})
            .fromTo(['.about-decorative-page'], {}, {opacity: 0, duration: 0.2, ease: Linear.easeNone}, '<')
            .to({ frame: 0 }, 1, { frame: animScroll.totalFrames - 1, onUpdate: function () { animScroll.goToAndStop(Math.round(this._targets[0].frame), true);}, Ease: Linear.easeNone, })
            .fromTo(['.lottie-mask'], {}, {opacity: 1, duration: 0.2, ease: Linear.easeNone})
        )
        .addTo(controller);
  });
}
