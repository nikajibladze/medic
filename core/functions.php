<?php
function getDoctor($id, $type)
{

    if ($id) {
        $db = getDB();
        $statement = $db->prepare("SELECT id,first_name,last_name FROM doctors where id=:id");
        $statement->bindValue("id", $id, PDO::PARAM_INT);
        $statement->execute();
        $doctor = $statement->fetch();
        if ($doctor["id"]) {
            $name = $doctor["first_name"] . " " . $doctor["last_name"];
            return $name;
        }

    } else {
        return "";
    }
}

function getDoctorName($id)
{

    if ($id) {
        $db = getDB();
        $statement = $db->prepare("SELECT id,first_name,last_name FROM doctors where id=:id");
        $statement->bindValue("id", $id, PDO::PARAM_INT);
        $statement->execute();
        $doctor = $statement->fetch();
        if ($doctor["id"]) {
            $name = $doctor["first_name"] . " " . $doctor["last_name"];
            return $name;
        }

    } else {
        return "";
    }
}

function procedureNames($id)
{
    if (!$id) {
        return "";
    }
    $db = getDB();
    $statement = $db->prepare("SELECT * FROM patient_clinical_examination_procedures where id=:id");
    $statement->bindValue("id", $id, PDO::PARAM_INT);
    $statement->execute();
    $name = $statement->fetch();
    return $name["procedure_name"];
}

function vaccineNames($id)
{
    if (!$id) {
        return "";
    }
    $db = getDB();
    $statement = $db->prepare("SELECT * FROM patient_immunization_vaccines where id=:id");
    $statement->bindValue("id", $id, PDO::PARAM_INT);
    $statement->execute();
    $name = $statement->fetch();
    return $name["vaccine_type"];
}

function diseaseNames($id)
{
    if (!$id) {
        return "";
    }
    $db = getDB();
    $statement = $db->prepare("SELECT * FROM patient_disease_types where id=:id");
    $statement->bindValue("id", $id, PDO::PARAM_INT);
    $statement->execute();
    $name = $statement->fetch();
    return $name["disease_type"];
}
