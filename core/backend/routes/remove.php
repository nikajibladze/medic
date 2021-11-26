<?php
require_once '../../config.php';
require_once '../remove/functions.php';

if (isset($_POST["remove_nose_file"])) {
    removeNoseFile();
}
if (isset($_POST["remove_cure_file"])) {
    removeCureFile();
}

if (isset($_POST["remove_psy_file"])) {
    removePsyFile();
}

if (isset($_POST["remove_operations_file"])) {
    removeOperationsFile();
}

if (isset($_POST["remove_immunization_file"])) {
    removeImmunizationFile();
}

if (isset($_POST["remove_medications_file"])) {
    removeMedicationsFile();
}

if (isset($_POST["remove_immunization_file"])) {
    removeImmunizationFile();
}

if (isset($_POST["remove_desease_file"])) {
    removeDeseaseFile();
}

if (isset($_POST["remove_commission_first"])) {
    removeCommissionFirst();
}

if (isset($_POST["remove_commission_second"])) {
    removeCommissionSecond();
}
