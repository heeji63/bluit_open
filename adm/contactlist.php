<?php
$sub_menu = '300800';
include_once('./_common.php');

auth_check($auth[$sub_menu], "r");

// if( !isset($g5['content_table']) ){
//     die('<meta charset="utf-8">/data/dbconfig.php 파일에 <strong>$g5[\'content_table\'] = G5_TABLE_PREFIX.\'content\';</strong> 를 추가해 주세요.');
// }
//내용(컨텐츠)정보 테이블이 있는지 검사한다.
// if(!sql_query(" DESCRIBE {$g5['content_table']} ", false)) {
//     if(sql_query(" DESCRIBE {$g5['g5_shop_content_table']} ", false)) {
//         sql_query(" ALTER TABLE {$g5['g5_shop_content_table']} RENAME TO `{$g5['content_table']}` ;", false);
//     } else {
//        $query_cp = sql_query(" CREATE TABLE IF NOT EXISTS `{$g5['content_table']}` (
//                       `co_id` varchar(20) NOT NULL DEFAULT '',
//                       `co_html` tinyint(4) NOT NULL DEFAULT '0',
//                       `co_subject` varchar(255) NOT NULL DEFAULT '',
//                       `co_content` longtext NOT NULL,
//                       `co_hit` int(11) NOT NULL DEFAULT '0',
//                       `co_include_head` varchar(255) NOT NULL,
//                       `co_include_tail` varchar(255) NOT NULL,
//                       PRIMARY KEY (`co_id`)
//                     ) ENGINE=MyISAM DEFAULT CHARSET=utf8 ", true);
//
//         // 내용관리 생성
//         sql_query(" insert into `{$g5['content_table']}` set co_id = 'company', co_html = '1', co_subject = '회사소개', co_content= '<p align=center><b>회사소개에 대한 내용을 입력하십시오.</b></p>' ", false );
//         sql_query(" insert into `{$g5['content_table']}` set co_id = 'privacy', co_html = '1', co_subject = '개인정보 처리방침', co_content= '<p align=center><b>개인정보 처리방침에 대한 내용을 입력하십시오.</b></p>' ", false );
//         sql_query(" insert into `{$g5['content_table']}` set co_id = 'provision', co_html = '1', co_subject = '서비스 이용약관', co_content= '<p align=center><b>서비스 이용약관에 대한 내용을 입력하십시오.</b></p>' ", false );
//     }
// }

$g5['title'] = '문의관리';
include_once (G5_ADMIN_PATH.'/admin.head.php');

$searchKeyword = $_POST['searchKeyword'];
$stx = $_POST['stx'];

$sql_search_keyword = "";
if ($stx != "") {
  $sql_search_keyword = "  ";
}
// $sql_search = " where bs.del_yn = 'N'  {$sql_search_keyword} ";

$sql = " select count(*) as cnt  FROM {$g5['qa_content_table']} bs {$sql_search} ";

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
  <input type="hidden" name="stx" value="<?php echo $stx ?>">
  <input type="hidden" name="page" value="<?php echo $page ?>">
  <input type="hidden" name="searchKeyword" id="searchKeyword" value="<?php echo $searchKeyword ?>">
  <input type="hidden" name="token" value="">
  <input type="hidden" name="w" value="">
  <input type="hidden" name="qa_id" id="qa_id" value="">

  <label for="sfl" class="sound_only">검색대상</label>
  <select name="sfl" id="sfl">
      <option value="bo_subject">업장명</option>
  </select>
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

</script>

<?php
include_once (G5_ADMIN_PATH.'/admin.tail.php');
?>
