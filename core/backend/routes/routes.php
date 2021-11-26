<?php
require_once '../../config.php';
require_once '../insert/functions.php';
if (isset($_POST["register_user"])) {
    insertRegister();
}
if (isset($_POST["patient_history"])) {
    patientHistory();
}

if (isset($_POST["insert_abuse"])) {
    insertAbuse();
}
if (isset($_POST["insert_antropometry"])) {
    insertAntropometry();
}
if (isset($_POST["insert_aware"])) {
    insertAware();
}
if (isset($_POST["insert_blood"])) {
    insertBlood();
}

if (isset($_POST["insert_eat"])) {
    insertEat();
}
if (isset($_POST["insert_pis"])) {
    insertPis();
}
if (isset($_POST["insert_nervous_system"])) {
    insertNervousSystem();
}
if (isset($_POST["insert_vision"])) {
    insertVision();
}
if (isset($_POST["insert_crystal"])) {
    insertCrystal();
}
if (isset($_POST["insert_badura"])) {
    insertBadura();
}
if (isset($_POST["insert_sclera"])) {
    insertSclera();
}
if (isset($_POST["insert_body"])) {
    insertBody();
}
if (isset($_POST["insert_reflex"])) {
    insertReflex();
}
if (isset($_POST["insert_breathe"])) {
    insertBreathe();
}
if (isset($_POST["insert_skin"])) {
    insertSkin();
}
if (isset($_POST["insert_parameters"])) {
    insertParameters();
}
if (isset($_POST["insert_limphatic"])) {
    insertLimphatic();
}
if (isset($_POST["insert_death"])) {
    insertDeath();
}
if (isset($_POST["insert_driven"])) {
    insertDriven();
}
if (isset($_POST["insert_endocrine"])) {
    insertEndocrine();
}
if (isset($_POST["insert_vision"])) {
    insertVision();
}
if (isset($_POST["insert_nose"])) {
    insertNose();
}
if (isset($_POST["insert_mounth"])) {
    insertMounth();
}
if (isset($_POST["insert_teeth"])) {
    insertTeeth();
}
if (isset($_POST["insert_cure"])) {
    insertCure();
}
if (isset($_POST["insert_procedure_code"])) {
    insertProcedureCode();
}
if (isset($_POST["insert_cure_meet"])) {
    insertCureMeet();
}
if (isset($_POST["insert_clinical_lab"])) {
    insertClinicalLab();
}
if (isset($_POST["insert_examination"])) {
    insertExamination();
}

if (isset($_POST["insert_lab_tests"])) {
    insertLabTests();
}
if (isset($_POST["insert_doctor_record"])) {
    insertDoctorRecord();
}

if (isset($_POST["insert_psychology_examination"])) {
    insertPsychology();
}

if (isset($_POST["insert_operations"])) {
    insertOperations();
}

if (isset($_POST["insert_immunization"])) {
    insertImmunization();
}

if (isset($_POST["insert_medications"])) {
    insertMedications();
}

if (isset($_POST["insert_medications_modal"])) {
    insertMedicationMeds();
}

if (isset($_POST["insert_medication_card"])) {
    insertMedicationCard();
}

if (isset($_POST["insert_reabilitation_plan"])) {
    insertReabilitationPlan();
}

if (isset($_POST["insert_reabilitation_records"])) {
    insertReabilitationRecords();
}

if (isset($_POST["insert_reabilitation_daily_modal"])) {
    insertReabilitationDailyModal();
}

if (isset($_POST["insert_ocupation"])) {
    insertReabilitationOcupation();
}

if (isset($_POST["insert_ocupation_right"])) {
    insertOcupationRight();
}

if (isset($_POST["insert_ocupation_left"])) {
    insertOcupationLeft();
}

if (isset($_POST["insert_phsycical_therapy"])) {
    insertPhisicalTherapy();
}

if (isset($_POST["insert_phsycical_table"])) {
    insertPhisicalTable();
}

if (isset($_POST["insert_reabilitaiton"])) {
    insertRehabilitationCard();
}
if (isset($_POST["insert_desease_main"])) {
    insertDeseaseMain();
}

if (isset($_POST["insert_diagnose_type"])) {
    insertDiagnoseType();
}

if (isset($_POST["insert_diagnose_recipient"])) {
    insertDiagnoseRecipient();
}

if (isset($_POST["insert_diagnose_meet"])) {
    insertDiagnoseMeet();
}

if (isset($_POST["insert_important"])) {
    insertImportant();
}

if (isset($_POST["insert_important_main"])) {
    insertImportantMain();
}

if (isset($_POST["insert_diagnose_records"])) {
    insertDiagnoseRecords();
}

if (isset($_POST["insert_diagnose_health"])) {
    insertDiagnoseHealth();
}

if (isset($_POST["insert_diagnose_destination"])) {
    insertDiagnoseDestination();
}

if (isset($_POST["insert_commission"])) {
    insertCommission();
}
