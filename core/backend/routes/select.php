<?php
require_once '../../config.php';
require_once '../select/functions.php';
if (isset($_POST["get_parameters"])) {
    selectParameters();
}
if (isset($_POST["get_limphatic"])) {
    selectLimphatic();
}
if (isset($_POST["get_abuse"])) {
    selectAbuse();
}
if (isset($_POST["get_death"])) {
    selectDeath();
}
if (isset($_POST["get_driven"])) {
    selectDriven();
}
if (isset($_POST["get_antropometry"])) {
    selectAntropometry();
}

if (isset($_POST["get_skin"])) {
    selectSkin();
}
if (isset($_POST["get_endocrine"])) {
    selectEndocrine();
}
if (isset($_POST["get_blood"])) {
    selectBlood();
}
if (isset($_POST["get_breathe"])) {
    selectBreathe();
}
if (isset($_POST["get_eat"])) {
    selectEat();
}
if (isset($_POST["get_pis"])) {
    selectPis();
}
if (isset($_POST["get_aware"])) {
    selectAware();
}
if (isset($_POST["get_nervous_system"])) {
    selectNervousSystem();
}
if (isset($_POST["get_reflex"])) {
    selectReflex();
}
if (isset($_POST["get_vision"])) {
    selectVision();
}
if (isset($_POST["get_nose"])) {
    selectNose();
}
if (isset($_GET["get_crystal"])) {
    selectCrystal();
}
if (isset($_GET["get_sclera"])) {
    selectSclera();
}
if (isset($_GET["get_body"])) {
    selectBody();
}
if (isset($_GET["get_badura"])) {
    selectBadura();
}
if (isset($_GET["get_mounth"])) {
    selectMounth();
}
if (isset($_GET["get_teeth"])) {
    selectTeeth();
}
if (isset($_GET["get_nose_file"])) {
    selectNoseFile();
}

if (isset($_GET["get_cure"])) {
    selectCure();
}
if (isset($_GET["get_cure_file"])) {
    selectCureFile();
}
if (isset($_GET["get_procedure_code"])) {
    selectProcedureCode();
}
if (isset($_GET["get_cure_meet"])) {
    selectCureMeet();
}
if (isset($_GET["get_clinic_lab"])) {
    selectClinicalLab();
}
if (isset($_GET["get_examination"])) {
    selectExamination();
}
if (isset($_GET["get_lab_tests"])) {
    selectLabTests();
}

if (isset($_GET["get_doctor_record"])) {
    selectDoctorRecord();
}

if (isset($_GET["get_psychology_examination"])) {
    selectPsychology();
}
if (isset($_GET["get_psy_file"])) {
    selectPsyFile();
}

if (isset($_GET["get_operations"])) {
    selectOperations();
}

if (isset($_GET["get_operations_file"])) {
    selectOperationsFile();
}

if (isset($_GET["get_immunization"])) {
    selectImmunization();
}

if (isset($_GET["get_immunization_file"])) {
    selectImmunizationFile();
}

if (isset($_GET["get_medications"])) {
    selectMedications();
}

if (isset($_GET["get_medications_file"])) {
    selectMedicationsFile();
}
if (isset($_GET["get_medication_meds"])) {
    selectMedicationMeds();
}

if (isset($_GET["get_medication_card"])) {
    selectMedicationCard();
}

if (isset($_GET["get_reabilitation_plan"])) {
    selectReabilitaitonPlan();
}

if (isset($_GET["get_reabilitation_records"])) {
    selectReabilitaitonRecords();
}

if (isset($_GET["get_ocupation"])) {
    selectReabilitaitonOcupation();
}
if (isset($_GET["get_daili_records_list"])) {
    selectReabilitaitonRecordsList();
}

if (isset($_GET["get_ocupation_right"])) {
    selectOcupationRight();
}

if (isset($_GET["get_ocupation_left"])) {
    selectOcupationLeft();
}
if (isset($_GET["get_physical_therapy"])) {
    selectPhysicalTherapy();
}
if (isset($_GET["get_physical_therapy_table"])) {
    selectPhysicalTherapyTable();
}

if (isset($_GET["get_rehabilitation_card"])) {
    selectRehabilitationCard();
}

if (isset($_GET["get_diagnose_main"])) {
    selectDiagnoseMain();
}
if (isset($_GET["get_desease_file"])) {
    selectDeseaseFile();
}

if (isset($_GET["get_diagnose_types"])) {
    selectDiagnoseType();
}

if (isset($_GET["get_diagnose_recipient"])) {
    selectDiagnoseRecipient();
}

if (isset($_GET["get_diagnose_meet"])) {
    selectDiagnoseMeet();
}

if (isset($_GET["get_important"])) {
    selectImportant();
}

if (isset($_GET["get_diagnose_health"])) {
    selectDiagnoseHealth();
}

if (isset($_GET["get_diagnose_destination"])) {
    selectDiagnoseDestination();
}

if (isset($_GET["get_commission_file"])) {
    selectCommissionFile();
}

if (isset($_GET["get_commission"])) {
    selectCommission();
}
