<?php 
if(isset($_POST["personal_id"])){
$personal_id = $_POST["personal_id"];
include("config.php");
$db=getDB();
$statement=$db->prepare("SELECT * FROM patient_history where personal_no=:personal_id");
$statement->bindValue("personal_id", $personal_id, PDO::PARAM_INT);
$statement->execute();
$data= array();
while($users = $statement->fetch()){
    $data["name"] = $users["first_name"];
    $data["lastname"] = $users["last_name"];
    $data["personal"] = $users["personal_no"];
    $data["reg_date"] = date("Y-m-d", strtotime($users["reg_date"]));
    $data["visit_number"] = $users["id"];
    $data["id"] = $users["id"];
}
echo json_encode($data);
}else{
    die;
}
?>