<?php
require_once('send_mail.php');
require_once('config/db.class.php');
function reset_password($username)
{
  $code = random_int(1000, 9999);
  $id = substr(md5($username), 0, 7);
  try {
    $db = new Db();
    $sql = "CALL checkRevival('$username', '$id', '$code')";
    $db->query_execute($sql);
  } catch (Exception $e) {
    return false;
  }
$halfmail1 = file_get_contents('halfmail1.html');
$halfmail2 = file_get_contents('halfmail2.html');



$message = file_get_contents('halfmail1.html') . 'http://localhost/WebGiangVien/changePassWord.php' . '?id=' . $id . '&code=' . $code . file_get_contents('halfmail2.html');
$subject = "RECOVERY PASSWORD FOR WEBSITE";
  mail_service::send_mail($username, $subject, $message);
  return true;
}
