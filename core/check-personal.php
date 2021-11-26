<?php 
if(isset($_POST["personal_id"])){
    $personal_id = $_POST["personal_id"];
include("config.php");
$db=getDB();
$data = array();
$statement=$db->prepare("SELECT * FROM patient_history where personal_no=:personal");
$statement->bindValue("personal",$personal_id, PDO::PARAM_INT);
$statement->execute();
$user = $statement->rowCount();
echo $user;
}else {
    die;
}
?>