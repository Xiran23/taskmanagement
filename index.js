var swiper1 = new Swiper(".mySwiper1", {
  slidesPerView: 3,
  spaceBetween: 30,
  freeMode: true,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
});

function Opensection(sectionname) {
  var i;
  var x = document.getElementsByClassName("feature");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  var currentSection = document.getElementById(sectionname);
  currentSection.style.display = "block";
}
