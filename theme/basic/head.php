<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/head.php');
    return;
}

include_once(G5_THEME_PATH.'/head.sub.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
include_once(G5_LIB_PATH.'/outlogin.lib.php');
include_once(G5_LIB_PATH.'/poll.lib.php');
include_once(G5_LIB_PATH.'/visit.lib.php');
include_once(G5_LIB_PATH.'/connect.lib.php');
include_once(G5_LIB_PATH.'/popular.lib.php');
?>

<!-- 상단 시작 { -->
<header id="header">
  <div class="header-inner clearfix">
    <h1 class="logo">
      <a href="index.html"><img src="images/logo.png" alt="blu-it logo"></a>
    </h1>
    <div class="gnb-wrap clearfix">
      <div class="gnb">
        <ul class="gnb-ul clearfix">
          <li><a href="<?php echo G5_THEME_PATH.'/contact.php' ?>">about</a></li>
          <li><a href="#Service">services</a></li>
          <li><a href="#Business">business</a></li>
          <li><a href="#Work">work</a></li>
          <!-- <li>
            <a href="#Work">
              <div id="app">
                {{ message }}
              </div>
            </a>
          </li> -->

          <!-- <li><a href="#">contact</a></li> -->
        </ul>
      </div>
      <button type="button" class="menu-btn"><img src="images/menu_btn.png" alt="menu"></button>
    </div>
  </div>
</header>
<div class="sitemap">
  <h1 class="logo">
    <a href="index.html"><img src="images/logo.png" alt="blu-it logo"></a>
  </h1>
  <button type="button" class="close-btn"><img src="images/menu_close_btn.png" alt="close"></button>
  <ul class="menu">
    <li><a href="#"><span class="highlighter">ABOUT</span></a></li>
    <li><a href="#Service"><span class="highlighter">SERVICES</span></a></li>
    <li><a href="#Business"><span class="highlighter">BUSINESS</span></a></li>
    <li><a href="#Work"><span class="highlighter">WORK</span></a></li>
    <!-- <li><a href="#">contact</a></li> -->
  </ul>
</div>
<!-- } 상단 끝 -->



<!-- 콘텐츠 시작 { -->
<!-- <div id="wrapper">
    <div id="container_wr">

    <div id="container"> -->
