$(document).ready(function() {
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
});
