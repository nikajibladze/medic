<?php
header('Content-Type: application/json; charset=utf-8');
function selectParameters()
{
    $db = getDB();
    $id = $_POST["id"];
    $response = array();
    $statement = $db->prepare("SELECT * FROM patient_vital_options where id=$id ");
    $statement->execute();
    $parameters = $statement->fetchAll(PDO::FETCH_NAMED);

    echo json_encode($parameters);

}
function selectLimphatic()
{
    $db = getDB();
    $id = $_POST["id"];
    $response = array();
    $statement = $db->prepare("SELECT * FROM patient_lymphatic_system where id=$id ");
    $statement->execute();
    $limphatic = $statement->fetchAll(PDO::FETCH_NAMED);

    echo json_encode($limphatic);

}

function selectAbuse()
{
    $db = getDB();
    $id = $_POST["id"];
    $response = array();
    $statement = $db->prepare("SELECT * FROM patient_abuse_anamnesis where id=$id ");
    $statement->execute();
    $limphatic = $statement->fetchAll(PDO::FETCH_NAMED);

    echo json_encode($limphatic);

}

function selectDeath()
{
    $db = getDB();
    $id = $_POST["id"];
    $response = array();
    $statement = $db->prepare("SELECT * FROM patient_death where id=$id ");
    $statement->execute();
    $death = $statement->fetchAll(PDO::FETCH_NAMED);

    echo json_encode($death);

}
function selectDriven()
{
    $db = getDB();
    $id = $_POST["id"];
    $response = array();
    $statement = $db->prepare("SELECT * FROM patient_musculoskeletal_system where id=$id ");
    $statement->execute();
    $death = $statement->fetchAll(PDO::FETCH_NAMED);

    echo json_encode($death);

}

function selectAntropometry()
{
    $db = getDB();
    $id = $_POST["id"];
    $response = array();
    $statement = $db->prepare("SELECT * FROM patient_anthropometry where id=$id ");
    $statement->execute();
    $death = $statement->fetchAll(PDO::FETCH_NAMED);

    echo json_encode($death);

}

function selectSkin()
{
    $db = getDB();
    $id = $_POST["id"];
    $response = array();
    $statement = $db->prepare("SELECT * FROM patient_skin where id=$id ");
    $statement->execute();
    $death = $statement->fetchAll(PDO::FETCH_NAMED);

    echo json_encode($death);

}

function selectEndocrine()
{
    $db = getDB();
    $id = $_POST["id"];
    $response = array();
    $statement = $db->prepare("SELECT * FROM patient_endocrine_system where id=$id ");
    $statement->execute();
    $death = $statement->fetchAll(PDO::FETCH_NAMED);

    echo json_encode($death);
}

function selectBlood()
{
    $db = getDB();
    $id = $_POST["id"];
    $response = array();
    $statement = $db->prepare("SELECT * FROM patient_blood_circulation_system where id=$id ");
    $statement->execute();
    $death = $statement->fetchAll(PDO::FETCH_NAMED);

    echo json_encode($death);
}
function selectBreathe()
{
    $db = getDB();
    $id = $_POST["id"];
    $response = array();
    $statement = $db->prepare("SELECT * FROM patient_respiratory_system where id=$id ");
    $statement->execute();
    $death = $statement->fetchAll(PDO::FETCH_NAMED);

    echo json_encode($death);
}

function selectEat()
{
    $db = getDB();
    $id = $_POST["id"];
    $response = array();
    $statement = $db->prepare("SELECT * FROM patient_digestive_system where id=$id ");
    $statement->execute();
    $death = $statement->fetchAll(PDO::FETCH_NAMED);

    echo json_encode($death);
}

function selectPis()
{
    $db = getDB();
    $id = $_POST["id"];
    $response = array();
    $statement = $db->prepare("SELECT * FROM patient_genital_system where id=$id ");
    $statement->execute();
    $death = $statement->fetchAll(PDO::FETCH_NAMED);

    echo json_encode($death);
}

