var $carousel = $('.carousel'),
    currentSlide, nextSlide;

$('.next').click(function() {
  currentSlide = $carousel.attr('data-slide');
  nextSlide = +currentSlide === 4 ? 1 : +currentSlide + 1;
  $carousel.attr('data-slide', nextSlide);
});

$('.prev').click(function() {
  currentSlide = $carousel.attr('data-slide');
  nextSlide = +currentSlide === 1 ? 4 : +currentSlide - 1;
  $carousel.attr('data-slide', nextSlide);
});