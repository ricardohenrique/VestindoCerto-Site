$(function(){
  var widthPage = ($(window).width()+17);
  if(widthPage > 767){
      // Scroll nav fixed
      $(window).scroll(function(){
          if($(window).scrollTop() > 100){
              $('.navbar').addClass('scroll-nav-fixed');
          }
          else{
              $('.navbar').removeClass('scroll-nav-fixed');
          }
      });
  }
});
