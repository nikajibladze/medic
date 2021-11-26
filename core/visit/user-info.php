<?php
if (isset($_POST["id"])) {
    $id = $_POST["id"];
    include "../config.php";
    $db = getDB();
    $statement = $db->prepare("SELECT * FROM med_visits where id=:id");
    $statement->bindValue("id", $id, PDO::PARAM_INT);
    $statement->execute();

    while ($users = $statement->fetch()) {
        $data["name"] = $users["first_name"];
        $data["lastname"] = $users["last_name"];
        $data["personal"] = $users["personal_no"];
        $data["doctor"] = $users["doctor_name"];
        $data["visit_number"] = $users["id"];
        $data["doctor_id"] = intval($users["doctor_id"]);
        $data["reg_date"] = date("Y-m-d", strtotime($users["reg_date"]));
        $data["condition_type"] = $users["condition_type"];
        $data["history_id"] = $users["history_id"];
    }
    $statement_history = $db->prepare("SELECT id,rhesus,birth_date FROM patient_history where id=:history_id");
    $statement_history->bindValue("history_id", $data["history_id"], PDO::PARAM_INT);
    $statement_history->execute();
    while ($history = $statement_history->fetch()) {
        $data["gender"] = intval($history["gender"]);
        $data["rhesus"] = intval($history["rhesus"]);
        $data["birth_date"] = $history["birth_date"];

    }
    echo json_encode($data);
} else {
    die;
}
