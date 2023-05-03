export default function mapAbout(el) {
    if (!el) return;

    let controller = new ScrollMagic.Controller()
    const mediaMobile = window.screen.width <= 767
    const mediaH1000 = window.innerHeight > 1000
    const interactiveHeight = el.querySelector('.section-about-hq__interactive-height').offsetHeight
    const offsetH1000 = -((window.innerHeight - interactiveHeight) / 2)

    console.log(offsetH1000)

    let sectionAboutHqScene =  new ScrollMagic.Scene({triggerElement: '.section-about-hq__interactive', offset: mediaH1000 ? offsetH1000 : mediaMobile ? offsetH1000 : '0', duration: mediaMobile ? '200%' : '300%', triggerHook: 0 })
        .setPin('.section-about-hq__interactive')
        .setTween(
            new TimelineMax()
                .fromTo(['.image-globe-active'], {}, {opacity: '1', ease: Linear.easeNone})
                .fromTo(['.image-globe-active-dots'], {}, {opacity: '1', ease: Linear.easeNone})
                .fromTo(['.pin-fr'], {}, {opacity: '1', ease: Linear.easeNone})
                .fromTo(['.pin-kh'], {}, {opacity: '1', ease: Linear.easeNone}, '<')
                .fromTo(['.pin-kh'], {}, {opacity: '1', ease: Linear.easeNone}, '-=0.5') // empty scroll
        )
        // .addIndicators({name: 'section-interactive'})
        .addTo(controller)
        .reverse(true);

    // offset: -50,
}