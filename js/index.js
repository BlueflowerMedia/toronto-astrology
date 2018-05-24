var path = window.location.pathname;
var page = path.split("/")
var pageName = page[page.length - 2];

// photo slider

$(document).ready(function() {

  function play() {
    setInterval(function() {
      var next = $(".slideshow .active").removeClass("active").next(".image");
      if (!next.length) {
        next = $(".slideshow .image:first");
      }
      next.addClass("active");
    }, 5000);
  }
  play();
});


// global functions

if (pageName == "Toronto-astrology") {
  runCarouselphoto();
}