const asd = document.querySelector(".navbar-overlay");

function enableOverlay(target) {
    asd.style.height = "100%";
    const links = document.querySelectorAll("#linkNavbar");
    links.forEach((link, i) => {
        setTimeout(() => {
            link.classList.remove("hidden");
        }, 300 * (i + 1));
    });
}

function disableOverlay(target) {
    asd.style.height = "0%";
    const links = document.querySelectorAll("#linkNavbar");
    links.forEach((link, i) => {
        setTimeout(() => {
            link.classList.add("hidden");
        }, 300);
    });
}

const navbarButton = document.querySelector("#navbarButton");
const collapsibleNavbar = document.querySelector("#collapsibleNavbar");

// navbarButton.addEventListener("click", function () {
//     collapsibleNavbar.classList.toggle("active");
// });
