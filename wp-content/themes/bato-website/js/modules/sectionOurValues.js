export default function sectionOurValues(el) {
    if (!el) return;
    const mediaMobile = window.innerWidth <= 767
    const mediaLaptop = window.innerWidth <= 1024
    let controller = new ScrollMagic.Controller()

    if(!mediaLaptop) {
        let timelineSectionOurValues = new TimelineMax();
        let ourValuesItems = document.querySelectorAll('.section-our-values__item')
        const itemsTrack = document.querySelector('.section-our-values__items-list')
        const lastItem = ourValuesItems.length - 1

        // animation track for items
        timelineSectionOurValues
            .fromTo(['.section-our-values__items'], {transform: 'translateY(40%)'}, {transform: 'translateY(-90%)', ease: Linear.easeNone})

        new ScrollMagic.Scene({triggerElement: '.section-our-values', offset: mediaLaptop ? -70 : -110, triggerHook: 'onLeave', duration: itemsTrack.offsetHeight * 3 })
            .setPin('.section-our-values')
            .setTween(timelineSectionOurValues)
            // .addIndicators({name: 'section-interactive'})
            .addTo(controller)
            .reverse(true);

        // animation item
        ourValuesItems.forEach((item, idx) => {

            new ScrollMagic.Scene({triggerElement: `.section-our-values__item-${idx}`, triggerHook: '0.6', duration: '40%' })
                .setTween(new TimelineMax()
                    .fromTo([`.section-our-values__item-${idx} .section-our-values__item-title`], {}, {filter: 'grayscale(0)', ease: Linear.easeNone})
                    .fromTo([`.section-our-values__item-${idx} .item-number`], {}, {filter: 'grayscale(0)', ease: Linear.easeNone}, '<')
                    .fromTo([`.section-our-values__item-${idx} .section-our-values__item-text`], {}, {color: '#bbbbbb', ease: Linear.easeNone}, '<')
                    .fromTo([`.section-our-values__item-${idx}`], {}, {opacity: '0', ease: Linear.easeNone})
                )
                .addTo(controller)
                .reverse(true)

        })
    }
}