<?php
require_once 'models/functions.php';
require_once '../../config.php';
if (isset($_POST["rhesus_types"])) {
    echo rhesusTypes();
}
if (isset($_POST["blood_groops"])) {
    echo bloodTypes();
}
if (isset($_POST["doctors_list"])) {
    echo doctorsList();
}
if (isset($_POST["visit_condition"])) {
    echo visitConditions();
}
if (isset($_POST["examination_procedures"])) {
    echo examinationProcedures();
}

if (isset($_POST["psy_diagnoses"])) {
    echo psyDiagnoses();
}

if (isset($_POST["get_specialty"])) {
    echo speciality();
}

if (isset($_POST["get_vaccines"])) {
    echo getVaccines();
}

if (isset($_POST["get_indications"])) {
    echo getIndications();
}

if (isset($_POST["get_med_products"])) {
    echo getMedProducts();
}
if (isset($_POST["get_diagnosis_disease"])) {
    echo getDiseaseTypes();
}

if (isset($_POST["get_doctors"])) {
    echo getDoctors();
}
