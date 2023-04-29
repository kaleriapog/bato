export default function mapAbout(el) {
    if (!el) return;

    let controller = new ScrollMagic.Controller()
    const mediaMobile = window.screen.width <= 767

    let sectionAboutHqScene =  new ScrollMagic.Scene({triggerElement: '.section-about-hq__wrapper', duration: mediaMobile ? '100%' : '200%', triggerHook: 0 })
        .setPin('.section-about-hq__wrapper')
        .setTween(
            new TimelineMax()
                .fromTo(['.image-globe-active'], {}, {opacity: '1', ease: Linear.easeNone})
                // .fromTo(['.image-globe-active'], {}, {opacity: '1', duration: 0.2, ease: Linear.easeNone})
        )
        // .addIndicators({name: 'section-interactive'})
        .addTo(controller)
        .reverse(true);

    // offset: -50,
}