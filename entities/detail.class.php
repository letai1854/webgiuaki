<?php 
require_once("config/db.class.php");
class Detail{



public $subjectName;
public $subjectDescribe;
public $image;
public $file;
public $id;

public function __construct( $subjectName,$subjectDescribe,$image,$file,$id){
$this->subjectName=$subjectName;
$this->subjectDescribe=$subjectDescribe;
$this->image=$image;
$this->file=$file;
$this->id=$id;
}
public function save(){
    $pic_temp = $this->image['tmp_name'];
    $user_pic = $this->image['name'];
    $picpath = "uploads/" . $user_pic;
    if (move_uploaded_file($pic_temp, $picpath) == false) {
        return false;
    }
    $file_temp = $this->file['tmp_name'];
    $user_file = $this->file['name'];
    $filepath = "uploads/" . $user_file;
    if (move_uploaded_file($file_temp, $filepath) == false) {
        return false;
    }
    $db= new Db();
    $sql="INSERT INTO Subject(subjectName, subjectDescribe, image, file, id) VALUES
    ('$this->subjectName','$this->subjectDescribe','$picpath','$filepath',$this->id);";
    $result=$db->query_execute($sql);
    return $result;
}
public static function list_Detail(){
    $db= new Db();
    $sql ="SELECT * FROM Subject";
    $result=$db->select_to_array($sql);
    return $result;
    }

    public static function delete_Subject($id){
        $db= new Db();
        $sql ="DELETE  FROM Subject Where subjectCode='$id'";
        $result=$db->query_execute($sql);
    return $result;
    }
    public static function list_Subject_Update($id){
        $db= new Db();
        $sql ="SELECT * FROM Subject Where subjectCode=$id";
        $result=$db->select_to_array($sql);
        return $result;
      
        }   



public static function update_subject($subjectCode, $subjectName, $subjectDescribe, $picture, $file)
{
    if ($picture['name'] != "") {
        $pic_temp = $picture['tmp_name'];
        $user_pic = $picture['name'];
        $picpath = "uploads/" . $user_pic;
        if (move_uploaded_file($pic_temp, $picpath) == false) {
            return false;
        }
    }
    if ($file['name'] != "") {
        $file_temp = $file['tmp_name'];
        $user_file = $file['name'];
        $filepath = "uploads/" . $user_file;
        if (move_uploaded_file($file_temp, $filepath) == false) {
            return false;
        }
    }
    $sql = "CALL UpdateSubject('$subjectCode','$subjectName','$subjectDescribe',' $picpath',' $filepath')";

try{
    $db = new Db();
    $db->query_execute(($sql));
    return true;
}
catch(PDOException $e){
    return false;
}

}
}

?>