export default function accordion(el) {
    if (!el) return;

    el.forEach((accordion) => {
        let items = accordion.querySelectorAll('.accordion__item')

        items.forEach((item) => {
            item.addEventListener('click', (e) => {
                item.classList.toggle('active')
            })
        })
    })

}