$("#banner1").owlCarousel({
    items: 1,
    loop: true,

    dots: true,
    autoplay: true,

    autoplayTimeout: 4000,
    autoplayHoverPause: true,
    smartSpeed: 1000,
    paginationSpeed: 1000,
});
$("#partner").owlCarousel({
    items: 1,
    loop: true,
    autoplay: true,
    animateOut: "fadeOut",
    dots: true,

    autoplayTimeout: 4000,
    autoplayHoverPause: true,
    smartSpeed: 1000,
    paginationSpeed: 1000,
});

$("#test").owlCarousel({
    items: 1,
    loop: true,
    autoplay: true,
    animateOut: "fadeOut",

    autoplayTimeout: 4000,
    autoplayHoverPause: true,
    smartSpeed: 1000,
    paginationSpeed: 1000,
});

$("#practice").owlCarousel({
    items: 4,
    loop: true,

    autoplay: true,
    margin: 30,

    autoplayTimeout: 4000,
    autoplayHoverPause: true,
    smartSpeed: 1000,
    paginationSpeed: 1000,
});

$("#latest").owlCarousel({
    items: 3,
    loop: true,

    autoplay: true,
    margin: 30,
    nav: true,

    autoplayTimeout: 4000,
    autoplayHoverPause: true,
    smartSpeed: 1000,
    paginationSpeed: 1000,

    responsive: {
        // breakpoint from 0 up
        0: {
            items: 1,
        },
        550: {
            items: 2,
        },
        768: {
            items: 3,
        },

        // breakpoint from 480 up
    },
});

$("#team").owlCarousel({
    items: 3,
    loop: true,

    autoplay: true,
    margin: 30,

    autoplayTimeout: 4000,
    autoplayHoverPause: true,
    smartSpeed: 1000,
    paginationSpeed: 1000,
});

const header = document.querySelector(".scroll-line");
const partner = document.querySelector(".partner");

const stickyNav = function(entries) {
    const [entry] = entries;

    if (entry.isIntersecting) header.classList.add("scroll-line-active");
    // else header.classList.remove("scroll-line-active");
};

const items = document.querySelectorAll(".accordion button");

function toggleAccordion() {
    const itemToggle = this.getAttribute("aria-expanded");

    for (i = 0; i < items.length; i++) {
        items[i].setAttribute("aria-expanded", "false");
    }

    if (itemToggle == "false") {
        this.setAttribute("aria-expanded", "true");
    }
}

items.forEach((item) => item.addEventListener("click", toggleAccordion));

// window.onload = function () {
//     formPop();
// };

// function formPop() {
//     document
//         .querySelector(".form-section")
//         .classList.add("form-section-active");
// }

// document.querySelector(".cancel").addEventListener("click", cancel);

// function cancel() {
//     document.querySelector(".form-section").style.display = "none";
// }
