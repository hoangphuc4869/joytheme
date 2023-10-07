const search = document.querySelector(".fa-solid.fa-magnifying-glass");
const inputSearch = document.querySelector("#s");
if (search) {
  search.addEventListener("click", () => {
    inputSearch.classList.toggle("show");
  });
}

const close = document.querySelector(".close");
const side = document.querySelector(".side-nav");
const layer = document.querySelector(".layer");
const sideNavIcon = document.querySelector(".mkdf-burger-svg-icon.icon1");

const sideNavIcon2 = document.querySelector(".mkdf-burger-svg-icon.icon2");
const mobile = document.querySelector(".menu-mobile");

sideNavIcon2.addEventListener("click", () => {
  mobile.classList.toggle("showMobile");
});

function closeSideAndLayer() {
  side.classList.remove("openSideNav");
  side.classList.add("hideSideNav");
  layer.classList.add("closeX");
  layer.classList.remove("showlayer");
}

if (sideNavIcon) {
  sideNavIcon.addEventListener("click", () => {
    layer.classList.remove("closeX");
    layer.classList.add("showlayer");
    side.classList.add("openSideNav");
    side.classList.remove("hideSideNav");
  });
}

close.addEventListener("click", () => {
  closeSideAndLayer();
});

layer.addEventListener("click", () => {
  closeSideAndLayer();
});

var swiper = new Swiper(".HeadingSwiper", {
  slidesPerView: 1,

  autoplay: {
    delay: 4000,
    disableOnInteraction: false,
  },
  loop: true,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});

var swiper = new Swiper(".customerSlider", {
  slidesPerView: 4,

  autoplay: {
    delay: 2500,
    disableOnInteraction: false,
  },
  loop: true,
  breakpoints: {
    300: {
      slidesPerView: 1,
    },

    800: {
      slidesPerView: 4,
    },
  },
});

const checkScroll = document.querySelector(".process");
window.addEventListener("scroll", activeProcess);
function activeProcess() {
  if (checkScroll) {
    const trigger = (window.innerHeight / 5) * 4;
    let itemTop = checkScroll.getBoundingClientRect().top;
    if (itemTop < trigger) {
      const circle = document.querySelectorAll(".circle-process");
      const value = document.querySelectorAll(".value span");

      if (circle) {
        circle.forEach((c, index) => {
          let start = 0;
          let end = value[index].innerHTML;
          let process = setInterval(() => {
            start++;
            value[index].innerHTML = start;

            c.style.background = `conic-gradient(#fff ${
              start * 3.6
            }deg, #0c0b0b 0)`;
            if (start == end) {
              clearInterval(process);
            }
          }, 10);
        });
      }
      window.removeEventListener("scroll", activeProcess);
      hasScrolled = true;
    }
  }
}
