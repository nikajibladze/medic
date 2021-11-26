<?php
include '../config.php';
require_once '../functions.php';
$conn = getDB();
$sight = '';
if ($_GET["info_id"]) {
    $where = "WHERE info_id=" . $_GET["info_id"];
} else {
    $where = "WHERE info_id IS NULL";
}
## Read value
$draw = $_GET['draw'];
$row = $_GET['start'];
$rowperpage = $_GET['length']; // Rows display per page
$columnIndex = $_GET['order'][0]['column']; // Column index
$columnName = $_GET['columns'][$columnIndex]['data']; // Column name
$columnSortOrder = $_GET['order'][0]['dir']; // asc or desc
$searchValue = $_GET['search']['value']; // Search value
$searchArray = array();

## Total number of records without filtering
$stmt = $conn->prepare("SELECT COUNT(*) AS allcount FROM patient_disease_diagnosis_info_appeal $where");
$stmt->execute();
$records = $stmt->fetch();
$totalRecords = $records['allcount'];

## Total number of records with filtering
$stmt = $conn->prepare("SELECT COUNT(*) AS allcount FROM patient_disease_diagnosis_info_appeal $where");
$stmt->execute($searchArray);
$records = $stmt->fetch();
$totalRecordwithFilter = $records['allcount'];

## Fetch records
$stmt = $conn->prepare("SELECT * FROM patient_disease_diagnosis_info_appeal $where ORDER BY " . $columnName . " " . $columnSortOrder . " LIMIT :limit,:offset");

// Bind values
foreach ($searchArray as $key => $search) {
    $stmt->bindValue(':' . $key, $search, PDO::PARAM_STR);
}

$stmt->bindValue(':limit', (int) $row, PDO::PARAM_INT);
$stmt->bindValue(':offset', (int) $rowperpage, PDO::PARAM_INT);
$stmt->execute();
$empRecords = $stmt->fetchAll();

$data = array();
foreach ($empRecords as $row) {
    if ($row['civilian_structure']) {
        $clinic = "<div class='clinic-div'><span class='fa fa-check clinic-check'></span></div>";
        $type = 1;
    } else {
        $clinic = "<div class='clinic-div'><span class='fa fa-times clinic-times'></span></div>";
        $type = 2;
    }
    $condition_new = "";
    $condition_civilian = "";
    if ($row['condition_meet'] == 1) {
        $condition_new = "გეგმიური";
    }
    if ($row['condition_meet'] == 2) {
        $condition_new = "სასწრაფო";
    }

    if ($row['civilian_condition'] == 1) {
        $condition_civilian = "გეგმიური";
    }
    if ($row['civilian_condition'] == 2) {
        $condition_civilian = "სასწრაფო";
    }

    $id = $row['id'];
    $data[] = array(
        "id" => $row['id'],
        "structure_appeal" => $row['structure_appeal'] . $row['civilian_structure'],
        "specialist" => $row['specialist'] . $row['civilian_specialist'],
        "addressee_doctor" => getDoctorName($row['addressee_doctor']) . getDoctorName($row['civilian_addressee_doctor']),
        "condition" => $condition_new . $condition_civilian,
        "clinic" => $clinic,
        "type" => $type,
    );
}

## Response
$response = array(
    "draw" => intval($draw),
    "iTotalRecords" => $totalRecords,
    "iTotalDisplayRecords" => $totalRecordwithFilter,
    "aaData" => $data,
);

echo json_encode($response);
