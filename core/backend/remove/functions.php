<?php
function removeNoseFile()
{
    $response = array();
    if (isset($_POST["id"]) && isset($_POST["file_id"])) {
        $db = getDB();
        $id = $_POST["file_id"];
        $statement = $db->prepare("SELECT * FROM patient_throat_ear_nose_files where id=:id");
        $statement->bindValue("id", $id);
        $statement->execute();
        $file = $statement->fetch();
        if ($file["id"]) {
            $file_id = $file["id"];
            $filename = $file["file_storage_name"];
            $deletefile = $db->prepare("DELETE FROM patient_throat_ear_nose_files where id=:file_id");
            $deletefile->bindParam("file_id", $file_id, PDO::PARAM_INT);
            $deletefile->execute();
            $abspath = $_SERVER['DOCUMENT_ROOT'];
            unlink($abspath . '/' . $filename);
            $response = array("status" => 200, "message" => "ფაილი წაშლილია");
            echo json_encode($response);

        } else {
            $response = array("status" => 404, "message" => "ფაილი არ არსებობს");
            echo json_encode($response);
        }

    }
}
function removeCureFile()
{
    $response = array();
    if (isset($_POST["id"]) && isset($_POST["file_id"])) {
        $db = getDB();
        $id = $_POST["file_id"];
        $statement = $db->prepare("SELECT * FROM patient_cure_files where id=:id");
        $statement->bindValue("id", $id);
        $statement->execute();
        $file = $statement->fetch();
        if ($file["id"]) {
            $file_id = $file["id"];
            $filename = $file["file_storage_name"];
            $deletefile = $db->prepare("DELETE FROM patient_cure_files where id=:file_id");
            $deletefile->bindParam("file_id", $file_id, PDO::PARAM_INT);
            $deletefile->execute();
            $abspath = $_SERVER['DOCUMENT_ROOT'];
            unlink($abspath . '/' . $filename);
            $response = array("status" => 200, "message" => "ფაილი წაშლილია");
            echo json_encode($response);

        } else {
            $response = array("status" => 404, "message" => "ფაილი არ არსებობს");
            echo json_encode($response);
        }

    }
}

function removePsyFile()
{
    $response = array();
    if (isset($_POST["id"]) && isset($_POST["file_id"])) {
        $db = getDB();
        $id = $_POST["file_id"];
        $statement = $db->prepare("SELECT * FROM patient_psychological_examination_files where id=:id");
        $statement->bindValue("id", $id);
        $statement->execute();
        $file = $statement->fetch();
        if ($file["id"]) {
            $file_id = $file["id"];
            $filename = $file["file_storage_name"];
            $deletefile = $db->prepare("DELETE FROM patient_psychological_examination_files where id=:file_id");
            $deletefile->bindParam("file_id", $file_id, PDO::PARAM_INT);
            $deletefile->execute();
            $abspath = $_SERVER['DOCUMENT_ROOT'];
            unlink($abspath . '/' . $filename);
            $response = array("status" => 200, "message" => "ფაილი წაშლილია");
            echo json_encode($response);

        } else {
            $response = array("status" => 404, "message" => "ფაილი არ არსებობს");
            echo json_encode($response);
        }

    }
}

function removeOperationsFile()
{
    $response = array();
    if (isset($_POST["id"]) && isset($_POST["file_id"])) {
        $db = getDB();
        $id = $_POST["file_id"];
        $statement = $db->prepare("SELECT * FROM patient_operations_files where id=:id");
        $statement->bindValue("id", $id);
        $statement->execute();
        $file = $statement->fetch();
        if ($file["id"]) {
            $file_id = $file["id"];
            $filename = $file["file_storage_name"];
            $deletefile = $db->prepare("DELETE FROM patient_operations_files where id=:file_id");
            $deletefile->bindParam("file_id", $file_id, PDO::PARAM_INT);
            $deletefile->execute();
            $abspath = $_SERVER['DOCUMENT_ROOT'];
            unlink($abspath . '/' . $filename);
            $response = array("status" => 200, "message" => "ფაილი წაშლილია");
            echo json_encode($response);

        } else {
            $response = array("status" => 404, "message" => "ფაილი არ არსებობს");
            echo json_encode($response);
        }

    }
}

function removeImmunizationFile()
{
    $response = array();
    if (isset($_POST["id"]) && isset($_POST["file_id"])) {
        $db = getDB();
        $id = $_POST["file_id"];
        $statement = $db->prepare("SELECT * FROM patient_immunization where id=:id");
        $statement->bindValue("id", $id);
        $statement->execute();
        $file = $statement->fetch();
        if ($file["id"]) {
            $file_id = $file["id"];
            $filename = $file["file_storage_name"];
            $deletefile = $db->prepare("DELETE FROM patient_immunization where id=:file_id");
            $deletefile->bindParam("file_id", $file_id, PDO::PARAM_INT);
            $deletefile->execute();
            $abspath = $_SERVER['DOCUMENT_ROOT'];
            unlink($abspath . '/' . $filename);
            $response = array("status" => 200, "message" => "ფაილი წაშლილია");
            echo json_encode($response);

        } else {
            $response = array("status" => 404, "message" => "ფაილი არ არსებობს");
            echo json_encode($response);
        }

    }
}

