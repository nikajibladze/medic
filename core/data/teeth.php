<?php
include '../config.php';
require_once '../functions.php';
$conn = getDB();
$sight = '';
if ($_GET["mounth_id"]) {
    $where = "WHERE mounth_id=" . $_GET["mounth_id"];
} else {
    $where = "WHERE mounth_id IS NULL";
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
$stmt = $conn->prepare("SELECT COUNT(*) AS allcount FROM patient_mouth_teeth $where");
$stmt->execute();
$records = $stmt->fetch();
$totalRecords = $records['allcount'];

## Total number of records with filtering
$stmt = $conn->prepare("SELECT COUNT(*) AS allcount FROM patient_mouth_teeth $where");
$stmt->execute($searchArray);
$records = $stmt->fetch();
$totalRecordwithFilter = $records['allcount'];

## Fetch records
$stmt = $conn->prepare("SELECT * FROM patient_mouth_teeth $where ORDER BY  id desc LIMIT :limit,:offset");

// Bind values
foreach ($searchArray as $key => $search) {
    $stmt->bindValue(':' . $key, $search, PDO::PARAM_STR);
}

$stmt->bindValue(':limit', (int) $row, PDO::PARAM_INT);
$stmt->bindValue(':offset', (int) $rowperpage, PDO::PARAM_INT);
$stmt->execute();
$empRecords = $stmt->fetchAll();

$data = array();
// $condition = array();
foreach ($empRecords as $row) {

    $condition = array();
    $id = $row['id'];
    //$condition = 1;
    if ($row['non_carious_disease'] == 1) {
        $condition[] = "არაკარიესული დაავადება";
    }
    if ($row['caries'] == 1) {
        $condition[] = "კარიესი";
    }
    if ($row['pulpit'] == 1) {
        $condition[] = "პულპიტი";
    }
    if ($row['bjeni'] == 1) {
        $condition[] = "ბჟენი";
    }
    if ($row['periodontitis'] == 1) {
        $condition[] = "პერიოდონტიტი";
    }
    if ($row['adentia_uncut'] == 1) {
        $condition[] = "ადენტია (ამოუჭრელი)";
    }
    if ($row['adentia'] == 1) {
        $condition[] = "ადენტია";
    }
    if ($row['adentia_retensive'] == 1) {
        $condition[] = "ადენტია (რეტენციული)";
    }
    if ($row['vibration_1'] == 1) {
        $condition[] = "მორყევის ხარისხი I";
    }
    if ($row['vibration_2'] == 1) {
        $condition[] = "მორყევის ხარისხი II";
    }
    if ($row['vibration_3'] == 1) {
        $condition[] = "მორყევის ხარისხი III";
    }
    if ($row['implant'] == 1) {
        $condition[] = "იმპლანტატი";
    }
    if ($row['artificial_crown'] == 1) {
        $condition[] = "ხელოვნური გვირგვინი";
    }
    if ($row['bridge_prosthesis'] == 1) {
        $condition[] = "ხიდისებური პროთეზი";
    }
    if ($row['removable_prosthesis'] == 1) {
        $condition[] = "მოსახსნელი პროთეზი";
    }
    if ($row['teeth_root'] == 1) {
        $condition[] = "ფესვი";
    }
    if ($row['healthy'] == 1) {
        $condition[] = "ჯანმრთელი";
    }

    $condition2 = implode(',', $condition);

    $data[] = array(
        "id" => $row['id'],
        "teeth_number" => $row['teeth_number'],
        "conditon" => $condition2,

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
