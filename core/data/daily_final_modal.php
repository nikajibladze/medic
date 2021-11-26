<?php
include '../config.php';
require_once '../functions.php';
$conn = getDB();
$sight = '';
if ($_GET["daily_final_records_id"]) {
    $where = "WHERE daily_final_records_id=" . $_GET["daily_final_records_id"];
} else {
    $where = "WHERE daily_final_records_id IS NULL";
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
$stmt = $conn->prepare("SELECT COUNT(*) AS allcount FROM patient_daily_final_records_list $where");
$stmt->execute();
$records = $stmt->fetch();
$totalRecords = $records['allcount'];

## Total number of records with filtering
$stmt = $conn->prepare("SELECT COUNT(*) AS allcount FROM patient_daily_final_records_list $where");
$stmt->execute($searchArray);
$records = $stmt->fetch();
$totalRecordwithFilter = $records['allcount'];

## Fetch records
$stmt = $conn->prepare("SELECT * FROM patient_daily_final_records_list $where ORDER BY " . $columnName . " " . $columnSortOrder . " LIMIT :limit,:offset");

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

    $data[] = array(
        "id" => $row['id'],
        "entry_date" => $row['entry_date'],
        "subjective" => $row['subjective'],
        "objective" => $row['objective'],
        "conducted_procedure" => $row['conducted_procedure'],
        "further_plan" => $row['further_plan'],
        "exit_plan_date" => $row['exit_plan_date'],
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