function selectAware()
{
    $db = getDB();
    $id = $_POST["id"];
    $response = array();
    $statement = $db->prepare("SELECT * FROM patient_awareness where id=$id ");
    $statement->execute();
    $death = $statement->fetchAll(PDO::FETCH_NAMED);

    echo json_encode($death);
}

function selectNervousSystem()
{
    $db = getDB();
    $id = $_POST["id"];
    $response = array();
    $statement = $db->prepare("SELECT * FROM patient_nervous_system where id=$id ");
    $statement->execute();
    $death = $statement->fetchAll(PDO::FETCH_NAMED);

    echo json_encode($death);
}

function selectReflex()
{
    $db = getDB();
    $id = $_POST["id"];
    $response = array();
    $statement = $db->prepare("SELECT * FROM patient_reflex_attemps where id=$id ");
    $statement->execute();
    $death = $statement->fetchAll(PDO::FETCH_NAMED);

    echo json_encode($death);
}

function selectVision()
{
    $db = getDB();
    $id = $_POST["id"];
    $response = array();
    $statement = $db->prepare("SELECT * FROM patient_organ_sight where id=$id ");
    $statement->execute();
    $death = $statement->fetchAll(PDO::FETCH_NAMED);

    echo json_encode($death);
}
function selectNose()
{
    $db = getDB();
    $id = $_POST["id"];
    $response = array();
    $statement = $db->prepare("SELECT * FROM patient_throat_ear_nose where id=$id ");
    $statement->execute();
    $death = $statement->fetchAll(PDO::FETCH_NAMED);

    echo json_encode($death);
}

function selectCrystal()
{
    $db = getDB();
    $id = $_GET["id"];
    $response = array();
    $statement = $db->prepare("SELECT * FROM patient_organ_sight_broli where id=$id ");
    $statement->execute();
    $broli = $statement->fetchAll(PDO::FETCH_NAMED);

    echo json_encode($broli);
}

function selectSclera()
{
    $db = getDB();
    $id = $_GET["id"];
    $response = array();
    $statement = $db->prepare("SELECT * FROM patient_organ_sight_sclera where id=$id ");
    $statement->execute();
    $sclera = $statement->fetchAll(PDO::FETCH_NAMED);

    echo json_encode($sclera);
}

function selectBody()
{
    $db = getDB();
    $id = $_GET["id"];
    $response = array();
    $statement = $db->prepare("SELECT * FROM patient_organ_sight_vitreous_body where id=$id ");
    $statement->execute();
    $body = $statement->fetchAll(PDO::FETCH_NAMED);

    echo json_encode($body);
}

function selectBadura()
{
    $db = getDB();
    $id = $_GET["id"];
    $response = array();
    $statement = $db->prepare("SELECT * FROM patient_organ_sight_retina where id=$id ");
    $statement->execute();
    $badura = $statement->fetchAll(PDO::FETCH_NAMED);

    echo json_encode($badura);
}

function selectMounth()
{
    $db = getDB();
    $id = $_GET["id"];
    $response = array();
    $statement = $db->prepare("SELECT * FROM patient_mouth where id=$id ");
    $statement->execute();
    $mouth = $statement->fetchAll(PDO::FETCH_NAMED);

    echo json_encode($mouth);
}

function selectTeeth()
{
    $db = getDB();
    $id = $_GET["id"];
    $response = array();
    $statement = $db->prepare("SELECT * FROM patient_mouth_teeth where id=$id ");
    $statement->execute();
    $mouth = $statement->fetchAll(PDO::FETCH_NAMED);

    echo json_encode($mouth);
}
function selectNoseFile()
{
    $db = getDB();
    $id = $_GET["id"];
    $response = array();
    $statement = $db->prepare("SELECT * FROM patient_throat_ear_nose_files where patient_throat_id=:id");
    $statement->bindValue("id", $id, PDO::PARAM_INT);
    $statement->execute();
    $files = $statement->fetchAll(PDO::FETCH_NAMED);

    echo json_encode($files);
}

