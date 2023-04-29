export default function fixedHeader(sectionTrigger) {
    if (!sectionTrigger) return;

    const heightBlock = sectionTrigger[0].offsetHeight;
    const header = document.querySelector('.header');
    const heightHeader = header.offsetHeight;

    window.addEventListener('scroll', () => {
        if (window.pageYOffset >= heightBlock - 150) {
            header.classList.add('header-fixed');
        }
    })
}
