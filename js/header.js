$(document).ready(function() {
  $(".menu-btn").click(function(){
    $("html").css("overflow","hidden");
    $(".sitemap").fadeIn(200);
  });
  $(".close-btn").click(function(){
    $("html").css("overflow","auto");
    $(".sitemap").fadeOut(200);
  });
});
