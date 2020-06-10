/*start home */
$(document).ready(function(){

 
$(".nav .navbar-nav li a").click(function(){
  var href=$(this).attr("href");
  $("body ,html").animate({scrollTop:$(href).offset().top},1200)
})


});

/* end home */