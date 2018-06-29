// var path = window.location.pathname;
// var page = path.split("/")
// var pageName = page[page.length - 2];
//
// // photo slider
//
// $(document).ready(function() {
//
// 	function play() {
// 		setInterval(function() {
// 			var next = $(".slideshow .active").removeClass("active").next(".slider-image");
// 			if (!next.length) {
// 				next = $(".slideshow .slider-image:first");
// 			}
// 			next.addClass("active");
// 		}, 3500);
// 	}
// 	play();
// });
//
//
// // global functions
//
// if (pageName == "toronto-astrology") {
// 	runCarouselphoto();
// }

//Navbar mobile animation
$(document).ready(function(){
 $(".hamburger").click(function(){
   $(this).toggleClass("is-active");
   $("#dropdown-menu").toggleClass("drop");
 });
});
