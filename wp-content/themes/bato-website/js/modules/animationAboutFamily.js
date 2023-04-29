export default function animationAboutFamily(el) {
    if (!el) return;

    let controller = new ScrollMagic.Controller()
    let timelineSectionAboutFamily = new TimelineMax()
    const mediaMobile = window.screen.width <= 767
    const mediaTabletC = window.screen.width <= 1024 && window.screen.width > 767 && window.screen.height > 750
    if(!mediaMobile) {
        timelineSectionAboutFamily
            .fromTo(['.section-about-family__title'], {}, {y: '-100%', opacity: 0, duration: 0.2, ease: Linear.easeNone})
    }

    timelineSectionAboutFamily
    .fromTo(['.section-about-family__image.image-0'], {}, {x: 0, y: 0, rotation: 0, ease: Linear.easeNone})
    .fromTo(['.section-about-family__image.image-0 .section-about-family__image-bg'], {}, {backgroundColor: 'rgba(0, 0, 0, 0.35)', ease: Linear.easeNone}, '<')
    .fromTo(['.section-about-family__image.image-1'], {}, {x: 0, y: 0, rotation: 0, ease: Linear.easeNone}, '<')
    .fromTo(['.section-about-family__image.image-1 .section-about-family__image-bg'], {}, {backgroundColor: 'rgba(0, 0, 0, 0.35)', ease: Linear.easeNone}, '<')
    .fromTo(['.section-about-family__image.image-2'], {}, {x: 0, y: 0, rotation: 0, ease: Linear.easeNone}, '<')
    .fromTo(['.section-about-family__image.image-2 .section-about-family__image-bg'], {}, {backgroundColor: 'rgba(0, 0, 0, 0.35)', ease: Linear.easeNone}, '<')

    if(mediaMobile) {
        timelineSectionAboutFamily
            .fromTo(['.section-about-family__image.image-3'], {}, {x: 0, y: 0, rotation: 0, ease: Linear.easeNone}, '<')
            .fromTo(['.section-about-family__image.image-3 .section-about-family__image-bg'], {}, {backgroundColor: 'rgba(0, 0, 0, 0.35)', ease: Linear.easeNone}, '<')
            .fromTo(['.section-about-family__image.image-4'], {}, {x: 0, y: 0, rotation: 0, ease: Linear.easeNone}, '<')
            .fromTo(['.section-about-family__image.image-4 .section-about-family__image-bg'], {}, {backgroundColor: 'rgba(0, 0, 0, 0.35)', ease: Linear.easeNone}, '<')
            .fromTo(['.section-about-family__image.image-5'], {}, {x: 0, y: 0, rotation: 0, ease: Linear.easeNone}, '<')
            .fromTo(['.section-about-family__image.image-5 .section-about-family__image-bg'], {}, {backgroundColor: 'rgba(0, 0, 0, 0.35)', ease: Linear.easeNone}, '<')
            .fromTo(['.section-about-family__image.image-6'], {}, {x: 0, y: 0, rotation: 0, ease: Linear.easeNone}, '<')
            .fromTo(['.section-about-family__image.image-6 .section-about-family__image-bg'], {}, {backgroundColor: 'rgba(0, 0, 0, 0.35)', ease: Linear.easeNone}, '<')
}

    new ScrollMagic.Scene({triggerElement: mediaMobile ? '.section-about-family' : '.section-about-family__content', triggerHook: 'onLeave', duration: mediaMobile ? '100%' : '200%', offset: mediaTabletC ? -(window.screen.width / 3) : mediaMobile ? -80 : 0 })
        .setPin('.section-about-family__content')
        // .addIndicators({name: 'section-interactive'})
        .setTween(timelineSectionAboutFamily)
        .addTo(controller)
        .reverse(true)
}