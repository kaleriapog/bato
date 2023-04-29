export default function magneticBtn(link) {
  if (!link) return;

  link.forEach((el) => {
    const linkContactPhraseContent = el.innerHTML;

    el.innerHTML = `
    <span class="container container-link">
        <span class="magnetic magnetic-link">
            <span class="btn btn-outline-primary magnet-button">${linkContactPhraseContent}
            </span>
        </span>
    </span>`;

    const magnet = el.querySelector(".magnetic");

    magnet.addEventListener("mousemove", moveMagnet);
    magnet.addEventListener("mouseout", function (event) {
      TweenMax.to(event.currentTarget, 1, {
        x: 0,
        y: 0,
        ease: Power4.easeOut,
      });
    });
  });

  function moveMagnet(event) {
    const magnetButton = event.currentTarget;
    const bounding = magnetButton.getBoundingClientRect();
    const strength = 50;

    TweenMax.to(magnetButton, 1, {
      x:
        ((event.clientX - bounding.left) / magnetButton.offsetWidth - 0.5) *
        strength,
      y:
        ((event.clientY - bounding.top) / magnetButton.offsetHeight - 0.5) *
        strength,
      ease: Power4.easeOut,
    });
  }
}
