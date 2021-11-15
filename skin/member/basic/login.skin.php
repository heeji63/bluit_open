<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
// add_stylesheet('<link rel="stylesheet" href="'.$member_skin_url.'/style.css">', 0);
// add_stylesheet('<link rel="stylesheet" href="./plugins/fontawesome-free/css/all.min.css">', 0);
// add_stylesheet('<link rel="stylesheet" href="./plugins/icheck-bootstrap/icheck-bootstrap.min.css">', 0);
// add_stylesheet('<link rel="stylesheet" href="./dist/css/adminlte.min.css', 0);
?>
<!-- Font Awesome -->
<link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
<!-- icheck bootstrap -->
<link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
<!-- Theme style -->
<link rel="stylesheet" href="../../dist/css/adminlte.min.css">

<!-- 로그인 시작 { -->
<!-- <div id="mb_login" class="mbskin">
    <div class="mbskin_box">
        <h1><?php echo $g5['title'] ?></h1>
        <div class="mb_log_cate">
            <h2><span class="sound_only">회원</span>로그인</h2>
            <a href="<?php echo G5_BBS_URL ?>/register.php" class="join">회원가입</a>
        </div>
        <form name="flogin" action="<?php echo $login_action_url ?>" onsubmit="return flogin_submit(this);" method="post">
        <input type="hidden" name="url" value="<?php echo $login_url ?>">

        <fieldset id="login_fs">
            <legend>회원로그인</legend>
            <label for="login_id" class="sound_only">회원아이디<strong class="sound_only"> 필수</strong></label>
            <input type="text" name="mb_id" id="login_id" required class="frm_input required" size="20" maxLength="20" placeholder="아이디">
            <label for="login_pw" class="sound_only">비밀번호<strong class="sound_only"> 필수</strong></label>
            <input type="password" name="mb_password" id="login_pw" required class="frm_input required" size="20" maxLength="20" placeholder="비밀번호">
            <button type="submit" class="btn_submit">로그인</button>

            <div id="login_info">
                <div class="login_if_auto chk_box">
                    <input type="checkbox" name="auto_login" id="login_auto_login" class="selec_chk">
                    <label for="login_auto_login"><span></span> 자동로그인</label>
                </div>
                <div class="login_if_lpl">
                    <a href="<?php echo G5_BBS_URL ?>/password_lost.php" target="_blank" id="login_password_lost">정보찾기</a>
                </div>
            </div>
        </fieldset>
        </form>
        <?php @include_once(get_social_skin_path().'/social_login.skin.php'); // 소셜로그인 사용시 소셜로그인 버튼 ?>
    </div>
</div> -->

<style>
.card-primary.card-outline{border-top: none;}
.login-box{background: none; border: none;}
</style>
<body class="hold-transition login-page">
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <!-- <a href="../../index2.html" class="h1">관리자</a> -->
      <img src="../../img/logo.png" alt="블루잇 로고" >
    </div>
    <div class="card-body">
      <!-- <p class="login-box-msg">Sign in to start your session</p> -->

      <form name="flogin" action="<?php echo $login_action_url ?>" onsubmit="return flogin_submit(this);" method="post">
        <input type="hidden" name="url" value="<?php echo $login_url ?>">
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="mb_id" id="login_id" placeholder="아이디">
          <!-- <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div> -->
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="mb_password" id="login_pw" placeholder="비밀번호">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8" id="login_info">
            <div class="icheck-primary">
              <input type="checkbox" name="auto_login" id="login_auto_login" class="selec_chk">
              <label for="login_auto_login">자동로그인</label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">로그인</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <!--<p class="mb-1">
        <a href="<?php echo G5_BBS_URL ?>/register.php" class="join">회원가입</a>
      </p>
      <p class="mb-0">
        <a href="<?php echo G5_BBS_URL ?>/password_lost.php" target="_blank" id="login_password_lost">정보찾기</a>
      </p>-->
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

</body>
<!-- jQuery -->
<script src="./plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="./plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="./dist/js/adminlte.min.js"></script>
<script>
jQuery(function($){
    $("#login_auto_login").click(function(){
        if (this.checked) {
            this.checked = confirm("자동로그인을 사용하시면 다음부터 회원아이디와 비밀번호를 입력하실 필요가 없습니다.\n\n공공장소에서는 개인정보가 유출될 수 있으니 사용을 자제하여 주십시오.\n\n자동로그인을 사용하시겠습니까?");
        }
    });
});

function flogin_submit(f)
{
    if( $( document.body ).triggerHandler( 'login_sumit', [f, 'flogin'] ) !== false ){
        return true;
    }
    return false;
}
</script>
<!-- } 로그인 끝 -->
