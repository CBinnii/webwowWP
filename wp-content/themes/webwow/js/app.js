// MENU
function menuMobile() {
    var menu = document.getElementById("menu-button");
    var collapse = document.getElementById("navbar-collapse");

    if (collapse.classList.contains("show")) {
        collapse.classList.remove("show");
    } else {
        collapse.classList.add("show");
    }

    if (menu.classList.contains("cross")) {
        menu.classList.remove("cross");
    } else {
        menu.classList.add("cross");
    }
}


// Initialize Swiper

const slides = document.getElementsByClassName('swiper-slide');
const slidesLength = slides.length;
var el = document.getElementById('swiper-wrapper-ie');
var el2 = document.getElementById('swiper-ie'); if (window.isIE) {
    document.documentElement.classList.add('ie');
    el.style = null;
    el2.style = null;
} if (slidesLength > 1 && !window.isIE) {
    var MySwiper = new Swiper('.swiper-container', {
        observer: true,
        observeParents: true,

        speed: 800,
        direction: 'vertical',
        mousewheel: { releaseOnEdges: false },

        followFinger: false,
        touchReleaseOnEdges: true,
        longSwipes: false,
        parallax: true,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
            // renderBullet: (index, className) => {
            //     const value = 'text' || '';
            //     return '<span class=' + className + '>' + '<span class="s-label">' + value + '</span></span>';
            // }
        },
        on: {
            slideChange: (swiper) => {
                const { offsetTop } = swiper.el;
                window.pageYOffset !== offsetTop && window.scrollTo({
                    top: offsetTop,
                    behavior: 'smooth'
                });
            },
            slideChangeTransitionEnd: (swiper) => {
                const activeIndex = swiper.activeIndex;
                swiper.params.mousewheel.releaseOnEdges = activeIndex === 0 || (activeIndex === slidesLength - 1);
            }
        }
    });
}