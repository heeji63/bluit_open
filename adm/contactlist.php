<?php
$sub_menu = '300800';
include_once('./_common.php');

auth_check($auth[$sub_menu], "r");

$g5['title'] = '문의관리';
include_once (G5_ADMIN_PATH.'/admin.head.php');

$searchKeyword = $_POST['searchKeyword'];
$stx = $_POST['stx'];

$sql_search = "";
if ($stx != "") {
  $sql_search = " where  mb_id like '%{$stx}%'
                    or   qa_name like '%{$stx}%' ";
}

$sql = " select count(*) as cnt  FROM {$g5['qa_content_table']}  {$sql_search} ";

$row = sql_fetch($sql);
$total_count = $row['cnt'];

$rows = $config['cf_page_rows'];
$total_page  = ceil($total_count / $rows);  // 전체 페이지 계산
if ($page < 1) $page = 1; // 페이지가 없으면 첫 페이지 (1 페이지)
$from_record = ($page - 1) * $rows; // 시작 열을 구함

$sql =" select *  FROM {$g5['qa_content_table']} ";
$sql.="  {$sql_search}  ";
$sql.="   ORDER BY  qa_datetime  DESC  LIMIT $from_record, $rows ";

$result = sql_query($sql);
?>

<form name="fboardgrouplist" id="fboardgrouplist"  onsubmit="return fboardgrouplist_submit(this);"
  method="post" class="local_sch01 local_sch">
  <input type="hidden" name="sst" value="<?php echo $sst ?>">
  <input type="hidden" name="sod" value="<?php echo $sod ?>">
  <input type="hidden" name="sfl" value="<?php echo $sfl ?>">
  <input type="hidden" name="page" value="<?php echo $page ?>">
  <input type="hidden" name="searchKeyword" id="searchKeyword" value="<?php echo $searchKeyword ?>">
  <input type="hidden" name="token" value="">
  <input type="hidden" name="w" value="">
  <input type="hidden" name="qa_id" id="qa_id" value="">

  <label for="sfl" class="sound_only">검색대상</label>
  <!-- <select name="sfl" id="sfl">
      <option value="bo_subject">업장명</option>
  </select> -->
  <label for="stx" class="sound_only">검색어</label>
  <input type="text" name="stx" id="stx" class="frm_input" value="<?php echo $stx ?>">
  <a onclick="list();" class="btn btn_03">검색</a>

  <div class="tbl_head01 tbl_wrap">
    <table>
    <caption><?php echo $g5['title']; ?> 목록</caption>
    <thead>
    <tr>
        <th scope="col">회사명</th>
        <th scope="col">담당자</th>
        <th scope="col">Email</th>
        <th scope="col">연락처</th>
        <th scope="col">홈페이지 주소</th>
        <th scope="col">예산 금액</th>
        <th scope="col">필요한 서비스</th>
        <th scope="col">접수날짜</th>
        <th scope="col">관리</th>
    </tr>
    </thead>
    <tbody>
    <?php
    for ($i=0; $row=sql_fetch_array($result); $i++)
    {
        $bg = 'bg'.($i%2);
    ?>

    <tr class="<?php echo $bg; ?>">
      <td class="td_mng td_mng_s"><?php echo $row['mb_id'] ?></td>
      <td class="td_mng td_mng_s"><?php echo $row['qa_name'] ?></td>
      <td class="td_mng td_mng_s"><?php echo $row['qa_email'] ?></td>
      <td class="td_mng td_mng_s"><?php echo $row['qa_hp'] ?></td>
      <td class="td_mng td_mng_s"><?php echo $row['qa_1'] ?></td>
      <td class="td_mng td_mng_s"><?php echo $row['qa_2'] ?></td>
      <td class="td_mng td_mng_s"><?php echo $row['qa_3'] ?></td>
      <td class="td_mng td_mng_s"><?php echo $row['qa_datetime'] ?></td>
      <td headers="mb_list_mng" class="td_mng td_mng_s">
        <a onclick="view(<?php echo $row['qa_id'] ?>);" class="btn btn_03">상세</a>
      </td>
    </tr>

    <?php
        }
    if ($i == 0)
        echo '<tr><td colspan="'.$colspan.'" class="empty_table">자료가 없습니다.</td></tr>';
    ?>
      </table>
  </div>

  <!-- <div class="btn_fixed_top">
      <a href="./storeform.php" class="btn btn_01">상점 추가</a>
  </div> -->
</form>

<?php
$pagelist = get_paging(G5_IS_MOBILE ? $config['cf_mobile_pages'] : $config['cf_write_pages'], $page, $total_page, $_SERVER['SCRIPT_NAME'].'?'.$qstr.'&amp;page=');
echo $pagelist;
?>

<script>
function view(qa_id){
  var form = document.fboardgrouplist;
  form.qa_id.value = qa_id;
  form.action = "./contactform.php";
  form.submit();
}
function list(){
  var form = document.fboardgrouplist;
  form.action = "./contactlist.php";
  form.submit();
}

</script>

<?php
include_once (G5_ADMIN_PATH.'/admin.tail.php');
?>
