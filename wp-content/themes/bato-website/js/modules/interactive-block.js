export default function interactiveBlock(section) {
    if (!section) return;

    const heightSection = section.offsetHeight;
    const cubeSmall = document.querySelector('.block-cube-small');
    const mediaMobile = window.innerHeight <= 767

    function handleIntersection(entries) {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                cubeSmall.style.transform = `translateY(-${heightSection}px)`;

                if (mediaMobile) {
                    cubeSmall.style.transform = `translateY(-${heightSection * 2}px)`;
                }
            }

            if (!entry.isIntersecting) {
                cubeSmall.style.transform = `translateY(0)`;
            }
        });
    }

    const options = {
        root: null,
        rootMargin: `${heightSection}px`,
        threshold: 1.0
    };

    const observer = new IntersectionObserver(handleIntersection, options);

    observer.observe(section);


}
