export default function sliderAboutTeam(el) {
    if (!el) return;

    const mediaMobile = window.innerWidth <= 767
    //const speedSlider = 1;

    let splideAboutTeam = new Splide( '.splide-about-team', {
        updateOnMove: false,
        type: 'slide',
        focus: 'left',
        gap: 20,
        autoWidth: true,
        speed: 1500,
        rewindSpeed: 1500,
        perMove: 1,
        drag   : 'free',
        wheelMinThreshold: 5,
        arrows: true,
        pagination: false,
        perPage: 8,
        breakpoints: {
            992: {
                gap: 20,
            },
        },
        grid: {
            rows: mediaMobile ? 1 : 2,
        },
    } );

    splideAboutTeam.mount(window.splide.Extensions);

}