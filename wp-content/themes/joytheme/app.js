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
const sideNavIcon = document.querySelector(".mkdf-burger-svg-icon");
sideNavIcon.addEventListener("click", () => {
  //   side.style.transform = "translateX(0)";
  layer.style.display = "block";
});

close.addEventListener("click", () => {
  side.classList.add("closeX");
  //   layer.style.display = "none";
});
