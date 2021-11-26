<?php
include '../config.php';
require_once '../functions.php';
$conn = getDB();
$sight = '';
if ($_GET["sight_id"]) {
    $where = "WHERE sight_id=" . $_GET["sight_id"];
} else {
    $where = "WHERE sight_id IS NULL";
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
$stmt = $conn->prepare("SELECT COUNT(*) AS allcount FROM patient_organ_sight_broli $where");
$stmt->execute();
$records = $stmt->fetch();
$totalRecords = $records['allcount'];

## Total number of records with filtering
$stmt = $conn->prepare("SELECT COUNT(*) AS allcount FROM patient_organ_sight_broli $where");
$stmt->execute($searchArray);
$records = $stmt->fetch();
$totalRecordwithFilter = $records['allcount'];

## Fetch records
$stmt = $conn->prepare("SELECT id,broli,location,transparent,place,bruli_text FROM patient_organ_sight_broli $where ORDER BY " . $columnName . " " . $columnSortOrder . " LIMIT :limit,:offset");

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
    $broli = "";
    $place = "";
    $location = "";
    if ($row['broli'] == 1) {
        $broli = "გამჭირვალე";
    } elseif ($row['broli'] == 2) {
        $broli = "შემღვრეული";
    } elseif ($row['broli'] == 3) {
        $broli = "შემღვრევა";
    } elseif ($row['broli'] == 4) {
        $broli = "მდებარეობა";
    } elseif ($row['broli'] == 5) {
        $broli = "სხვა";
    }

    if ($row['place'] == 1) {
        $place = "ეტოპია";
    } elseif ($row['place'] == 2) {
        $place = "სუბლუქსაცია";
    } elseif ($row['place'] == 3) {
        $place = "აფაკია";
    } elseif ($row['place'] == 4) {
        $place = "არტიფაკია";
    }

    if ($row['location'] == 1) {
        $location = "D";
    } elseif ($row['location'] == 2) {
        $location = "S";
    } elseif ($row['location'] == 3) {
        $location = "D,S";
    }
    $data[] = array(
        "id" => $row['id'],
        "broli" => $broli,
        "place" => $place,
        "transparent" => $row['bruli_text'],
        "location" => $location,

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
