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
    $db= new Db();
    $sql="INSERT INTO Subject(subjectName, subjectDescribe, image, file, id) VALUES
    ('$this->subjectName','$this->subjectDescribe','$this->image','$this->file',$this->id);";
    $result=$db->query_execute($sql);
    return $result;
}
public static function list_Detail(){
    $db= new Db();
    $sql ="SELECT * FROM Subject";
    $result=$db->select_to_array($sql);
    return $result;
    }

}

?>