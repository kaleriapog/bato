export default function sectionOurValues(el) {
  if (!el) return;
  const mediaLaptop = window.innerWidth <= 1024;
  let controller = new ScrollMagic.Controller();

  if (!mediaLaptop) {
    let ourValuesItems = document.querySelectorAll(".section-our-values__item");
    const windowHeight = window.innerHeight;

    // animation item
    ourValuesItems.forEach((item, idx) => {
      idx = idx + 1

      new ScrollMagic.Scene({
        triggerElement: `.section-our-values__item-${idx}`,
        triggerHook: "0.8",
        duration: `${windowHeight / ourValuesItems.length}`,
      })
        .setTween(
          new TimelineMax()
            .fromTo([`.section-our-values__item-${idx} .section-our-values__item-title`,], {},{ filter: "grayscale(0)", ease: Linear.easeNone })
            .fromTo([`.section-our-values__item-${idx} .item-number`], {}, { filter: "grayscale(0)", ease: Linear.easeNone }, "<")
            .fromTo([`.section-our-values__item-${idx} .section-our-values__item-text`,], {}, { color: "#bbbbbb", ease: Linear.easeNone }, "<")
            .fromTo([`.section-our-values__item-${idx-1} .section-our-values__item-title`,], {}, { filter: "grayscale(1)", ease: Linear.easeNone }, '-=0.6')
            .fromTo([`.section-our-values__item-${idx-1} .item-number`], {}, { filter: "grayscale(1)", ease: Linear.easeNone }, "<")
        )
        .addTo(controller)
        .reverse(true);
    });

    //show last item
    const lastItemHeight = ourValuesItems[ourValuesItems.length - 1].offsetHeight;
    const itemsWrapper = document.querySelector(".section-our-values__items");

    console.log(`${lastItemHeight * 1.3}px`)

    itemsWrapper.style.marginBottom = `-${lastItemHeight + 50}px`;
    el.nextElementSibling.style.marginTop = `${lastItemHeight}px`;
  }
}
