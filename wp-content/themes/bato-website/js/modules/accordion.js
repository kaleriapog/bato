export default function accordion(el) {
    if (!el) return;

    const accordionItems = document.querySelectorAll('.accordion__item');

    accordionItems.forEach((item) => {
      item.addEventListener('click', () => {
        const text = item.querySelector('.accordion__item-description');
        item.classList.toggle('active');
        if (item.classList.contains('active')) {
          text.style.height = text.scrollHeight + 'px';
          text.style.transition = 'height 0.3s ease-in-out';
        } else {
          text.style.height = '0';
          text.style.transition = 'height 0.3s ease-in-out';
        }
      });
    });
}