<?php
  $sub_menu = '300800';
  include_once('./_common.php');
  //
  $w = isset($_POST['w']) ? strip_tags($_POST['w']) : '';
  $mb_id = isset($_POST['mb_id']) ? strip_tags($_POST['mb_id']) : '';
  $qa_name = isset($_POST['qa_name']) ? strip_tags($_POST['qa_name']) : '';
  $qa_email = isset($_POST['qa_email']) ? strip_tags($_POST['qa_email']) : '';
  $qa_hp = isset($_POST['qa_hp']) ? strip_tags($_POST['qa_hp']) : '';
  $qa_1 = isset($_POST['qa_1']) ? strip_tags($_POST['qa_1']) : '';
  $qa_2 = isset($_POST['qa_2']) ? strip_tags($_POST['qa_2']) : '';
  $qa_3 = isset($_POST['qa_3']) ? strip_tags($_POST['qa_3']) : '';
  $qa_4 = isset($_POST['qa_4']) ? strip_tags($_POST['qa_4']) : '';
  $qa_id = isset($_POST['qa_id']) ? strip_tags($_POST['qa_id']) : '';

  // e-mail 체크
  // $qa_email = '';
  // if(isset($_POST['qa_email']) && $_POST['qa_email'])
  //     $qa_email = get_email_address(trim($_POST['qa_email']));
  $qa_subject = '';
  if (isset($_POST['qa_subject'])) {
      $qa_subject = substr(trim($_POST['qa_subject']),0,255);
      $qa_subject = preg_replace("#[\\\]+$#", "", $qa_subject);
  }
  $qa_content = '';
  if (isset($_POST['qa_content'])) {
      $qa_content = substr(trim($_POST['qa_content']),0,65536);
      $qa_content = preg_replace("#[\\\]+$#", "", $qa_content);
  }
  $row = sql_fetch(" select MIN(qa_num) as min_qa_num from {$g5['qa_content_table']} ");
  $qa_num = $row['min_qa_num'] - 1;

  $sql = " update {$g5['qa_content_table']}
              set qa_name        = '$qa_name',
                  qa_email        = '$qa_email',
                  qa_hp           = '$qa_hp',
                  mb_id           = '$mb_id',
                  qa_content      = '$qa_content',
                  qa_1            = '$qa_1',
                  qa_2            = '$qa_2',
                  qa_3            = '$qa_3',
                  qa_4            = '$qa_4'
            where qa_id = {$qa_id}";

  sql_query($sql);

  $qa_id = sql_insert_id();

  if($w == 'r' && $write['qa_related']) {
      $qa_related = $write['qa_related'];
  } else {
      $qa_related = $qa_id;
  }

  $sql = " update {$g5['qa_content_table']}
              set qa_parent   = '$qa_id',
                  qa_related  = '$qa_related'
              where qa_id = '$qa_id' ";
  sql_query($sql);

  // $result_url = G5_BBS_URL.'/contact.php';
  // alert('접수 되었습니다.');
  // goto_url($result_url);
  // $result = sql_query($sql);
  // $row=sql_fetch_array($result);
  // if (count($row) > 0) {
  //   echo "success";
  // }else {
  //   echo "error";
  // }

?>
