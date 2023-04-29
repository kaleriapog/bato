export default function preloader() {
  const preloaderBlock = document.querySelector(".preloader");
  const page = document.querySelector(".page");
  const halo = document.querySelector(".halo");

  if (preloaderBlock) {
    window.addEventListener("load", () => {
      preloaderBlock.classList.add("preloader-start");
      page.classList.add("visible");
      // halo.classList.remove("halo-hiden");
    });
  }
}
