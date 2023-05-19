export default function animationAboutFamily(el) {
  if (!el) return;

  const mediaLaptop = window.innerWidth <= 1024

  if(!mediaLaptop) {

    let controller = new ScrollMagic.Controller();
    let timelineSectionAboutFamily = new TimelineMax();
    const mediaMobile = window.screen.width <= 767;
    const mediaLaptop = window.innerWidth <= 1024;

    if (!mediaMobile) {
      timelineSectionAboutFamily.fromTo(
          [".section-about-family__title h2"],
          {},
          {y: "-100vh", opacity: 0, duration: 0.2, ease: Linear.easeNone}
      );
    }

    timelineSectionAboutFamily
        .fromTo(
            [".section-about-family__image.image-0"],
            {'-webkit-filter':'grayscale(100%)', filter: 'grayscale(100%)'},
            {x: 0, y: 0, rotation: 0, '-webkit-filter':'grayscale(0%)', filter: 'grayscale(0%)', ease: Linear.easeNone}
        )
        .fromTo(
            [".section-about-family__image.image-0 .section-about-family__image-bg"],
            {backgroundColor: "rgba(0, 0, 0, 0.6)"},
            {backgroundColor: "rgba(0, 0, 0, 0.2)", ease: Linear.easeNone},
            "<"
        )
        .fromTo(
            [".section-about-family__image.image-1"],
            {'-webkit-filter':'grayscale(100%)', filter: 'grayscale(100%)'},
            {x: 0, y: 0, rotation: 0, '-webkit-filter':'grayscale(0%)', filter: 'grayscale(0%)', ease: Linear.easeNone},
            "<"
        )
        .fromTo(
            [".section-about-family__image.image-1 .section-about-family__image-bg"],
            {backgroundColor: "rgba(0, 0, 0, 0.35)"},
            {backgroundColor: "rgba(0, 0, 0, 0.2)", ease: Linear.easeNone},
            "<"
        )
        .fromTo(
            [".section-about-family__image.image-2"],
            {'-webkit-filter':'grayscale(100%)', filter: 'grayscale(100%)'},
            {x: 0, y: 0, rotation: 0, '-webkit-filter':'grayscale(0%)', filter: 'grayscale(0%)', ease: Linear.easeNone},
            "<"
        )
        .fromTo(
            [".section-about-family__image.image-2 .section-about-family__image-bg"],
            {backgroundColor: "rgba(0, 0, 0, 0.6)"},
            {backgroundColor: "rgba(0, 0, 0, 0.2)", ease: Linear.easeNone},
            "<"
        );

    const observerOptions = {
      root: null,
      rootMargin: "400px",
      threshold: 0.1,
    };

    const target = document.querySelector(".section-about-family");

    let observer = new IntersectionObserver(observerCallback, observerOptions);

    function observerCallback(entries) {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          entry.target.classList.add("animation");
        }
      });
    }

    observer.observe(target);

    function throttle(func, limit) {
      let inThrottle;
      return function () {
        let context = this, args = arguments;
        if (!inThrottle) {
          func.apply(context, args);
          inThrottle = true;
          setTimeout(function () {
            inThrottle = false;
          }, limit);
        }
      };
    }

    function toggleScrollMagic() {
      controller.destroy(true);
      controller = new ScrollMagic.Controller();

      new ScrollMagic.Scene({
        triggerElement: mediaMobile
            ? ".section-about-family"
            : ".section-about-family__content",
        triggerHook: "onLeave",
        duration: mediaMobile ? "100%" : "200%",
      })
          .setTween(timelineSectionAboutFamily)
          .addTo(controller)
          .reverse(true);

    }

    toggleScrollMagic();

    window.addEventListener('resize', function () {
      if (!mediaLaptop) {
        toggleScrollMagic();
      }
    });
  }
}
