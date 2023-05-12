export default function accordion(el) {
    if (!el) return;

    function slideToggle(element, duration) {
        const startHeight = element.offsetHeight;
        const endHeight = element.scrollHeight;
        const delta = endHeight - startHeight;
        const direction = delta > 0 ? 1 : -1;
      
        element.style.overflow = 'hidden';
      
        let startTime = null;
      
        function animate(timestamp) {
          if (!startTime) startTime = timestamp;
          const progress = timestamp - startTime;
          const percent = Math.min(progress / duration, 1);
          const currentHeight = startHeight + (delta * percent * direction);
          element.style.height = currentHeight + 'px';
          if (percent < 1) {
            window.requestAnimationFrame(animate);
          } else {
            element.style.height = '';
            element.style.overflow = '';
          }
        }
      
        if (window.getComputedStyle(element).display === 'none') {
          element.style.height = '0';
          element.style.display = 'block';
        }
      
        window.requestAnimationFrame(animate);
      }
      
      document.addEventListener('click', function(event) {
        const target = event.target;
        const accordionItem = target.closest('.accordion__item');
        if (accordionItem) {
          const text = accordionItem.querySelector('.accordion__item-description');
          accordionItem.classList.toggle('active');
          slideToggle(text, 500);
        }
      });
      
}