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
$stmt = $conn->prepare("SELECT COUNT(*) AS allcount FROM patient_organ_sight_sclera $where");
$stmt->execute();
$records = $stmt->fetch();
$totalRecords = $records['allcount'];

## Total number of records with filtering
$stmt = $conn->prepare("SELECT COUNT(*) AS allcount FROM patient_organ_sight_sclera $where");
$stmt->execute($searchArray);
$records = $stmt->fetch();
$totalRecordwithFilter = $records['allcount'];

## Fetch records
$stmt = $conn->prepare("SELECT id,sclera_type,sclera,sclera_text,sclera_location FROM patient_organ_sight_sclera $where ORDER BY " . $columnName . " " . $columnSortOrder . " LIMIT :limit,:offset");

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
    $sclera_type = "";
    $sclera = "";
    $location = "";
    if ($row['sclera_type'] == 1) {
        $sclera_type = "სკლერა";
    } elseif ($row['sclera_type'] == 2) {
        $sclera_type = "დისკოლორაცია კეროვანი";
    } elseif ($row['sclera_type'] == 3) {
        $sclera_type = "დისკოლორაცია დიფუზიური";
    } elseif ($row['sclera_type'] == 4) {
        $sclera_type = "სხვა";
    }

    if ($row['sclera'] == 1) {
        $sclera = "უცვლელი";
    } elseif ($row['sclera'] == 2) {
        $sclera = "ჰიპერემიული";
    } elseif ($row['sclera'] == 3) {
        $sclera = "მუქი იისფერი";
    } elseif ($row['sclera'] == 4) {
        $sclera = "მორუხო";
    } elseif ($row['sclera'] == 5) {
        $sclera = "კვანძოვანი სიწითლე";
    } elseif ($row['sclera'] == 6) {
        $sclera = "სტაფილომა";
    }

    if ($row['sclera_location'] == 1) {
        $location = "D";
    } elseif ($row['sclera_location'] == 2) {
        $location = "S";
    } elseif ($row['sclera_location'] == 3) {
        $location = "D,S";
    }
    $data[] = array(
        "id" => $row['id'],
        "sclera_type" => $sclera_type,
        "sclera" => $sclera,
        "sclera_text" => $row['sclera_text'],
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
