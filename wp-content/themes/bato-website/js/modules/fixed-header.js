export default function fixedHeader(sectionTrigger) {
    if (!sectionTrigger) return;

    let heightBlock = sectionTrigger.offsetHeight;
    const header = document.querySelector('.header');

    if(sectionTrigger.classList.contains('section-about-hero')) {
        const aboutHeroMedia = sectionTrigger.querySelector('.section-about-hero__media')
        heightBlock = heightBlock - aboutHeroMedia.offsetHeight
    }

    if(sectionTrigger.classList.contains('contact-page')) {
        const windowHeight = window.innerHeight;
        heightBlock = windowHeight
    }

    document.addEventListener("DOMContentLoaded", function() {
        var header = document.querySelector(".header");
        header.classList.add("inited");
    });

    window.addEventListener('scroll', () => {
        if (window.pageYOffset >= heightBlock - 150) {
            header.classList.add('bg-header');
            header.classList.add('header-fixed');
        }

        if (window.pageYOffset <= 0) {
            header.classList.remove('bg-header');
            header.classList.remove('header-fixed');
            header.style.opacity = 1
            header.style.transform = 'translateY(0)'
        }
    })
}
