$(document).ready(function(){
  $('.menu_slider').slick({
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1
  });
      

  $('.slick_blog').slick({
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 1,
    
    responsive: [{
      breakpoint: 760,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        centerMode: false,
      },

      breakpoint: 550,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        centerMode: false,
      }
    }]

  });



  
 $('.slider-for').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: false,
  fade: true,
  asNavFor: '.slider-nav'
});
$('.slider-nav').slick({
  slidesToShow: 3,
  slidesToScroll: 1,
  asNavFor: '.slider-for',
  dots: false,
  centerMode: true,
  focusOnSelect: true
});
      
});