function selectCure()
{
    $db = getDB();
    $id = $_GET["id"];
    $response = array();
    $statement = $db->prepare("SELECT * FROM patient_cure where id=:id");
    $statement->bindValue("id", $id, PDO::PARAM_INT);
    $statement->execute();
    $files = $statement->fetchAll(PDO::FETCH_NAMED);

    echo json_encode($files);
}

function selectCureFile()
{
    $db = getDB();
    $id = $_GET["id"];
    $response = array();
    $statement = $db->prepare("SELECT * FROM patient_cure_files where cure_id=:id");
    $statement->bindValue("id", $id, PDO::PARAM_INT);
    $statement->execute();
    $files = $statement->fetchAll(PDO::FETCH_NAMED);

    echo json_encode($files);
}

function selectProcedureCode()
{
    $db = getDB();
    $id = $_GET["id"];
    $response = array();
    $statement = $db->prepare("SELECT * FROM patient_cure_procedure_code where id=:id");
    $statement->bindValue("id", $id, PDO::PARAM_INT);
    $statement->execute();
    $procedures = $statement->fetchAll(PDO::FETCH_NAMED);
    echo json_encode($procedures);
}
function selectCureMeet()
{
    $db = getDB();
    $id = $_GET["id"];
    $response = array();
    $statement = $db->prepare("SELECT * FROM patient_cure_meeting where id=:id");
    $statement->bindValue("id", $id, PDO::PARAM_INT);
    $statement->execute();
    $meet = $statement->fetchAll(PDO::FETCH_NAMED);
    echo json_encode($meet);
}

function selectClinicalLab()
{
    $db = getDB();
    $id = $_GET["id"];
    $response = array();
    $statement = $db->prepare("SELECT * FROM patient_clinical_examination_main where id=:id");
    $statement->bindValue("id", $id, PDO::PARAM_INT);
    $statement->execute();
    $meet = $statement->fetchAll(PDO::FETCH_NAMED);
    echo json_encode($meet);
}

function selectExamination()
{
    $db = getDB();
    $id = $_GET["id"];
    $response = array();
    $statement = $db->prepare("SELECT * FROM patient_clinical_examination where id=:id");
    $statement->bindValue("id", $id, PDO::PARAM_INT);
    $statement->execute();
    $examination = $statement->fetchAll(PDO::FETCH_NAMED);
    echo json_encode($examination);
}

function selectLabTests()
{
    $db = getDB();
    $id = $_GET["id"];
    $response = array();
    $statement = $db->prepare("SELECT * FROM patient_laboratory_tests where id=:id");
    $statement->bindValue("id", $id, PDO::PARAM_INT);
    $statement->execute();
    $tests = $statement->fetchAll(PDO::FETCH_NAMED);
    echo json_encode($tests);
}

function selectDoctorRecord()
{
    $db = getDB();
    $id = $_GET["id"];
    $response = array();
    $statement = $db->prepare("SELECT * FROM patient_doctor_record_duty where id=:id");
    $statement->bindValue("id", $id, PDO::PARAM_INT);
    $statement->execute();
    $tests = $statement->fetchAll(PDO::FETCH_NAMED);
    echo json_encode($tests);
}

function selectPsychology()
{
    $db = getDB();
    $id = $_GET["id"];
    $response = array();
    $statement = $db->prepare("SELECT * FROM patient_psychological_examination where id=:id");
    $statement->bindValue("id", $id, PDO::PARAM_INT);
    $statement->execute();
    $psy = $statement->fetchAll(PDO::FETCH_NAMED);
    echo json_encode($psy);
}

