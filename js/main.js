$(document).ready(function() {
  // var swiper = new Swiper(".mySwiper", {
  //   direction: "vertical",
  //   slidesPerView: 1,
  //   spaceBetween: 30,
  //   mousewheel: true,
  //   pagination: {
  //     el: ".swiper-pagination",
  //     // clickable: true,
  //     type: "fraction",
  //   },
  // });
  $(".menu-btn").click(function(){
    $(".sitemap").fadeIn(200);
  });
  $(".close-btn").click(function(){
    $(".sitemap").fadeOut(200);
  });
  var cont1 = $("#About");
  var cont2 = $("#Service");
  var cont3 = $("#Business");

  var swiper = new Swiper(".mySwiper", {
    loop: true,
    autoplay:true,
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
        $(".txt-slider").find("li").eq(txtShowNum).fadeIn(300);
        // $(".txt-slider li").find("span").addClass("on");
        $(".txt-slider li").find("span").removeClass("on");
        $(".txt-slider li:eq("+txtShowNum+")").find("span").addClass("on");
      }
    },
    breakpoints: {
      // 화면의 넓이가 320px 이상일 때
      280:
      {
        slidesPerView: 1,
      },
      // 화면의 넓이가 640px 이상일 때
      768:
      {
        slidesPerView: 2,
      }
    }
  });
  // Scroll Animation (sa, 스크롤 애니메이션)
      // const saTriggerMargin = 300;
      // const saElementList = document.querySelectorAll('.sa');
      //
      // const saFunc = function() {
      //   for (const element of saElementList) {
      //     if (!element.classList.contains('show')) {
      //       if (window.innerHeight > element.getBoundingClientRect().top + saTriggerMargin) {
      //         element.classList.add('show');
      //       }
      //     }
      //   }
      // }
      //
      // window.addEventListener('load', saFunc);
      // window.addEventListener('scroll', saFunc);
});
