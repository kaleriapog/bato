export default function preloader() {
  const preloaderBlock = document.querySelector(".preloader");
  const page = document.querySelector(".page");
  const bodyWrapp = document.querySelector(".body-wrapp");

  if (preloaderBlock) {
    window.addEventListener("load", () => {
      preloaderBlock.classList.add("preloader-start");
      page.classList.add("visible");
      bodyWrapp.style.opacity = "1";
    });
  }
}
