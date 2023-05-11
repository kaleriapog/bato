export default function sectionAboutReviews(el) {
  if (!el) return;

  let _offset;
  let controller = new ScrollMagic.Controller();
  let timelineSectionAboutReviews = new TimelineMax();
  let items = el.querySelectorAll(".anim-item");
  let durationReviews = items.length * 800;
  let mediaLaptop = window.innerWidth <= 1024

  items.forEach((item, idx) => {
    let lastItem = items.length - 1 === idx;

    if (!lastItem) {
      timelineSectionAboutReviews
        .fromTo(
          [`.anim-item-${idx + 1}`],
          {},
          { y: "30px", ease: Linear.easeNone }
        )
        .fromTo(
          [`.anim-item-${idx}`],
          {},
          {
            maxWidth: "650px",
            y: "0",
            ease: Linear.easeNone,
          },
          "<"
        )
        .fromTo(
          [`.anim-item-${idx} .go-opacity`],
          {},
          { opacity: "0.4", ease: Linear.easeNone },
          "<"
        )
        .fromTo(
          [`.anim-item-${idx} .reviews-item-bg`],
          {},
          { opacity: "0", ease: Linear.easeNone },
          "<"
        );
    }
  });

  function toggleScrollMagic() {
    _offset = document.querySelector(".header").offsetHeight;

    controller.destroy(true);
    if (window.innerWidth > 1024) {
      controller = new ScrollMagic.Controller();

      new ScrollMagic.Scene({
        triggerElement: el,
        duration: durationReviews,
        triggerHook: "onLeave",
      })
        .setPin(el)
        .setTween(timelineSectionAboutReviews)
        .addTo(controller)
        .offset(_offset*-1)
        .reverse(true);
    }
  }

  toggleScrollMagic();

  window.addEventListener('resize', function() {
      if(!mediaLaptop) {
          toggleScrollMagic();
      }
  });

  /* reviews slider START */
  const reviews_slider = [];
  jQuery(document).find('.reviews-slider').each(function(el) {
      let _slider = jQuery(this).find('.swiper');
      let _scrollbar = jQuery(this).find('.slider-scrollbar');

      reviews_slider[el] = new Swiper(_slider[0], {
          slidesPerView: 'auto',
          spaceBetween: 20,
          observer: true,
          scrollbar: {
              el: _scrollbar[0],
              draggable: true,
              hide: false,
          },
      });
  });
  /* reviews slider END */
}
