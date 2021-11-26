<?php
require_once '../../config.php';
require_once '../update/functions.php';
if (isset($_POST["update_abuse"])) {
    updateAbuse();
}
if (isset($_POST["update_parameters"])) {
    updateParameters();
}
if (isset($_POST["update_limphatic"])) {
    updateLimphatic();
}
if (isset($_POST["update_death"])) {
    updateDeath();
}
if (isset($_POST["update_driven"])) {
    updateDriven();
}
if (isset($_POST["update_antropometry"])) {
    updateAntropometry();
}

if (isset($_POST["update_skin"])) {
    updateSkin();
}
if (isset($_POST["update_endocrine"])) {
    updateEndocrine();
}
if (isset($_POST["update_breathe"])) {
    updateBreathe();
}

if (isset($_POST["update_blood"])) {
    updateBlood();
}
if (isset($_POST["update_eat"])) {
    updateEat();
}
if (isset($_POST["update_pis"])) {
    updatePis();
}
if (isset($_POST["update_aware"])) {
    updateAware();
}
if (isset($_POST["update_nervous_system"])) {
    updateNervousSystem();
}
if (isset($_POST["update_reflex"])) {
    updateReflex();
}
if (isset($_POST["update_nose"])) {
    updateNose();
}
if (isset($_POST["update_vision"])) {
    updateVision();
}
if (isset($_POST["update_crystal"])) {
    updateCrystal();
}
if (isset($_POST["update_sclera"])) {
    updateSclera();
}
if (isset($_POST["update_mbody"])) {
    updateMbody();
}
if (isset($_POST["update_badura"])) {
    updateBadura();
}
if (isset($_POST["update_mounth"])) {
    updateMounth();
}
if (isset($_POST["update_teeth"])) {
    updateTeeth();
}

if (isset($_POST["update_cure"])) {
    updateCure();
}

if (isset($_POST["update_procedure_code"])) {
    updateProcedureCode();
}

if (isset($_POST["update_cure_meet"])) {
    updateCureMeet();
}

if (isset($_POST["update_examination"])) {
    updateExamination();
}
if (isset($_POST["update_lab_tests"])) {
    updateLabTests();
}

if (isset($_POST["update_doctor_record"])) {
    updateDoctorRecord();
}

if (isset($_POST["update_psychological"])) {
    updatePsychological();
}

if (isset($_POST["update_operations"])) {
    updateOperations();
}

if (isset($_POST["update_immunization"])) {
    updateImmunization();
}

if (isset($_POST["update_medications"])) {
    updateMedications();
}

if (isset($_POST["update_medications_modal"])) {
    updateMedicationsModal();
}

if (isset($_POST["update_medication_card"])) {
    updateMedicationCard();
}

if (isset($_POST["update_reabilitation_plan"])) {
    updateReabilitationPlan();
}
if (isset($_POST["update_reabilitation_daily"])) {
    updateReabilitationDaily();
}

if (isset($_POST["update_reabilitation_ocupation"])) {
    updateReabilitationOcupation();
}

if (isset($_POST["update_ocupation_right"])) {
    updateOcupationRight();
}

if (isset($_POST["update_ocupation_left"])) {
    updateOcupationLeft();
}

if (isset($_POST["update_phsycical_therapy"])) {
    updatePhysicalTherapy();
}

if (isset($_POST["update_physical_table"])) {
    updatePhysicalTable();
}

if (isset($_POST["update_desease_main"])) {
    updateDeseaseMain();
}

if (isset($_POST["update_diagnose_type"])) {
    updateDiagnoseType();
}

if (isset($_POST["update_diagnose_recipient"])) {
    updateDiagnoseRecipient();
}

if (isset($_POST["update_diagnose_meet"])) {
    updateDiagnoseMeet();
}

if (isset($_POST["update_important"])) {
    updateImportant();
}
if (isset($_POST["update_diagnose_health"])) {
    updateDiagnoseHealth();
}
if (isset($_POST["update_diagnose_destination"])) {
    updateDiagnoseDestination();
}

if (isset($_POST["update_commission"])) {
    updateCommission();
}
