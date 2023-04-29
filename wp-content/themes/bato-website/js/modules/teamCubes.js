export default function teamCubes() {
  const root = document.documentElement;
  const teamCube = document.querySelector(".section-team__items-wrapp");
  const cubeItem = document.querySelectorAll(".cube");

  if (!teamCube) return;

  let teamItemWidth = teamCube.offsetWidth;

  root.style.setProperty("--cube-width", teamItemWidth + "px");

  root.style.setProperty("--cube-width-minus", -teamItemWidth + "px");

  const isWindows = navigator.platform !== "MacIntel";

  let arr = [
    "rotateY(90deg)",
    "rotateY(-90deg)",
    "rotateX(-90deg)",
    "rotateX(90deg)",
  ];

  function arrayRandElement(arr) {
    // let random = Math.floor(Math.random() * arr.length);
    let random = "rotateX(90deg)";
    return random;
  }

  cubeItem.forEach((el) => {
    el.style.transform = `translateZ(-${
      isWindows ? teamItemWidth / 2 - 12 : teamItemWidth / 2
    }px) rotateY(0deg)`;

    el.addEventListener("click", function test() {
      if (
        el.style.transform ==
        `translateZ(-${
          isWindows ? teamItemWidth / 2 - 12 : teamItemWidth / 2
        }px) rotateY(0deg)`
      ) {
        el.style.transform = `translateZ(-${teamItemWidth}px) rotateX(90deg)`;
      } else {
        el.style.transform = `translateZ(-${
          isWindows ? teamItemWidth / 2 - 12 : teamItemWidth / 2
        }px) rotateY(0deg)`;
      }
    });
  });

  window.addEventListener("resize", () => {
    teamItemWidth = teamCube.offsetWidth;

    root.style.setProperty("--cube-width", teamItemWidth + "px");
    root.style.setProperty("--cube-width-minus", -teamItemWidth + "px");
  });
}
