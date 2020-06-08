/*start home */
$(document).ready(function(){

    $('.owl-carousel').owlCarousel({
      items:1,
      autoplay:true,
      nav:true,
      loop:true,
      responsiveClass:true, 
   
});


$(".nav .navbar-nav li a").click(function(){
  var href=$(this).attr("href");
  $("body ,html").animate({scrollTop:$(href).offset().top},1100)
})





$("#login .input").focus(function(){
  $(this).css("border","2px solid #ffb606")
  $("#login .input").not(this).css("border","0px")
})

});

/* end home */