<?php
define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// if (G5_IS_MOBILE) {
//     include_once(G5_THEME_MOBILE_PATH.'/index.php');
//     return;
// }
//
include_once(G5_THEME_PATH.'/head.php');
// add_javascript('<script src="'.G5_JS_URL.'/swiper-bundle.min.js"></script>', 0);
// add_javascript('<script src="'.G5_JS_URL.'/main.js"></script>', 0);
?>

<!-- <!DOCTYPE html>
<html lang="ko" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>BLU-IT</title>
    <meta name="viewport"content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1"/>
    <link rel="stylesheet" href="css/swiper-bundle.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/responsive.css">
    <script src="js/jquery-1.12.4.min.js" type="text/javascript"></script>
    <script src="js/swiper-bundle.min.js" type="text/javascript"></script>
    <script src="js/main.js" type="text/javascript"></script>
  </head>
  <body>
      <header id="header">
        <div class="header-inner clearfix">
          <h1 class="logo">
            <a href="index.html"><img src="<?php echo G5_IMG_URL ?>/logo.png" alt="blu-it logo"></a>
          </h1>
          <div class="gnb-wrap clearfix">
            <div class="gnb">
              <ul class="gnb-ul clearfix">
                <li><a href="#About">about</a></li>
                <li><a href="#Service">services</a></li>
                <li><a href="#Business">business</a></li>
                <li><a href="#Work">work</a></li>
              </ul>
            </div>
            <button type="button" class="menu-btn"><img src="<?php echo G5_IMG_URL ?>/menu_btn.png" alt="menu"></button>
          </div>
        </div>
      </header>
      <div class="sitemap">
        <h1 class="logo">
          <a href="index.html"><img src="<?php echo G5_IMG_URL ?>/logo.png" alt="blu-it logo"></a>
        </h1>
        <button type="button" class="close-btn"><img src="<?php echo G5_IMG_URL ?>/menu_close_btn.png" alt="close"></button>
        <ul class="menu">
          <li><a href="#"><span class="highlighter">ABOUT</span></a></li>
          <li><a href="#Service"><span class="highlighter">SERVICES</span></a></li>
          <li><a href="#Business"><span class="highlighter">BUSINESS</span></a></li>
          <li><a href="#Work"><span class="highlighter">WORK</span></a></li>
        </ul>
      </div> -->
      <div id="fullPage" class="contentBox">
        <div class="content-wrapper">
          <div id="About" class="contents content1">
            <div class="inner">
              <ul class="main-visual clearfix">
                <li>
                  <img src="<?php echo G5_IMG_URL ?>/main_people.png" class="visual-img" alt="Main Visual">
                </li>
                <li>
                  <h2 class="main-tit">
                    HUMANS & <br />IT EXPERIENCE
                  </h2>
                  <div class="sub-txt">
                    <h4>WE ARE EXPERTS</h4>
                    <p>
                      블루잇은 더 향상된 비즈니스를 위해 IT경험과 사람을 생각하고<br />
                      고객분들의 비즈니스가 성장 할 수 있는 동반자를 꿈꿉니다.
                    </p>
                  </div>
                </li>
              </ul>
            </div>
            <div class="bg-gray"></div>
            <div class="bg-line"></div>
          </div>
          <div id="Service" class="contents content2">
            <div class="inner">
              <h3 class="sub-tit">
                우리는 300여개의 이상의 기업에 <br />
                <span class="highlighter">더욱 고도화된 IT서비스</span>를 제공합니다.
              </h3>
              <div class="service-wrap">
                <ul class="clearfix">
                  <li>
                    <div class="img"><img src="<?php echo G5_IMG_URL ?>/about_01.jpg" alt="about1"></div>
                    <div class="txt">
                      <h5>소상공인</h5>
                      <p>
                        1인사업자, 처음 사업을 진행하시는 기업등을 위한 별도의 정보기술 서비스를 제공합니다.
                      </p>
                    </div>
                  </li>
                  <li>
                    <div class="img"><img src="<?php echo G5_IMG_URL ?>/about_02.jpg" alt="about2"></div>
                    <div class="txt">
                      <h5>중소기업</h5>
                      <p>
                        경쟁력을 유지하기 위해 중소기업을 생산성과 빠른 의사결정을 필요로 합니다. 빠른 성장을 위한 정보 서비스를 제공합니다.
                      </p>
                    </div>
                  </li>
                  <li>
                    <div class="img"><img src="<?php echo G5_IMG_URL ?>/about_03.jpg" alt="about3"></div>
                    <div class="txt">
                      <h5>대기업</h5>
                      <p>
                        대기업의  IT부서는 필수적입니다.<br />
                        다만 IT부서가 하지 못하는 다양한 유지보수 서비스를 제공됩니다.
                      </p>
                    </div>
                  </li>
                </ul>
              </div>
              <div class="bg-figure">
                <div class="figure rectangle1"></div>
                <div class="figure rectangle2"></div>
                <div class="figure rectangle3"></div>
                <div class="figure circle1"></div>
                <div class="figure circle2"></div>
                <div class="figure circle3"></div>
                <div class="figure circle4"></div>
                <div class="figure circle5"></div>
                <div class="figure circle6"></div>
                <div class="figure triangle1"></div>
              </div>
            </div>
          </div>
          <div id="Business" class="contents content3">
            <div class="inner">
              <h3 class="sub-tit">
                <span class="highlighter">BLU-IT이 잘하는 일,</span> <br />
                고객분들과 함께 성공으로 달려갑니다.
              </h3>
              <div class="business-wrap">
                <ul class="clearfix">
                  <li>
                    <div class="icon-box"><img src="<?php echo G5_IMG_URL ?>/ic_work_01.png" alt="work1"></div>
                    <h5>홈페이지 제작</h5>
                    <p>
                      비지니스를 위한 첫걸음. <br />
                      여러분의 비지니스의 확장성을 넓혀드립니다.<br />
                      <span class="hashtag">#PC/MOBILE 홈페이지 #반응형 홈페이지 <br />
                      #템플릿형 홈페이지<span>
                    </p>
                  </li>
                  <li>
                    <div class="icon-box"><img src="<?php echo G5_IMG_URL ?>/ic_work_02.png" alt="work2"></div>
                    <h5>쇼핑몰 제작</h5>
                    <p>
                      비지니스에 알맞는 맞춤 솔루션 구성으로 <br />
                      최적의 서비스를 제공해드립니다.<br />
                      <span class="hashtag">#자사몰(독립몰/임대몰) #기업형 쇼핑몰 <br />
                      #쇼핑몰 스킨 #오픈마켓 연동<span>
                    </p>
                  </li>
                  <li>
                    <div class="icon-box"><img src="<?php echo G5_IMG_URL ?>/ic_work_03.png" alt="work3"></div>
                    <h5>어플리케이션 제작</h5>
                    <p>
                      크로스브라우징과 1:1 모듈화를 통해 <br />
                      적은 비용으로 안드로이드, 아이폰 앱 제작이<br /> 가능 합니다.<br />
                      <span class="hashtag">#안드로이드/아이폰 앱 #네이티브 앱 #하이브리드 앱<span>
                    </p>
                  </li>
                  <li>
                    <div class="icon-box"><img src="<?php echo G5_IMG_URL ?>/ic_work_04.png" alt="work4"></div>
                    <h5>디지털 마케팅</h5>
                    <p>
                      어렵고 복잡한 기술은 전문가에게 맡기세요. <br />
                      컨설팅은 전문가의 실제 운영 경험을 토대로<br /> 이루어 집니다.<br />
                      <span class="hashtag">#빅데이터 #마케팅<span>
                    </p>
                  </li>
                  <li>
                    <div class="icon-box"><img src="<?php echo G5_IMG_URL ?>/ic_work_05.png" alt="work5"></div>
                    <h5>유지보수 서비스</h5>
                    <p>
                      처음부터 유지보수를 고려한 전문 컨설팅을 도입하여 <br />
                      다양한 추가 기능을 여유롭게 설치 할 수 있습니다. <br />
                      <span class="hashtag">#홈페이지 운영/관리 #브랜드 운영/관리
                      #쇼핑몰 운영/관리<span>
                    </p>
                  </li>
                  <li>
                    <div class="icon-box"><img src="<?php echo G5_IMG_URL ?>/ic_work_06.png" alt="work6"></div>
                    <h5>호스팅 서비스</h5>
                    <p>
                      합리적인 가격과 최적화된 보안 적용으로, <br />
                      최적의 상태를 유지하여, <br />
                      여러분의 비지니스가 온라인에 365일 제공됩니다. <br />
                      <span class="hashtag">#웹호스팅 #단독서버 호스팅 #클라우드 호스팅<span>
                    </p>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div id="Work" class="contents content4">
            <div class="inner">
              <h3 class="sub-tit">PORTFOLIO</h3>
              <div class="all-slider-wrap">
                <div class="work-slider mySwiper">
                  <div class="swiper-wrapper">
                    <div class="swiper-slide">
                      <div class="img"><img src="<?php echo G5_IMG_URL ?>/thumnail1.png" alt=""></div>
                    </div>
                    <div class="swiper-slide">
                      <div class="img"><img src="<?php echo G5_IMG_URL ?>/thumnail2.png" alt=""></div>
                    </div>
                    <div class="swiper-slide">
                      <div class="img"><img src="<?php echo G5_IMG_URL ?>/thumnail3.png" alt=""></div>
                    </div>
                    <div class="swiper-slide">
                      <div class="img"><img src="<?php echo G5_IMG_URL ?>/thumnail4.png" alt=""></div>
                    </div>
                    <div class="swiper-slide">
                      <div class="img"><img src="<?php echo G5_IMG_URL ?>/thumnail5.png" alt=""></div>
                    </div>
                    <div class="swiper-slide">
                      <div class="img"><img src="<?php echo G5_IMG_URL ?>/thumnail6.png" alt=""></div>
                    </div>
                    <div class="swiper-slide">
                      <div class="img"><img src="<?php echo G5_IMG_URL ?>/thumnail7.png" alt=""></div>
                    </div>
                    <!-- <div class="swiper-slide">
                      <div class="img"><img src="<?php echo G5_IMG_URL ?>/thumnail8.png" alt=""></div>
                    </div> -->
                    <div class="swiper-slide">
                      <div class="img"><img src="<?php echo G5_IMG_URL ?>/thumnail9.png" alt=""></div>
                    </div>
                    <div class="swiper-slide">
                      <div class="img"><img src="<?php echo G5_IMG_URL ?>/thumnail10.png" alt=""></div>
                    </div>
                    <div class="swiper-slide">
                      <div class="img"><img src="<?php echo G5_IMG_URL ?>/thumnail11.png" alt=""></div>
                    </div>
                  </div>
                  <div class="swiper-button-next"></div>
                  <div class="swiper-button-prev"></div>
                </div>
                <ul class="txt-slider">
                  <li>
                    <div class="txt">
                      <h4>삼양식품 60주년 프로모션<br /> "평범하게 위대하게"</h4>
                      <span class="highlighter">
                        <em>client   삼양식품</em>
                      </span>
                      <p>
                        삼양식품 60주년 프로모션 디자인/개발
                      </p>
                    </div>
                  </li>
                  <li>
                    <div class="txt">
                      <h4>대명지이씨 홈페이지 리뉴얼</h4>
                      <span class="highlighter">
                        <em>client   대명지이씨</em>
                      </span>
                      <p>
                        브랜딩 기획<br />
                        UI/UX 기획<br />
                        리뉴얼 작업
                      </p>
                    </div>
                  </li>
                  <li>
                    <div class="txt">
                      <h4>테고사이언스 홈페이지 고도화 개발</h4>
                      <span class="highlighter">
                        <em>client   테고사이언스</em>
                      </span>
                      <p>
                        홈페이지 기능 고도화 유지보수
                      </p>
                    </div>
                  </li>
                  <li>
                    <div class="txt">
                      <h4>사회복지법인 유니월드 홈페이지<br /> 유지보수 및 고도화 개발작업</h4>
                      <span class="highlighter">
                        <em>client   삼양식품</em>
                      </span>
                      <p>
                        갤러리게시판 개편<br />
                        컨텐츠 디자인 고도화<br />
                        기능 개발
                      </p>
                    </div>
                  </li>
                  <li>
                    <div class="txt">
                      <h4>문화지구 인사동 홈페이지 리뉴얼</h4>
                      <span class="highlighter">
                        <em>client   인사동</em>
                      </span>
                      <p>
                        브랜딩 기획<br />
                        UI/UX 기획<br />
                        리뉴얼 작업
                      </p>
                    </div>
                  </li>
                  <li>
                    <div class="txt">
                      <h4>하나로TNS 홈페이지 유지보수</h4>
                      <span class="highlighter">
                        <em>client   하나로TNS</em>
                      </span>
                      <p>
                        UI/UX 기획<br />
                        컨텐츠 디자인 개편작업
                      </p>
                    </div>
                  </li>
                  <li>
                    <div class="txt">
                      <h4>김안과병원 홈페이지 유지보수</h4>
                      <span class="highlighter">
                        <em>client   김안과병원</em>
                      </span>
                      <p>
                        5개 국어  홈페이지 수정작업<br />
                        기능 개발
                      </p>
                    </div>
                  </li>
                  <!-- <div>
                    <div class="txt">
                      <h4>온라인 쇼핑몰<br /> 니어바이</h4>
                      <p class="highlighter">
                        client   니어바이
                      </p>
                      <p>
                        로드샵 큐레이션 커머스 플랫폼 ,<br />
                        패션 로드샵과 쇼룸을 한 곳에  볼 수 있는 핫한 신상 인기 매장!
                      </p>
                    </div>
                  </div> -->
                  <li>
                    <div class="txt">
                      <h4>하나저축은행<br /> 서민금융 햇살론</h4>
                      <span class="highlighter">
                        <em>client   하나저축은행</em>
                      </span>
                      <p>
                        하나저축 은행 햇살론 간편 대출 상담신청프로모션 페이지 디자인
                      </p>
                    </div>
                  </li>
                  <li>
                    <div class="txt">
                      <h4>OK 저축은행<br /> 서민금융 햇살론</h4>
                      <span class="highlighter">
                        <em>client   OK 저축은행</em>
                      </span>
                      <p>
                        OK 저축 은행 햇살론 간편 대출 상담신청프로모션 페이지 디자인
                      </p>
                    </div>
                  </li>
                  <li>
                    <div class="txt">
                      <h4>로운식품<br /> 잉여농산물의 반란</h4>
                      <span class="highlighter">
                        <em>client   로운식품</em>
                      </span>
                      <p>
                        농가에서 상품성이 떨어진다는 이유 만으로 멀쩡한 농산물이 버려지고 있습니다.<br />
                        맛있는 농산물의 혁명
                      </p>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <footer class="footer">
            <div class="footer-inner clearfix">
              <h6 class="foot-tit">BLU-IT, Inc.</h6>
              <p class="foot-copyright">© 2021 BLU-IT. All rights reserved.</p>
              <ul class="info clearfix">
                <li>bluit@blu-it.co.kr</li>
                <li>서울시 강서구 공항대로212,문영퀸즈파크11차 1130호</li>
                <li>02-6227-1122</li>
              </ul>
            </div>
          </footer>
        </div>
      </div>
  </body>
</html>


<?php
// include_once(G5_THEME_PATH.'/tail.php');
?>
