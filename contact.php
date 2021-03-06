<!DOCTYPE html>
<html lang="ko" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title> BLU-IT - IT는 신뢰가 기본.</title>
    <meta name="viewport"content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1"/>
    <meta name="naver-site-verification" content="9df6f17a070980f60559eeef9f8d9d5967aa1970" />
    <meta name="title" content="블루잇" />
    <meta name="description" content="블루잇은 모든 사업분야의 UX/UI 구축, 유지보수, 홈페이지 운영까지 모든 IT서비스를 맞춤 제공하는 정직한 디지털 에이전시입니다.">
    <meta name="keywords" content="웹에이전시, 유지보수, 홈페이지 운영, 홈페이지 유지보수, 시스템 구축, 맞춤 개발, UX/UI, 블루잇">
    <meta property="og:type" content="website" />
    <meta property="og:title" content="블루잇" />
    <meta property="og:url" content="http://www.blu-it.co.kr" />
    <meta property="og:description" content="블루잇은 모든 사업분야의 UX/UI 구축, 유지보수, 홈페이지 운영까지 모든 IT서비스를 맞춤 제공하는 정직한 디지털 에이전시입니다." />
    <meta property="og:image" content="../img/logo.png" />
    <link rel="stylesheet" href="../css/swiper-bundle.min.css">
    <link rel="stylesheet" href="../css/default_custom.css">
    <link rel="stylesheet" href="../css/content.css">
    <link rel="stylesheet" href="../css/responsive.css">
    <link rel="canonical" href="http://www.blu-it.co.kr">
    <script src="../js/jquery-1.12.4.min.js" type="text/javascript"></script>
    <script src="../js/swiper-bundle.min.js" type="text/javascript"></script>
    <script src="../js/header.js" type="text/javascript"></script>
    <!-- <script src="../js/main.js" type="text/javascript"></script> -->
  </head>
  <body>
    <header id="header">
      <div class="header-inner clearfix">
        <h1 class="logo">
          <a href="index.html"><img src="../img/logo.png" alt="blu-it logo"></a>
        </h1>
        <div class="gnb-wrap clearfix">
          <!-- <div class="gnb">
            <ul class="gnb-ul clearfix">
              <li><a href="#About">about</a></li>
              <li><a href="#Service">services</a></li>
              <li><a href="#Business">business</a></li>
              <li><a href="#Work">work</a></li>
              <li><a href="#">contact</a></li>
            </ul>
          </div> -->
          <button type="button" class="menu-btn"><img src="../img/menu_btn.png" alt="menu"></button>
        </div>
      </div>
    </header>
    <div class="sitemap">
      <h1 class="logo">
        <a href="index.html"><img src="../img/logo.png" alt="blu-it logo"></a>
      </h1>
      <button type="button" class="close-btn"><img src="../img/menu_close_btn.png" alt="close"></button>
      <ul class="menu">
        <li><a href="../index.html"><span class="highlighter">ABOUT</span></a></li>
        <li><a href="../index.html#Service"><span class="highlighter">SERVICES</span></a></li>
        <li><a href="../index.html#Business"><span class="highlighter">BUSINESS</span></a></li>
        <li><a href="../index.html#Work"><span class="highlighter">WORK</span></a></li>
        <!-- <li><a href="#">contact</a></li> -->
      </ul>
    </div>
  <form name="fwrite" id="fwrite" method="post" enctype="multipart/form-data" autocomplete="off">
    <input type="hidden" name="w" value="<?php echo $w ?>">
    <input type="hidden" name="qa_id" value="<?php echo $qa_id ?>">
    <input type="hidden" name="sca" value="<?php echo $sca ?>">
    <input type="hidden" name="stx" value="<?php echo $stx ?>">
    <input type="hidden" name="page" value="<?php echo $page ?>">
    <input type="hidden" name="qa_html" value="1">
    <div id="contact" class="contents">
      <div class="inner">
        <div class="sub-tit-wrap">
          <h3 class="sub-tit">
            <span class="highlighter">블루잇에 의뢰할 프로젝트가 있으신가요?</span>
          </h3>
          <p>
            우리와 함께 성장하고 싶으신가요? 블루잇은 항상 열려있습니다.<br />
            전화, 팩스, 메일로 얼마든 문의해 주세요.
          </p>
        </div>
        <div class="contactWrapAll">
          <form action="">
            <div class="contact-wrap-01">
              <div class="items items-3">
                <h4>회사명</h4>
                <input type="text" id="mb_id" name="mb_id" placeholder="회사명을 입력해주세요">
              </div>
              <div class="items items-3">
                <h4>담당자</h4>
                <input type="text" id="qa_name" name="qa_name" placeholder="담당자를 입력해주세요">
              </div>
              <div class="items items-3">
                <h4>Email</h4>
                <input type="text" id="qa_email" name="qa_email" placeholder="이메일을 입력해주세요">
              </div>
              <div class="items items-3">
                <h4>연락처</h4>
                <input type="text" id="qa_hp" name="qa_hp" placeholder="연락처를 입력해주세요">
              </div>
            </div>
            <div class="contact-wrap-02">
              <div class="items items-6">
                <h4>홈페이지 주소</h4>
                <input type="text" id="qa_1" name="qa_1" placeholder="홈페이지 주소를 입력해주세요">
              </div>
              <div class="items items-3">
                <h4>예산 금액</h4>
                <div class="price-select-wrap">
                  <select class="price-select" name="qa_2">
                    <option value="1000~2000">1000~2000</option>
                    <option value="2000~5000">2000~5000</option>
                    <option value="5000~">5000~</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="contact-wrap-02">
              <div class="items items-12">
                <h4>필요한 서비스</h4>
                <ul class="service-ul">
                  <li><input id="serv1" type="radio" value="웹사이트 구축" name="qa_3" checked><label for="serv1">웹사이트 구축</label></li>
                  <li><input id="serv2" type="radio" value="웹사이트 운영" name="qa_3"><label for="serv2">웹사이트 운영</label></li>
                  <li><input id="serv3" type="radio" value="웹사이트 유지보수" name="qa_3"><label for="serv3">웹사이트 유지보수</label></li>
                  <li><input id="serv4" type="radio" value="APP 제작" name="qa_3"><label for="serv4">APP 제작</label></li>
                  <li><input id="serv5" type="radio" value="솔루션 제작" name="qa_3"><label for="serv5">솔루션 제작</label></li>
                  <li><input id="serv6" type="radio" value="호스팅" name="qa_3"><label for="serv6">호스팅</label></li>
                  <li><input id="serv7" type="radio" value="온라인 마케팅" name="qa_3"><label for="serv7">온라인 마케팅</label></li>
                </ul>
              </div>
            </div>
            <div class="contact-wrap-02">
              <div class="items items-12">
                <h4>어떻게 도와드리면 될까요?</h4>
                <textarea name="qa_content" rows="20"  placeholder="문의 사항을 입력해 주세요"></textarea>
              </div>
            </div>
            <div class="info-prov">
              <input id="prov" type="checkbox" name="" value=""><label for="prov"><span>개인정보 보호정책</span>에 동의합니다.</label>
            </div>
            <div class="btn-wrap">
              <button type="button" id="btn_submit" onclick="fwrite_submit();"
                accesskey="s" class="send-btn">보내기</button>
            </div>
          </form>
        </div>
      </div>
      <div class="bg-line"></div>
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
  </form>
    <footer class="footer">
      <div class="footer-inner clearfix">
        <h6 class="foot-tit">BLU-IT, Inc.</h6>
        <p class="foot-copyright">© 2021 BLU-IT. All rights reserved.</p>
        <ul class="info clearfix">
          <li>서울시 강서구 공항대로212,문영퀸즈파크11차 1130호</li>
          <li>02-6227-1122</li>
          <li>bluit@blu-it.co.kr</li>
        </ul>
      </div>
    </footer>
    <script>

        function fwrite_submit(f)
        {
          var mb_id = $("#mb_id").val();
          var qa_name = $("#qa_name").val();
          var qa_email = $("#qa_email").val();
          var qa_hp = $("#qa_hp").val();
          var qa_content = $("#qa_content").val();
          var qa_1 = $("#qa_1").val();
          var qa_2 = $("#qa_2").val();
          var qa_3 = $("#qa_3").val();
          var params = {mb_id:mb_id, qa_name:qa_name
                      , qa_email:qa_email, qa_hp:qa_hp
                      , qa_content:qa_content, qa_1:qa_1
                      , qa_2:qa_2, qa_3:qa_3};
          $.ajax({
              url: "./bbs/set_contact.php",
              type : "post",
          		data : params,
              async: true,
              cache: false,
              error : function(xhr, status) {
              // console.log(xhr, status);
              },
              success: function(data) {
                alert('접수되었습니다.');
              }
          });
            // var subject = "";
            // var content = "";
            // $.ajax({
            //     url: g5_bbs_url+"/ajax.filter.php",
            //     type: "POST",
            //     data: {
            //         "subject": f.qa_subject.value,
            //         "content": f.qa_content.value
            //     },
            //     dataType: "json",
            //     async: false,
            //     cache: false,
            //     success: function(data, textStatus) {
            //         subject = data.subject;
            //         content = data.content;
            //     }
            // });
            //
            // if (subject) {
            //     alert("제목에 금지단어('"+subject+"')가 포함되어있습니다");
            //     f.qa_subject.focus();
            //     return false;
            // }
            //
            // if (content) {
            //     alert("내용에 금지단어('"+content+"')가 포함되어있습니다");
            //     if (typeof(ed_qa_content) != "undefined")
            //         ed_qa_content.returnFalse();
            //     else
            //         f.qa_content.focus();
            //     return false;
            // }
            //
            // document.getElementById("btn_submit").disabled = "disabled";
            // alert('접수되었습니다.');
            // return true;
        }
    </script>
  </body>
</html>
