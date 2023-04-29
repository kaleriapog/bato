export default function slider(el) {
    if (!el) return;
    const speedSlider = 1;
    const splideSliderHome = new Splide(el, {
        updateOnMove: true,
        type: "loop",
        focus: "center",
        gap: 100,
        autoWidth: true,
        arrows: false,
        pagination: false,
        clones: 2,
        drag: false,
        breakpoints: {
            992: {
                gap: 55,
            },
        },
    });
    splideSliderHome.mount(window.splide.Extensions);
    const observerOptions = {
        root: null,
        rootMargin: "100px",
        threshold: 0.5,
    };
    let observer = new IntersectionObserver(observerCallback, observerOptions);
    function observerCallback(entries) {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                entry.target.classList.add("slider-visible");
            } else {
                entry.target.classList.remove("slider-visible");
            }
        });
    }
    observer.observe(el);
}