function removeMedicationsFile()
{
    $response = array();
    if (isset($_POST["id"]) && isset($_POST["file_id"])) {
        $db = getDB();
        $id = $_POST["file_id"];
        $statement = $db->prepare("SELECT * FROM patient_medications_files where id=:id");
        $statement->bindValue("id", $id);
        $statement->execute();
        $file = $statement->fetch();
        if ($file["id"]) {
            $file_id = $file["id"];
            $filename = $file["file_storage_name"];
            $deletefile = $db->prepare("DELETE FROM patient_medications_files where id=:file_id");
            $deletefile->bindParam("file_id", $file_id, PDO::PARAM_INT);
            $deletefile->execute();
            $abspath = $_SERVER['DOCUMENT_ROOT'];
            unlink($abspath . '/' . $filename);
            $response = array("status" => 200, "message" => "ფაილი წაშლილია");
            echo json_encode($response);

        } else {
            $response = array("status" => 404, "message" => "ფაილი არ არსებობს");
            echo json_encode($response);
        }

    }
}

function removeDeseaseFile()
{
    $response = array();
    if (isset($_POST["id"]) && isset($_POST["file_id"])) {
        $db = getDB();
        $id = $_POST["file_id"];
        $statement = $db->prepare("SELECT * FROM patient_disease_diagnosis_info_files where id=:id");
        $statement->bindValue("id", $id);
        $statement->execute();
        $file = $statement->fetch();
        if ($file["id"]) {
            $file_id = $file["id"];
            $filename = $file["file_storage_name"];
            $deletefile = $db->prepare("DELETE FROM patient_disease_diagnosis_info_files where id=:file_id");
            $deletefile->bindParam("file_id", $file_id, PDO::PARAM_INT);
            $deletefile->execute();
            $abspath = $_SERVER['DOCUMENT_ROOT'];
            unlink($abspath . '/' . $filename);
            $response = array("status" => 200, "message" => "ფაილი წაშლილია");
            echo json_encode($response);

        } else {
            $response = array("status" => 404, "message" => "ფაილი არ არსებობს");
            echo json_encode($response);
        }

    }
}

function removeCommissionFirst()
{
    $response = array();
    if (isset($_POST["id"]) && isset($_POST["file_id"])) {
        $db = getDB();
        $id = $_POST["file_id"];
        $statement = $db->prepare("SELECT * FROM patient_military_medical_commission_files where id=:id");
        $statement->bindValue("id", $id);
        $statement->execute();
        $file = $statement->fetch();
        if ($file["id"]) {
            $file_id = $file["id"];
            $filename = $file["file_storage_name"];
            $deletefile = $db->prepare("DELETE FROM patient_military_medical_commission_files where id=:file_id");
            $deletefile->bindParam("file_id", $file_id, PDO::PARAM_INT);
            $deletefile->execute();
            $abspath = $_SERVER['DOCUMENT_ROOT'];
            unlink($abspath . '/' . $filename);
            $response = array("status" => 200, "message" => "ფაილი წაშლილია");
            echo json_encode($response);

        } else {
            $response = array("status" => 404, "message" => "ფაილი არ არსებობს");
            echo json_encode($response);
        }

    }
}

function removeCommissionSecond()
{
    $response = array();
    if (isset($_POST["id"]) && isset($_POST["file_id"])) {
        $db = getDB();
        $id = $_POST["file_id"];
        $statement = $db->prepare("SELECT * FROM patient_military_medical_commission_files where id=:id");
        $statement->bindValue("id", $id);
        $statement->execute();
        $file = $statement->fetch();
        if ($file["id"]) {
            $file_id = $file["id"];
            $filename = $file["file_storage_name"];
            $deletefile = $db->prepare("DELETE FROM patient_military_medical_commission_files where id=:file_id");
            $deletefile->bindParam("file_id", $file_id, PDO::PARAM_INT);
            $deletefile->execute();
            $abspath = $_SERVER['DOCUMENT_ROOT'];
            unlink($abspath . '/' . $filename);
            $response = array("status" => 200, "message" => "ფაილი წაშლილია");
            echo json_encode($response);

        } else {
            $response = array("status" => 404, "message" => "ფაილი არ არსებობს");
            echo json_encode($response);
        }

    }
}
