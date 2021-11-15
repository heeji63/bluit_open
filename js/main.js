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
        // function() {
        //     $( this ).animate( {
        //       scrollTop :offsetTop,
        //     }, 350, 'linear');
        //   }
      );
      return false;
    });
    $menuMobile.on('click','a', function(e){
      var $target = $(this).parent(),
          idx = $target.index(),
          section = $contents.eq(idx),
          offsetTop = section.offset().top;
      $("html").css("overflow","auto");
      $(".sitemap").fadeOut(200);
      $doc.stop().animate({
        scrollTop :offsetTop }, 300); return false;
    });
  });

  var swiper = new Swiper(".mySwiper", {
    loop: true,
    autoplay: {
      delay: 3000,
      disableOnInteraction:true,
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
      }
    },
    breakpoints: {
      // 화면의 넓이가 320px 이상일 때
      280:
      {
        slidesPerView: 1,
        on: {
          slideChangeTransitionEnd : function(){
            console.log(this.activeIndex);
            var active = this.activeIndex;
            var txtShowNum = active+2;
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
          }
        },
      },
      // 화면의 넓이가 640px 이상일 때
      768:
      {
        slidesPerView: 2,
      }
    }
  });
  // 더욱 고도화된 IT서비스 모바일버전 작업
  $('.service-owl').owlCarousel({
      loop:true,
      margin:50,
      responsiveClass:true,
      responsive:{
          0:{
              items:1,
              nav:true
          },
          768:{
              items:2,
              nav:true
          }
      }
  });
  // BLU-IT이 잘하는 일, 모바일버전 작업
  $('.business-owl').owlCarousel({
      loop:true,
      margin:50,
      responsiveClass:true,
      responsive:{
          0:{
              items:1,
              nav:false
          },
          768:{
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
});
