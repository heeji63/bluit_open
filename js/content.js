$(document).ready(function() {
  var scrollLoc = $(document).scrollTop();
  if(scrollLoc > 0){
    if($(window).width() < 769){
      $("#header").addClass('on');
    }else{
      $("#header").removeClass('on');
    }
  }else{
    $("#header").removeClass('on');
  }
  $(window).scroll(function(){
    var scrollLoc = $(document).scrollTop();
    if(scrollLoc > 0){
      if($(window).width() < 769){
        $("#header").addClass('on');
      }else{
        $("#header").removeClass('on');
      }
    }else{
      $("#header").removeClass('on');
    }
  });

  // Scroll Animation (sa, 스크롤 애니메이션)
  var hiTriggerMargin = 300;
  var hiElementList = document.querySelectorAll('.contents');
  var saFunc = function() {
    $.each(hiElementList, function(idx, element){
      if (!element.classList.contains('on')) {
        if (window.innerHeight > element.getBoundingClientRect().top + hiTriggerMargin) {
          element.classList.add('on');
        }
      }
    });
  };
  window.addEventListener('load', saFunc);
  window.addEventListener('scroll', saFunc);

  //세로가 가로보다 짧아졌을 경우 대응
  if($(window).width() > $(window).height()-100){
    $('html').addClass('show');
  }else{
    $('html').removeClass('show');
  }
  $(window).resize(function(){
    if($(window).width() > $(window).height()-100){
      $('html').addClass('show');
    }else{
      $('html').removeClass('show');
    }
  });
});
