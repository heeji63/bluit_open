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
  if($(window).width() > $(window).height()-400){
    $('html').addClass('show');
  }else{
    $('html').removeClass('show');
  }
  $(window).resize(function(){
    if($(window).width() > $(window).height()-400){
      $('html').addClass('show');
    }else{
      $('html').removeClass('show');
    }
  });

  //masonry
  var $grid = $('.portfolioWrapInner').masonry({
    // options...
    columnWidth: '.grid-item',
    itemSelector: '.grid-item',
    percentPosition: true
     // gutter: 45
  });
  // layout Masonry after each image loads
  $grid.imagesLoaded().progress( function() {
    $grid.masonry('layout');
  });

  // init Isotope
  $grid.imagesLoaded(function(){
    var $grid = $('.portfolioWrapInner').isotope({
      itemSelector: '.all'
    });
  });

  // filter items on button click
  $('.tab-ul').on( 'click', 'li', function() {
    if($(this).index() < 4){
      var filterValue = $(this).children().attr('data-filter');
      $('.portfolioWrapInner').isotope({ filter: filterValue });
      // console.log(filterValue);
      $('.tab-ul li').removeClass('on');
      $(this).addClass('on');
    }else{

    }
  });

  //더보기
  // $(".all").slice(0, 9).show(); // select the first ten
  // $("#workMore").click(function(e){ // click event for load more
  //     $(".all:hidden").slice(0, 9).show(); // select next 10 hidden divs and show them
  //     // layout Masonry after each image loads
  //     // init Isotope
  //     var $grid = $('.portfolioWrapInner').isotope({
  //       itemSelector: '.all'
  //     });
  //     var filterValue = $(this).children().attr('data-filter');
  //     $('.portfolioWrapInner').isotope({ filter: filterValue });
  //     $grid.imagesLoaded().progress( function() {
  //       $grid.masonry('layout');
  //     });
  //
  //     if($(".all:hidden").length == 0){ // check if any hidden divs still exist
  //         // alert("No more divs"); // alert if there are none left
  //         $(".more-btn-wrap").hide();
  //     }
  // });

});
