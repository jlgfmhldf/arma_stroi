$(document).ready(function() {
 
  $(".js-slider-main").owlCarousel({
    navigation: true,
    singleItem: true,
    mouseDrag: false,
    slideSpeed: 300
  });

  $(".js-slider-objects").owlCarousel({
    navigation: true,
    pagination: false,
    singleItem: true,
    mouseDrag: false,
    slideSpeed: 300
  });
 
});