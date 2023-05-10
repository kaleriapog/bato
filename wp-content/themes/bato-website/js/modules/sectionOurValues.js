export default function sectionOurValues(el) {
  if (!el) return;
  const mediaMobile = window.innerWidth <= 767;
  const mediaLaptop = window.innerWidth <= 1024;
  let controller = new ScrollMagic.Controller();

  if (!mediaLaptop) {
    let timelineSectionOurValues = new TimelineMax();
    let ourValuesItems = document.querySelectorAll(".section-our-values__item");
    const itemsTrack = document.querySelector(
      ".section-our-values__items-list"
    );
    const lastItem = ourValuesItems.length - 1;
    const mask = document.querySelector('.section-our-values__items-mask');
    const headerHeight = document.querySelector('.header').offsetHeight;
    const titleHeight = document.querySelector('.section-our-values__content .title').offsetHeight;
    const windowHeight = window.innerHeight;
    const heightListMask = windowHeight - headerHeight - titleHeight + 10;

    mask.style.height = `${heightListMask}px`;

    // animation track for items
    timelineSectionOurValues
        .fromTo( [".section-our-values__items-list"], { transform: `translateY(20vh)` }, { transform: "translateY(-70%)", ease: Linear.easeNone })
        .fromTo( [".our-values-fake-mask"], {}, {height: '300px', opacity: 1, duration: '0.1', ease: Linear.easeNone }, '<')

    new ScrollMagic.Scene({
      triggerElement: ".section-our-values",
      offset: mediaLaptop ? -70 : -110,
      triggerHook: "onLeave",
      duration: itemsTrack.offsetHeight * 3,
    })
      .setPin(".section-our-values")
      .setTween(timelineSectionOurValues)
      // .addIndicators({name: 'section-interactive'})
      .addTo(controller)
      .reverse(true);

    // animation item
    ourValuesItems.forEach((item, idx) => {
      new ScrollMagic.Scene({
        triggerElement: `.section-our-values__item-${idx}`,
        triggerHook: "0.8",
        // duration: "20%",
        duration: `${windowHeight / ourValuesItems.length}`,
      })
        .setTween(
          new TimelineMax()
            .fromTo(
              [
                `.section-our-values__item-${idx} .section-our-values__item-title`,
              ],
              {},
              { filter: "grayscale(0)", ease: Linear.easeNone }
            )
            .fromTo(
              [`.section-our-values__item-${idx} .item-number`],
              {},
              { filter: "grayscale(0)", ease: Linear.easeNone },
              "<"
            )
            .fromTo(
              [
                `.section-our-values__item-${idx} .section-our-values__item-text`,
              ],
              {},
              { color: "#bbbbbb", ease: Linear.easeNone },
              "<"
            )
              .fromTo(
                  [
                    `.section-our-values__item-${idx-1} .section-our-values__item-title`,
                  ],
                  {},
                  { filter: "grayscale(1)", ease: Linear.easeNone }, '-=0.6'
              )
              .fromTo(
                  [`.section-our-values__item-${idx-1} .item-number`],
                  {},
                  { filter: "grayscale(1)", ease: Linear.easeNone },
                  "<"
              )

            // .fromTo(
            //   [`.section-our-values__item-${idx}`],
            //   {},
            //   { opacity: "0.3", ease: Linear.easeNone }
            // )
        )
        .addTo(controller)
        .reverse(true);
    });
  }
}
