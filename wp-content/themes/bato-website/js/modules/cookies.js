export default function cookies(el) {
    if (!el) return;

    let button = el.querySelector('.block-cookies__button')

    button.addEventListener('click', () => {
        const expirationDate = new Date(Date.now() + 86400000).toUTCString();
        document.cookie = "cookies-accepted=true; expires=" + expirationDate;

        el.style.transform = 'translateY(100%)'

        setTimeout(() => {
            el.style.display = 'none'
        }, 600)
    })

}