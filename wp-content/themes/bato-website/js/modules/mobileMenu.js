export default function mobileMenu() {
  const iconOpenNav = document.querySelector(".navigation-icon");
  const iconCloseNav = document.querySelector(".navigation-icon-close");
  const navBlockHeader = document.querySelector(".header__navigation");
  const preloaderMenuMob = document.querySelector(".preloader-menu-mob");
  const header = document.querySelector("header");
  const page = document.querySelector(".page");
  const mediaLaptop = window.screen.width <= 1024;

  if (mediaLaptop) {
    window.addEventListener("scroll", () => {
      window.scrollY > 2
        ? header.classList.add("header-mobile-border")
        : header.classList.remove("header-mobile-border");
    });
  }

  iconOpenNav.addEventListener("click", () => {
    setTimeout(() => {
      header.classList.add("open-header-menu");
    }, 500);
    navBlockHeader.classList.add("open-menu");
    page.classList.add("no-scroll");
    // preloaderMenuMob.classList.add("preloader-menu-mob-start");
  });

  // close nav
  iconCloseNav.addEventListener("click", () => {
    setTimeout(() => {
      header.classList.remove("open-header-menu");
    }, 400);
    navBlockHeader.classList.remove("open-menu");
    page.classList.add("visible");
    page.classList.remove("no-scroll");
    // preloaderMenuMob.classList.remove("preloader-menu-mob-start");
  });

  //removal of the smooth appearance of the menu when switching from the desktop version of the site to the mobile one
  // window.addEventListener("resize", (e) => {
  //   if(mediaSwitchToLaptop) {
  //     navBlockHeader.classList.add("no-transition");
  //
  //     setTimeout(() => {
  //       navBlockHeader.classList.remove("no-transition");
  //     }, 1500);
  //   }
  // })
}
