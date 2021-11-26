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
$stmt = $conn->prepare("SELECT COUNT(*) AS allcount FROM patient_organ_sight_vitreous_body $where");
$stmt->execute();
$records = $stmt->fetch();
$totalRecords = $records['allcount'];

## Total number of records with filtering
$stmt = $conn->prepare("SELECT COUNT(*) AS allcount FROM patient_organ_sight_vitreous_body $where");
$stmt->execute($searchArray);
$records = $stmt->fetch();
$totalRecordwithFilter = $records['allcount'];

## Fetch records
$stmt = $conn->prepare("SELECT id,vitreous_body,vitreous_body_location,vitreous_body_text FROM patient_organ_sight_vitreous_body $where ORDER BY  id desc  LIMIT :limit,:offset");

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
    $vitreous_body = "";
    $place = "";
    $location = "";
    if ($row['vitreous_body'] == 1) {
        $vitreous_body = "გამჭირვალე";
    } elseif ($row['vitreous_body'] == 2) {
        $vitreous_body = "ერთეული შემღვრევები";
    } elseif ($row['vitreous_body'] == 3) {
        $vitreous_body = "ანთებადი ინფილტრატი ";
    } elseif ($row['vitreous_body'] == 4) {
        $vitreous_body = "ჰემოფთალმი ";
    } elseif ($row['vitreous_body'] == 5) {
        $vitreous_body = "შვარტა ";
    } elseif ($row['vitreous_body'] == 6) {
        $vitreous_body = "თიაქარი  ";
    } elseif ($row['vitreous_body'] == 7) {
        $vitreous_body = "სხვა ";
    }

    if ($row['vitreous_body_location'] == 1) {
        $location = "D";
    } elseif ($row['vitreous_body_location'] == 2) {
        $location = "S";
    } elseif ($row['vitreous_body_location'] == 3) {
        $location = "D,S";
    }

    $data[] = array(
        "id" => $row['id'],
        "vitreous_body" => $vitreous_body,
        "vitreous_body_location" => $location,
        "vitreous_body_text" => $row['vitreous_body_text'],

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
