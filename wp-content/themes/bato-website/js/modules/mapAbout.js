export default function mapAbout(el) {
    if (!el) return;

    const mediaLaptop = window.innerWidth <= 1024

    if(!mediaLaptop) {
        let controller = new ScrollMagic.Controller()

        function toggleScrollMagic() {
            let interactiveHeight = el.querySelector('.section-about-hq__interactive-height').offsetHeight
            let mediaMobile = window.screen.width <= 767
            let mediaH1000 = window.innerHeight > 1000
            let offsetH1000 = -((window.innerHeight - interactiveHeight) / 2)

            controller.destroy(true);
            controller = new ScrollMagic.Controller();

            new ScrollMagic.Scene({
                triggerElement: '.section-about-hq__interactive',
                offset: mediaH1000 ? offsetH1000 : mediaMobile ? offsetH1000 : '0',
                duration: mediaMobile ? '200%' : '300%',
                triggerHook: 0
            })
                .setTween(
                    new TimelineMax()
                        .fromTo(['.image-globe-active'], {}, {opacity: '1', ease: Linear.easeNone})
                        .fromTo(['.image-globe-active-dots'], {}, {opacity: '1', ease: Linear.easeNone})
                        .fromTo(['.pin-fr'], {}, {opacity: '1', ease: Linear.easeNone})
                        .fromTo(['.pin-kh'], {}, {opacity: '1', ease: Linear.easeNone}, '<')
                        .fromTo(['.pin-kh'], {}, {opacity: '1', ease: Linear.easeNone}, '-=0.5') // empty scroll
                )
                .addTo(controller)
                .reverse(true);

        }

        toggleScrollMagic();

        window.addEventListener('resize', function () {
            if (!mediaLaptop) {
                toggleScrollMagic();
            }
            ;
        });

    }
}