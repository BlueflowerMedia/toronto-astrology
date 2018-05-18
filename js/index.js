var path = window.location.pathname;
var page = path.split("/")
var pageName = page[page.length - 2];

// photo slider
function runCarouselphoto() {
  $(".photo-slider").owlCarousel({
    items: 4,
    loop: true,
    margin: 10,
    autoplay: true,
    autoplayTimeout: 1700,
    autoplayHoverPause: true,
  });
}

// global functions

if (pageName == "toronto-astrology") {
  runCarouselphoto();
}