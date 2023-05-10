export default function sliderAboutTeam(el) {
  if (!el) return;

  const slider = el.querySelector('.swiper')
  const mediaMobile = window.innerWidth <= 767
  const mediaTablet = window.innerWidth <= 991
  //const speedSlider = 1;


 new Swiper(slider, {
    direction: 'horizontal',
    slidesPerView: 'auto',
    spaceBetween: 20,
    grid: mediaMobile ? false : {
     rows: 2,
     fill: 'row',
    },
     speed: 500,
     navigation: {
         nextEl: '.swiper-button-next',
         prevEl: '.swiper-button-prev',
     },
  });









  // let splideAboutTeam = new Splide(".splide-about-team", {
  //   updateOnMove: false,
  //   type: "slide",
  //   focus: "left",
  //   gap: 20,
  //   autoWidth: true,
  //   speed: 1500,
  //   rewindSpeed: 1500,
  //   perMove: 1,
  //   drag: "free",
  //   wheelMinThreshold: 5,
  //   arrows: true,
  //   pagination: false,
  //   perPage: mediaTablet ? 4 : 8,
  //   breakpoints: {
  //     992: {
  //       gap: 20,
  //     },
  //   },
  //   grid: {
  //     rows: mediaMobile ? 1 : 2,
  //   },
  // });
  //
  // splideAboutTeam.mount(window.splide.Extensions);
}
