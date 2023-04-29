export default function sectionAboutReviews(el) {
    if (!el) return;

    const mediaHeightMobileExtraSmall = window.innerHeight <= 500;
    let controller = new ScrollMagic.Controller();
    const mediaMobile = window.innerWidth <= 767;
    const mediaLaptop = window.innerWidth <= 1025;
    const mediaMobileSmall = window.innerWidth <= 350;

    if (!mediaHeightMobileExtraSmall) {
        if (!mediaLaptop) {
            let timelineSectionAboutReviews = new TimelineMax();
            let items = el.querySelectorAll('.anim-item');
            let durationReviews = items.length * 800;

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
                                maxWidth: mediaMobileSmall
                                    ? "280px"
                                    : mediaMobile
                                        ? "80vw"
                                        : "650px",
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
                            [`.anim-item-${idx} .reviews-item-bg`],
                            {},
                            {opacity: "0", ease: Linear.easeNone},
                            "<"
                        );
                }
            });

            new ScrollMagic.Scene({
                triggerElement: el,
                duration: durationReviews,
                triggerHook: "onLeave",
            })
                .setPin(el)
                .setTween(timelineSectionAboutReviews)
                // .addIndicators({name: "section-interactive"})
                .addTo(controller)
                .reverse(true);
        }
    }

    // offset: mediaMobile ? -90 : mediaLaptop ? 70 : -50,
}