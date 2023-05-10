export default function sliderAboutTeam(el) {
  if (!el) return;

  const slider = el.querySelector('.swiper')
  const mediaMobile = window.innerWidth <= 767
  const mediaTablet = window.innerWidth <= 991
  const media1100 = window.innerWidth <=  1100
  // const mediaMobileH = window.innerWidth <=

    new Swiper(slider, {
        direction: 'horizontal',
        slidesPerView: 'auto',
        spaceBetween: 20,
        slidesPerGroup: mediaMobile ? 1 : mediaTablet ? 2 : media1100 ? 3 : 4,
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
}
