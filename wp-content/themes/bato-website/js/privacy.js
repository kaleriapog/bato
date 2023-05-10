import fixedHeader from "./modules/fixed-header.js";

document.addEventListener("DOMContentLoaded", () => {
    const sectionPrivacy = document.querySelector(".privacy-policy");

    fixedHeader(sectionPrivacy);
});