function selectPsyFile()
{
    $db = getDB();
    $id = $_GET["id"];
    $response = array();
    $statement = $db->prepare("SELECT * FROM patient_psychological_examination_files where examination_id=:id");
    $statement->bindValue("id", $id, PDO::PARAM_INT);
    $statement->execute();
    $psy = $statement->fetchAll(PDO::FETCH_NAMED);
    echo json_encode($psy);
}

function selectOperations()
{
    $db = getDB();
    $id = $_GET["id"];
    $response = array();
    $statement = $db->prepare("SELECT * FROM patient_operations where id=:id");
    $statement->bindValue("id", $id, PDO::PARAM_INT);
    $statement->execute();
    $operations = $statement->fetchAll(PDO::FETCH_NAMED);
    echo json_encode($operations);
}

function selectOperationsFile()
{
    $db = getDB();
    $id = $_GET["id"];
    $response = array();
    $statement = $db->prepare("SELECT * FROM patient_operations_files where operations_id=:id");
    $statement->bindValue("id", $id, PDO::PARAM_INT);
    $statement->execute();
    $operations = $statement->fetchAll(PDO::FETCH_NAMED);
    echo json_encode($operations);
}

function selectImmunization()
{
    $db = getDB();
    $id = $_GET["id"];
    $response = array();
    $statement = $db->prepare("SELECT * FROM patient_immunization where id=:id");
    $statement->bindValue("id", $id, PDO::PARAM_INT);
    $statement->execute();
    $operations = $statement->fetchAll(PDO::FETCH_NAMED);
    echo json_encode($operations);
}

function selectImmunizationFile()
{
    $db = getDB();
    $id = $_GET["id"];
    $response = array();
    $statement = $db->prepare("SELECT * FROM patient_immunization_files where immunization_id=:id");
    $statement->bindValue("id", $id, PDO::PARAM_INT);
    $statement->execute();
    $operations = $statement->fetchAll(PDO::FETCH_NAMED);
    echo json_encode($operations);
}

function selectMedications()
{
    $db = getDB();
    $id = $_GET["id"];
    $response = array();
    $statement = $db->prepare("SELECT * FROM patient_medications where id=:id");
    $statement->bindValue("id", $id, PDO::PARAM_INT);
    $statement->execute();
    $operations = $statement->fetchAll(PDO::FETCH_NAMED);
    echo json_encode($operations);
}

function selectMedicationsFile()
{
    $db = getDB();
    $id = $_GET["id"];
    $response = array();
    $statement = $db->prepare("SELECT * FROM patient_medications_files where medications_id=:id");
    $statement->bindValue("id", $id, PDO::PARAM_INT);
    $statement->execute();
    $operations = $statement->fetchAll(PDO::FETCH_NAMED);
    echo json_encode($operations);
}

function selectMedicationMeds()
{
    $db = getDB();
    $id = $_GET["id"];
    $response = array();
    $statement = $db->prepare("SELECT * FROM patient_medications_meds where id=:id");
    $statement->bindValue("id", $id, PDO::PARAM_INT);
    $statement->execute();
    $operations = $statement->fetchAll(PDO::FETCH_NAMED);
    echo json_encode($operations);
}

function selectMedicationCard()
{
    $db = getDB();
    $id = $_GET["id"];
    $response = array();
    $statement = $db->prepare("SELECT * FROM patient_medical_card where id=:id");
    $statement->bindValue("id", $id, PDO::PARAM_INT);
    $statement->execute();
    $operations = $statement->fetchAll(PDO::FETCH_NAMED);
    echo json_encode($operations);
}

function selectReabilitaitonPlan()
{
    $db = getDB();
    $id = $_GET["id"];
    $response = array();
    $statement = $db->prepare("SELECT * FROM patient_rehabilitation_plan where id=:id");
    $statement->bindValue("id", $id, PDO::PARAM_INT);
    $statement->execute();
    $plan = $statement->fetchAll(PDO::FETCH_NAMED);
    echo json_encode($plan);
}

