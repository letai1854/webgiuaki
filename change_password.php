<?php
    require_once('config/db.class.php');
    function change_password($username, $password){
    try{
        $db = new Db();
        $sql = "CALL changePass('$username', '$password');";
        $result = $db->query_execute($sql);
        if($result == true){
            $db->query_execute("UPDATE ReservePassword SET checked = 1 WHERE username = '$username';");
        }
        return true;
    }
    catch(Exception $e){
        return false;
    }
}
?>