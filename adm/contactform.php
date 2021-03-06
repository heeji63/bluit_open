<?php
$sub_menu = '300800';
include_once('./_common.php');

// auth_check_menu($auth, $sub_menu, "w");

$w = isset($_POST['w']) ? strip_tags($_POST['w']) : '';
$qa_id = isset($_POST['qa_id']) ? strip_tags($_POST['qa_id']) : '';

if ($w == "") {$w = $_GET['w'];}
if ($qa_id == "") {$qa_id = $_GET['qa_id'];}

$sql = " select * from {$g5['qa_content_table']} where qa_id = ".$qa_id;
$co = sql_fetch($sql);
$g5['title'] = '문의상세';
include_once (G5_ADMIN_PATH.'/admin.head.php');
?>

<form name="frmcontentform"  method="post" enctype="MULTIPART/FORM-DATA" >
<input type="hidden" name="w" id="w" value="<?php echo $w; ?>">
<input type="hidden" name="co_html" value="1">
<input type="hidden" name="qa_id" id="qa_id" value="<?php echo $qa_id ?>">

<div class="tbl_frm01 tbl_wrap">
    <table>
    <caption><?php echo $g5['title']; ?> 목록</caption>
    <colgroup>
        <col class="grid_4">
        <col>
    </colgroup>
    <tbody>
    <tr>
        <th scope="row">
          <label for="mb_id">회사명</label>
        </th>
        <td>
          <input type="text" name="mb_id" value="<?php echo $co['mb_id']; ?>" id="mb_id" class="frm_input" size="80">
        </td>
    </tr>
    <tr>
        <th scope="row">
          <label for="qa_name">담당자</label>
        </th>
        <td>
          <input type="text" name="qa_name" value="<?php echo $co['qa_name']; ?>" id="qa_name" class="frm_input" size="80">
        </td>
    </tr>
    <tr>
        <th scope="row">
          <label for="qa_email">이메일</label>
        </th>
        <td>
          <input type="text" name="qa_email" value="<?php echo $co['qa_email']; ?>" id="qa_email" class="frm_input" size="80">
        </td>
    </tr>
    <tr>
        <th scope="row">
          <label for="qa_hp">연락처</label>
        </th>
        <td>
          <input type="text" name="qa_hp" value="<?php echo $co['qa_hp']; ?>" id="qa_hp" class="frm_input" size="80">
        </td>
    </tr>
    <tr>
        <th scope="row">
          <label for="qa_content">어떻게</label>
        </th>
        <td>
          <textarea type="text" name="qa_content" id="qa_content" class="frm_input"><?php echo $co['qa_content']; ?></textarea>
        </td>
    </tr>
    <tr>
        <th scope="row">
          <label for="qa_1">홈페이지주소</label>
        </th>
        <td>
          <input type="text" name="qa_1" value="<?php echo $co['qa_1']; ?>" id="qa_1" class="frm_input" size="80">
        </td>
    </tr>
    <tr>
        <th scope="row">
          <label for="qa_2">예산금액</label>
        </th>
        <td>
          <select name="qa_2" id="qa_2">
            <option <?if($co['qa_2'] == "1000~2000") {echo "selected";}?> value="1000~2000">1000~2000</option>
            <option <?if($co['qa_2'] == "2000~5000") {echo "selected";}?> value="2000~5000">2000~5000</option>
            <option <?if($co['qa_2'] == "5000~") {echo "selected";} ?> value="5000~">5000~</option>
          </select>
        </td>
    </tr>
    <tr>
        <th scope="row">
          <label for="qa_3">필요한 서비스</label>
        </th>
        <td>
          <li><input type="radio" <?php if($co['qa_3'] == "웹사이트 구축") {echo "checked";} ?> value="웹사이트 구축" name="qa_3"><label for="serv1">웹사이트 구축</label></li>
          <li><input type="radio" <?php if($co['qa_3'] == "웹사이트 운영") {echo "checked";} ?> value="웹사이트 운영" name="qa_3"><label for="serv2">웹사이트 운영</label></li>
          <li><input type="radio" <?php if($co['qa_3'] == "웹사이트 유지보수") {echo "checked";} ?> value="웹사이트 유지보수" name="qa_3"><label for="serv3">웹사이트 유지보수</label></li>
          <li><input type="radio" <?php if($co['qa_3'] == "APP 제작") {echo "checked";} ?> value="APP 제작" name="qa_3"><label for="serv4">APP 제작</label></li>
          <li><input type="radio" <?php if($co['qa_3'] == "솔루션 제작") {echo "checked";} ?> value="솔루션 제작" name="qa_3"><label for="serv5">솔루션 제작</label></li>
          <li><input type="radio" <?php if($co['qa_3'] == "호스팅") {echo "checked";} ?> value="호스팅" name="qa_3"><label for="serv6">호스팅</label></li>
          <li><input type="radio" <?php if($co['qa_3'] == "온라인 마케팅") {echo "checked";} ?> value="온라인 마케팅" name="qa_3"><label for="serv7">온라인 마케팅</label></li>
        </td>
    </tr>
    <tr>
        <th scope="row">
          <label for="qa_datetime">접수 날짜</label>
        </th>
        <td>
          <input type="text" name="qa_datetime" value="<?php echo $co['qa_datetime']; ?>" readonly
          id="qa_datetime" class="frm_input" size="80">
        </td>
    </tr>
    <tr>
        <th scope="row">
          <label for="qa_datetime">여분필드</label>
        </th>
        <td><textarea type="text" name="qa_4" id="qa_4" class="frm_input"><?php echo $co['qa_4']; ?></textarea></td>
    </tr>

    </tbody>
    </table>
</div>

<div class="btn_fixed_top">
    <a onclick="list();" class="btn btn_02">목록</a>
    <a onclick="set();" class="btn btn_03">수정</a>
    <!-- <input type="submit" value="확인" class="btn btn_submit" accesskey="s"> -->
</div>

</form>

<?php
// [KVE-2018-2089] 취약점 으로 인해 파일 경로 수정시에만 자동등록방지 코드 사용
?>
<script>
function list(){
  var form = document.frmcontentform;
  form.action = "./contactlist.php";
  form.submit();
}
function set(){
  var mb_id = $("#mb_id").val();
  var qa_name = $("#qa_name").val();
  var qa_email = $("#qa_email").val();
  var qa_hp = $("#qa_hp").val();
  var qa_content = $("#qa_content").val();
  var qa_1 = $("#qa_1").val();
  var qa_2 = $("#qa_2").val();
  var qa_3 = $("input[name='qa_3']:checked").val();
  var qa_4 = $("#qa_4").val();
  var qa_id = $("#qa_id").val();
  var params = {mb_id:mb_id, qa_name:qa_name
              , qa_email:qa_email, qa_hp:qa_hp
              , qa_content:qa_content, qa_1:qa_1
              , qa_2:qa_2, qa_3:qa_3, qa_4:qa_4
              , qa_id:qa_id};
  $.ajax({
      url: "./set_contact_adm.php",
      type : "post",
      data : params,
      async: true,
      cache: false,
      error : function(xhr, status) {
      // console.log(xhr, status);
      },
      success: function(data) {
        alert('수정 되었습니다.');
      }
  });
}

</script>

<?php
include_once (G5_ADMIN_PATH.'/admin.tail.php');