function selectReabilitaitonRecords()
{
    $db = getDB();
    $id = $_GET["id"];
    $response = array();
    $statement = $db->prepare("SELECT * FROM patient_daily_final_records where id=:id");
    $statement->bindValue("id", $id, PDO::PARAM_INT);
    $statement->execute();
    $plan = $statement->fetchAll(PDO::FETCH_NAMED);
    echo json_encode($plan);
}
function selectReabilitaitonRecordsList()
{
    $db = getDB();
    $id = $_GET["id"];
    $response = array();
    $statement = $db->prepare("SELECT * FROM patient_daily_final_records_list where id=:id");
    $statement->bindValue("id", $id, PDO::PARAM_INT);
    $statement->execute();
    $plan = $statement->fetchAll(PDO::FETCH_NAMED);
    echo json_encode($plan);
}

function selectReabilitaitonOcupation()
{
    $db = getDB();
    $id = $_GET["id"];
    $response = array();
    $statement = $db->prepare("SELECT * FROM patient_occupational_therapy where id=:id");
    $statement->bindValue("id", $id, PDO::PARAM_INT);
    $statement->execute();
    $ocupation = $statement->fetchAll(PDO::FETCH_NAMED);
    echo json_encode($ocupation);
}

function selectOcupationRight()
{
    $db = getDB();
    $id = $_GET["id"];
    $response = array();
    $statement = $db->prepare("SELECT * FROM patient_occupational_therapy_table_right where occupational_therapy_id=:id");
    $statement->bindValue("id", $id, PDO::PARAM_INT);
    $statement->execute();
    $ocupation = $statement->fetchAll(PDO::FETCH_NAMED);
    echo json_encode($ocupation);
}

function selectOcupationLeft()
{
    $db = getDB();
    $id = $_GET["id"];
    $response = array();
    $statement = $db->prepare("SELECT * FROM patient_occupational_therapy_table_left where occupational_therapy_id=:id");
    $statement->bindValue("id", $id, PDO::PARAM_INT);
    $statement->execute();
    $ocupation = $statement->fetchAll(PDO::FETCH_NAMED);
    echo json_encode($ocupation);
}

function selectPhysicalTherapy()
{
    $db = getDB();
    $id = $_GET["id"];
    $response = array();
    $statement = $db->prepare("SELECT * FROM patient_physical_therapy where id=:id");
    $statement->bindValue("id", $id, PDO::PARAM_INT);
    $statement->execute();
    $ocupation = $statement->fetchAll(PDO::FETCH_NAMED);
    echo json_encode($ocupation);
}

function selectPhysicalTherapyTable()
{
    $db = getDB();
    $id = $_GET["id"];
    $response = array();
    $statement = $db->prepare("SELECT * FROM patient_physical_therapy_table where physical_therapy_id=:id");
    $statement->bindValue("id", $id, PDO::PARAM_INT);
    $statement->execute();
    $ocupation = $statement->fetchAll(PDO::FETCH_NAMED);
    echo json_encode($ocupation);
}

function selectRehabilitationCard()
{
    $db = getDB();
    $id = $_GET["id"];
    $response = array();
    $statement = $db->prepare("SELECT * FROM patient_rehabilitation_card where id=:id");
    $statement->bindValue("id", $id, PDO::PARAM_INT);
    $statement->execute();
    $ocupation = $statement->fetchAll(PDO::FETCH_NAMED);
    echo json_encode($ocupation);
}

function selectDiagnoseMain()
{
    $db = getDB();
    $id = $_GET["id"];
    $response = array();
    $statement = $db->prepare("SELECT * FROM patient_disease_diagnosis_info where id=:id");
    $statement->bindValue("id", $id, PDO::PARAM_INT);
    $statement->execute();
    $ocupation = $statement->fetchAll(PDO::FETCH_NAMED);
    echo json_encode($ocupation);
}

