$(document).ready(function() {
  var $menu = $('.gnb-ul li'),
      $menuMobile = $('.menu li'),
      $contents = $('.contents'),
      $doc = $('html, body');
      // cont1 = $("#About"),
      // cont2 = $("#Service"),
      // cont3 = $("#Business");
  $(function () {
    // 해당 섹션으로 스크롤 이동
    $menu.on('click','a', function(e){
      var $target = $(this).parent(),
          idx = $target.index(),
          section = $contents.eq(idx),
          offsetTop = section.offset().top;
      $doc.stop().animate(
        { scrollTop :offsetTop },
        500,
        'swing',
        function() {
            $( this ).animate( {
              scrollTop :offsetTop,
            }, 350, 'linear');
          }
      );
      return false;
    });
    $menuMobile.on('click','a', function(e){
      if($(this).parent("li").index() == 0){

      }else{
        var $target = $(this).parent(),
            idx = $target.index(),
            section = $contents.eq(idx),
            offsetTop = section.offset().top;
        $("html").css("overflow","auto");
        $(".sitemap").fadeOut(200);
        $doc.stop().animate({
          scrollTop :offsetTop }, 300); return false;
      }
    });
  });

  var swiper = new Swiper(".mySwiper", {
    loop: true,
    autoplay: {
      delay: 3000,
      disableOnInteraction:false,
    },
    speed:700,
    slidesPerView: 2,
    spaceBetween: 0,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    on: {
      slideChangeTransitionEnd : function(){
        // console.log(this.activeIndex);
        if($(window).width()>768){
          var active = this.activeIndex;
          var txtShowNum = active-2;
          if(active > 11){
            txtShowNum = 0;
          }
          // console.log(txtShowNum);
          $(".txt-slider").find("li").hide();
          $(".txt-slider").find("li").eq(txtShowNum).fadeIn(200);
          // $(".txt-slider li").find("span").addClass("on");
          $(".txt-slider li").removeClass("on");
          $(".txt-slider li:eq("+txtShowNum+")").addClass("on");
          $(".txt-slider li").find(".highlighter").removeClass("on");
          $(".txt-slider li:eq("+txtShowNum+")").find(".highlighter").addClass("on");
        }else{
          var active = this.activeIndex;
          var txtShowNum = active-1;
          if(active > 10){
            txtShowNum = 0;
          }
          // console.log(txtShowNum);
          $(".txt-slider").find("li").hide();
          $(".txt-slider").find("li").eq(txtShowNum).fadeIn(200);
          // $(".txt-slider li").find("span").addClass("on");
          $(".txt-slider li").removeClass("on");
          $(".txt-slider li:eq("+txtShowNum+")").addClass("on");
          $(".txt-slider li").find(".highlighter").removeClass("on");
          $(".txt-slider li:eq("+txtShowNum+")").find(".highlighter").addClass("on");
        }

      }
    },
    breakpoints: {
      // 화면의 넓이가 0px 이상일 때
      0:
      {
        slidesPerView: 1,
      },
      // 화면의 넓이가 640px 이상일 때
      769:
      {
        slidesPerView: 2,
      }
    }
  });
  // 더욱 고도화된 IT서비스 모바일버전 작업
  $('.service-owl').owlCarousel({
      loop:true,
      margin:40,
      responsiveClass:true,
      responsive:{
          0:{
              items:1,
              nav:true
          },
          769:{
              items:2,
              nav:true
          }
      }
  });
  // BLU-IT이 잘하는 일, 모바일버전 작업
  $('.business-owl').owlCarousel({
      loop:true,
      margin:40,
      responsiveClass:true,
      responsive:{
          0:{
              items:1,
              nav:false
          },
          769:{
              items:2,
              nav:false
          }
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

  //모바일 회전 대응
  // if(window.orientation == 0) // Portrait
  //  {
  //     $('html').removeClass('show');
  //  }
  // else // Landscape
  //  {
  //     $('html').addClass('show');
  //  }
  // $(window).on("orientationchange",function(){
  //  if(window.orientation == 0) // Portrait
  //   {
  //      $('html').removeClass('show');
  //   }
  //  else // Landscape
  //   {
  //      $('html').addClass('show');
  //   }
  // });

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
