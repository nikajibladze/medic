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
$stmt = $conn->prepare("SELECT COUNT(*) AS allcount FROM patient_organ_sight_retina $where");
$stmt->execute();
$records = $stmt->fetch();
$totalRecords = $records['allcount'];

## Total number of records with filtering
$stmt = $conn->prepare("SELECT COUNT(*) AS allcount FROM patient_organ_sight_retina $where");
$stmt->execute($searchArray);
$records = $stmt->fetch();
$totalRecordwithFilter = $records['allcount'];

## Fetch records
$stmt = $conn->prepare("SELECT id,retina,retina_location,retina_text FROM patient_organ_sight_retina $where ORDER BY " . $columnName . " " . $columnSortOrder . " LIMIT :limit,:offset");

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
    $retina = "";
    $place = "";
    $location = "";
    if ($row['retina'] == 1) {
        $retina = "მხედველობის ნერვის დვრილი";
    } elseif ($row['retina'] == 2) {
        $retina = "საზღვრები";
    } elseif ($row['retina'] == 3) {
        $retina = "არტერიები ";
    } elseif ($row['retina'] == 4) {
        $retina = "სისხლჩაქცევები ";
    } elseif ($row['retina'] == 5) {
        $retina = "დისტროფიები";
    } elseif ($row['retina'] == 6) {
        $retina = "ექსუდატები";
    } elseif ($row['retina'] == 7) {
        $retina = "გახლეჩა";
    } elseif ($row['retina'] == 8) {
        $retina = "ლოკალიზაცია";
    } elseif ($row['retina'] == 9) {
        $retina = "სხვა";
    }

    if ($row['retina_location'] == 1) {
        $location = "D";
    } elseif ($row['retina_location'] == 2) {
        $location = "S";
    } elseif ($row['retina_location'] == 3) {
        $location = "D,S";
    }
    $data[] = array(
        "id" => $row['id'],
        "retina" => $retina,
        "retina" => $retina,
        "retina_text" => $row['retina_text'],
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