function selectDeseaseFile()
{
    $db = getDB();
    $id = $_GET["id"];
    $response = array();
    $statement = $db->prepare("SELECT * FROM patient_disease_diagnosis_info_files where info_id=:id");
    $statement->bindValue("id", $id, PDO::PARAM_INT);
    $statement->execute();
    $ocupation = $statement->fetchAll(PDO::FETCH_NAMED);
    echo json_encode($ocupation);
}
function selectDiagnoseType()
{
    $db = getDB();
    $id = $_GET["id"];
    $response = array();
    $statement = $db->prepare("SELECT * FROM patient_disease_diagnosis_info_types where id=:id");
    $statement->bindValue("id", $id, PDO::PARAM_INT);
    $statement->execute();
    $ocupation = $statement->fetchAll(PDO::FETCH_NAMED);
    echo json_encode($ocupation);
}

function selectDiagnoseRecipient()
{
    $db = getDB();
    $id = $_GET["id"];
    $response = array();
    $statement = $db->prepare("SELECT * FROM patient_disease_diagnosis_info_recipient where id=:id");
    $statement->bindValue("id", $id, PDO::PARAM_INT);
    $statement->execute();
    $ocupation = $statement->fetchAll(PDO::FETCH_NAMED);
    echo json_encode($ocupation);
}

function selectDiagnoseMeet()
{
    $db = getDB();
    $id = $_GET["id"];
    $response = array();
    $statement = $db->prepare("SELECT * FROM patient_disease_diagnosis_info_appeal where id=:id");
    $statement->bindValue("id", $id, PDO::PARAM_INT);
    $statement->execute();
    $meet = $statement->fetchAll(PDO::FETCH_NAMED);
    echo json_encode($meet);
}

function selectImportant()
{
    $db = getDB();
    $id = $_GET["id"];
    $response = array();
    $statement = $db->prepare("SELECT * FROM patient_important_medical_information_child where id=:id");
    $statement->bindValue("id", $id, PDO::PARAM_INT);
    $statement->execute();
    $meet = $statement->fetchAll(PDO::FETCH_NAMED);
    echo json_encode($meet);
}

function selectDiagnoseHealth()
{
    $db = getDB();
    $id = $_GET["id"];
    $response = array();
    $statement = $db->prepare("SELECT * FROM patient_records_health_condition where id=:id");
    $statement->bindValue("id", $id, PDO::PARAM_INT);
    $statement->execute();
    $health = $statement->fetchAll(PDO::FETCH_NAMED);
    echo json_encode($health);
}

function selectDiagnoseDestination()
{
    $db = getDB();
    $id = $_GET["id"];
    $response = array();
    $statement = $db->prepare("SELECT * FROM patient_records_consultation_destination where id=:id");
    $statement->bindValue("id", $id, PDO::PARAM_INT);
    $statement->execute();
    $health = $statement->fetchAll(PDO::FETCH_NAMED);
    echo json_encode($health);
}

function selectCommissionFile()
{
    $db = getDB();
    $id = $_GET["id"];
    $file_type = $_GET["file_type"];
    $response = array();
    $statement = $db->prepare("SELECT * FROM patient_military_medical_commission_files where medical_commission_id=:id and file_type=$file_type");
    $statement->bindValue("id", $id, PDO::PARAM_INT);
    $statement->execute();
    $psy = $statement->fetchAll(PDO::FETCH_NAMED);
    echo json_encode($psy);
}

function selectCommission()
{
    $db = getDB();
    $id = $_GET["id"];
    $response = array();
    $statement = $db->prepare("SELECT * FROM patient_military_medical_commission where id=:id");
    $statement->bindValue("id", $id, PDO::PARAM_INT);
    $statement->execute();
    $health = $statement->fetchAll(PDO::FETCH_NAMED);
    echo json_encode($health);
}
