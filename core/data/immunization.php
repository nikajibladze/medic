<?php
include '../config.php';
require_once '../functions.php';
$conn = getDB();
## Read value
if ($_GET["visit_id"]) {
    $where = "WHERE visit_id=" . $_GET["visit_id"];
} else {
    $where = "";
}
$draw = $_GET['draw'];
$row = $_GET['start'];
$rowperpage = $_GET['length']; // Rows display per page
$columnIndex = $_GET['order'][0]['column']; // Column index
$columnName = $_GET['columns'][$columnIndex]['data']; // Column name
$columnSortOrder = $_GET['order'][0]['dir']; // asc or desc
$searchValue = $_GET['search']['value']; // Search value
$searchArray = array();

## Total number of records without filtering
$stmt = $conn->prepare("SELECT COUNT(*) AS allcount FROM patient_immunization $where");
$stmt->execute();
$records = $stmt->fetch();
$totalRecords = $records['allcount'];

## Total number of records with filtering
$stmt = $conn->prepare("SELECT COUNT(*) AS allcount FROM patient_immunization $where");
$stmt->execute($searchArray);
$records = $stmt->fetch();
$totalRecordwithFilter = $records['allcount'];

## Fetch records
$stmt = $conn->prepare("SELECT * FROM patient_immunization $where  ORDER BY id desc LIMIT :limit,:offset");

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
    $reject = "";
    if ($row['patient_rejection'] == 1) {
        $reject = "კი";
    }
    $data[] = array(
        "id" => $row['id'],
        "vaccine" => vaccineNames($row['vaccine']),
        "create_date" => $row['create_date'],
        "revaccination" => $row['revaccination'],
        "contraindications" => $row['contraindications'],
        "patient_rejection" => $reject,
        "reg_name" => $row['reg_name'],
        "position" => $row['position'],
        "structure" => $row['structure'],
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
