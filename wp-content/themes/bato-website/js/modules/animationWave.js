export default function animationWave(arr) {
  arr.forEach(function (el) {
    let item = el.innerHTML;
    let itemInSpan = item
      .split("")
      .reduce(
        (res, char, index) =>
          `${res}<span style="--index: ` + `${index}` + `">${char}</span>`,
        ""
      );

    el.innerHTML =
      `
            <span class="animation-wrapp-wave">
                <span class="wave-item">` +
      itemInSpan +
      `</span>
                <span class="wave-item-clone">` +
      itemInSpan +
      `</span>
            </span>`;

  });
}
