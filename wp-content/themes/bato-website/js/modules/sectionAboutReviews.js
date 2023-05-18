export default function sectionAboutReviews(el) {
    if (!el) return;

    let _offset;
    let controller = new ScrollMagic.Controller();
    let timelineSectionAboutReviews = new TimelineMax();
    let items = el.querySelectorAll(".anim-item");
    let durationReviews = items.length * 800;
    let mediaLaptop = window.innerWidth <= 1024
    let media600 = window.innerHeight < 600

    items.forEach((item, idx) => {
        let lastItem = items.length - 1 === idx;

        if (!lastItem) {
            timelineSectionAboutReviews
                .fromTo(
                    [`.anim-item-${idx + 1}`],
                    {},
                    {y: "30px", ease: Linear.easeNone}
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
                    {opacity: "0.4", ease: Linear.easeNone},
                    "<"
                )
                .fromTo(
                    [`.anim-item-${idx-1}`],
                    {},
                    {opacity: "0", ease: Linear.easeNone},
                    "<"
                )
                .fromTo(
                    [`.anim-item-${idx} .reviews-item-bg`],
                    {},
                    {opacity: "0", ease: Linear.easeNone},
                    "<"
                )

        }
    });

    if (!media600) {
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
                        .offset(_offset * -1)
                        .reverse(true);
                }
            }

        toggleScrollMagic();

        window.addEventListener('resize', function () {
            if (!mediaLaptop) {
                toggleScrollMagic();
            }
        });

    }

    /* reviews slider START */
    const _reviews = document.querySelector('.reviews-slider');
    const _slider = _reviews.querySelector('.swiper');
    const _scrollbar = _reviews.querySelector('.slider-scrollbar');

    const _reviews_slider = new Swiper(_slider, {
        slidesPerView: 'auto',
        spaceBetween: 20,
        observer: true,
        scrollbar: {
            el: _scrollbar,
            draggable: true,
            hide: false,
        },
    });
    /* reviews slider END */
}
