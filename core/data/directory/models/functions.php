<?php
header('Content-Type: application/json;charset=utf-8');
require_once '../../config.php';
function rhesusTypes()
{
    $data = array();
    $db = getDB();
    $statement = $db->prepare("SELECT * FROM rhesus_types");
    $statement->execute();

    while ($rhesus = $statement->fetch()) {
        if ($rhesus["id"] == true) {
            $data[] = array(
                "id" => $rhesus["id"],
                "rhesus_types" => $rhesus["rhesus_types"]);
        }
    }
    return json_encode($data, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
}

function bloodTypes()
{
    $data = array();
    $db = getDB();
    $statement = $db->prepare("SELECT * FROM blood_types");
    $statement->execute();

    while ($blood = $statement->fetch()) {
        if ($blood["id"] == true) {
            $data[] = array(
                "id" => $blood["id"],
                "blood_groups" => $blood["blood_groups"]);
        }
    }
    return json_encode($data, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
}

function doctorsList()
{
    $data = array();
    $db = getDB();
    $statement = $db->prepare("SELECT id,first_name,last_name FROM doctors");
    $statement->execute();

    while ($blood = $statement->fetch()) {
        if ($blood["id"] == true) {
            $data[] = array(
                "id" => $blood["id"],
                "first_name" => $blood["first_name"],
                "last_name" => $blood["last_name"]);
        }
    }
    return json_encode($data, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
}

function visitConditions()
{
    $data = array();
    $db = getDB();
    $statement = $db->prepare("SELECT * FROM med_visit_conditions");
    $statement->execute();

    while ($condition = $statement->fetch()) {
        if ($condition["id"] == true) {
            $data[] = array(
                "id" => $condition["id"],
                "condition" => $condition["condition"]);
        }
    }
    return json_encode($data, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
}

function examinationProcedures()
{
    $data = array();
    $db = getDB();
    $statement = $db->prepare("SELECT * FROM patient_clinical_examination_procedures");
    $statement->execute();

    while ($blood = $statement->fetch()) {
        if ($blood["id"] == true) {
            $data[] = array(
                "id" => $blood["id"],
                "procedure_name" => $blood["procedure_name"]);
        }
    }
    return json_encode($data, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
}

function psyDiagnoses()
{
    $data = array();
    $db = getDB();
    $statement = $db->prepare("SELECT * FROM patient_psychological_examination_diagnosis_types");
    $statement->execute();

    while ($blood = $statement->fetch()) {
        if ($blood["id"] == true) {
            $data[] = array(
                "id" => $blood["id"],
                "diagnosis_type" => $blood["diagnosis_type"]);
        }
    }
    return json_encode($data, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
}

function speciality()
{
    $data = array();
    $db = getDB();
    $statement = $db->prepare("SELECT * FROM patient_operations_specialty_types");
    $statement->execute();

    while ($blood = $statement->fetch()) {
        if ($blood["id"] == true) {
            $data[] = array(
                "id" => $blood["id"],
                "specialty_types" => $blood["specialty_types"]);
        }
    }
    return json_encode($data, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
}

function getVaccines()
{
    $data = array();
    $db = getDB();
    $statement = $db->prepare("SELECT * FROM patient_immunization_vaccines");
    $statement->execute();

    while ($blood = $statement->fetch()) {
        if ($blood["id"] == true) {
            $data[] = array(
                "id" => $blood["id"],
                "vaccine_type" => $blood["vaccine_type"]);
        }
    }
    return json_encode($data, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
}

function getIndications()
{
    $data = array();
    $db = getDB();
    $statement = $db->prepare("SELECT * FROM patient_medications_indications");
    $statement->execute();

    while ($blood = $statement->fetch()) {
        if ($blood["id"] == true) {
            $data[] = array(
                "id" => $blood["id"],
                "indications" => $blood["indications"]);
        }
    }
    return json_encode($data, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
}

function getMedProducts()
{
    $data = array();
    $db = getDB();
    $statement = $db->prepare("SELECT * FROM patient_medications_products");
    $statement->execute();

    while ($blood = $statement->fetch()) {
        if ($blood["id"] == true) {
            $data[] = array(
                "id" => $blood["id"],
                "products" => $blood["products"]);
        }
    }
    return json_encode($data, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
}

function getDiseaseTypes()
{
    $data = array();
    $db = getDB();
    $statement = $db->prepare("SELECT * FROM patient_disease_types");
    $statement->execute();

    while ($blood = $statement->fetch()) {
        if ($blood["id"] == true) {
            $data[] = array(
                "id" => $blood["id"],
                "disease_type" => $blood["disease_type"]);
        }
    }
    return json_encode($data, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
}

function getDoctors()
{
    $data = array();
    $db = getDB();
    $statement = $db->prepare("SELECT * FROM doctors");
    $statement->execute();

    while ($doctor = $statement->fetch()) {
        if ($doctor["id"] == true) {
            $data[] = array(
                "id" => $doctor["id"],
                "name" => $doctor["first_name"] . " " . $doctor["last_name"]);
        }
    }
    return json_encode($data, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
}
