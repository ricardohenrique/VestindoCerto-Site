$(function(){
    var widthPage = ($(window).width()+17);
    // if(widthPage > 767){
    //     // Scroll nav fixed
    //     $(window).scroll(function(){
    //         if($(window).scrollTop() > 100){
    //             $('.navbar').addClass('scroll-nav-fixed');
    //         }
    //         else{
    //             $('.navbar').removeClass('scroll-nav-fixed');
    //         }
    //     });
    // }
    // Drop down menu
    if(widthPage <= 767){
        $('.dropdown').addClass('open');
    }else{
        $('.dropdown').hover(function() {
                $(this).addClass('open');
                $(this).children().next().addClass('fade-in-dropdown');
            }, function() {
                $(this).removeClass( "open" );
                $(this).children().next().removeClass('fade-in-dropdown');
            }
        );
    }
});
