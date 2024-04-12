<?php
require_once('config/db.class.php');
function get_username($id, $code)
{
    try {
        $db = new Db();
    $sql = "CALL get_username('$id','$code');";
    $result = $db->select_to_array($sql);
    $result = $result[0]['username'];
    return $result;
    }
    catch (PDOException $e) {
        return false;
    }
}
