// header scroll

$(function() {
    var header = $(".header");
  
    $(window).scroll(function() {    
        var scroll = $(window).scrollTop();
        if (scroll >= 50) {
            header.addClass("scrolled");
        } 
        else {
            header.removeClass("scrolled");
        }
    });
  
});


// owl-carousel
$('.owl-carousel').owlCarousel({
    margin:10,
    loop:true,
    autoWidth:true,
    items:3
})