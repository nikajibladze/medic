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
$stmt = $conn->prepare("SELECT COUNT(*) AS allcount FROM patient_disease_diagnosis_info_types $where");
$stmt->execute();
$records = $stmt->fetch();
$totalRecords = $records['allcount'];

## Total number of records with filtering
$stmt = $conn->prepare("SELECT COUNT(*) AS allcount FROM patient_disease_diagnosis_info_types $where");
$stmt->execute($searchArray);
$records = $stmt->fetch();
$totalRecordwithFilter = $records['allcount'];

## Fetch records
$stmt = $conn->prepare("SELECT * FROM patient_disease_diagnosis_info_types $where ORDER BY " . $columnName . " " . $columnSortOrder . " LIMIT :limit,:offset");

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
    $id = $row['id'];
    $diagnosis = "";

    if ($row['type_of_diagnosis'] == 1) {
        $diagnosis = "დიაგნოზი შემოსვლისას";
    } elseif ($row['type_of_diagnosis'] == 2) {
        $diagnosis = "კლინიკური დიაგნოზი";
    } elseif ($row['type_of_diagnosis'] == 3) {
        $diagnosis = "დასკვნითი კლინიკური დიაგნოზი";
    } elseif ($row['type_of_diagnosis'] == 4) {
        $diagnosis = "ძირითადი ჰისტომორფოლოგიური დიაგნოზი";
    } elseif ($row['type_of_diagnosis'] == 5) {
        $diagnosis = "ძირითადი ჰისტომორფოლოგიური გართულება";
    } elseif ($row['type_of_diagnosis'] == 6) {
        $diagnosis = "თანმხლები ჰისტომორფოლოგიური დაავადება";
    } elseif ($row['type_of_diagnosis'] == 7) {
        $diagnosis = "ძირითადი დაავადების გართულება";
    } elseif ($row['type_of_diagnosis'] == 8) {
        $diagnosis = "თანმხლები დაავადება";
    }

    $data[] = array(
        "id" => $row['id'],
        "type_of_diagnosis" => $diagnosis,
        "diagnos_disease_id" => diseaseNames($row['diagnos_disease_id']),
        "diagnos_code" => $row['diagnos_code'],
        "create_date" => $row['create_date'],
        "diagnos_type_text" => $row['diagnos_type_text'],

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
