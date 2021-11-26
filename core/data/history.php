<?php 
include '../config.php';
require_once '../functions.php';
$conn=getDB();
## Read value
$draw = $_POST['draw'];
$row = $_POST['start'];
$rowperpage = $_POST['length']; // Rows display per page
$columnIndex = $_POST['order'][0]['column']; // Column index
$columnName = $_POST['columns'][$columnIndex]['data']; // Column name
$columnSortOrder = $_POST['order'][0]['dir']; // asc or desc
$searchValue = $_POST['search']['value']; // Search value
$searchArray = array();



## Total number of records without filtering
$stmt = $conn->prepare("SELECT COUNT(*) AS allcount FROM med_visits ");
$stmt->execute();
$records = $stmt->fetch();
$totalRecords = $records['allcount'];

## Total number of records with filtering
$stmt = $conn->prepare("SELECT COUNT(*) AS allcount FROM med_visits");
$stmt->execute($searchArray);
$records = $stmt->fetch();
$totalRecordwithFilter = $records['allcount'];

## Fetch records
$stmt = $conn->prepare("SELECT * FROM med_visits   ORDER BY id desc LIMIT :limit,:offset");

// Bind values
foreach($searchArray as $key=>$search){
   $stmt->bindValue(':'.$key, $search,PDO::PARAM_STR);
}

$stmt->bindValue(':limit', (int)$row, PDO::PARAM_INT);
$stmt->bindValue(':offset', (int)$rowperpage, PDO::PARAM_INT);
$stmt->execute();
$empRecords = $stmt->fetchAll();

$data = array();

foreach($empRecords as $row){
$id=$row['id'];
$edit = "<span class='badge badge-warning' onclick='getVisitRegiter($id,2)'><i class='fa fa-edit'></i></span>" . " " . "<span class='badge badge-danger' onclick=''><i class='fa fa-trash'></i></span>";
$condition = "";
  if($row['condition_type']==1){
     $condition = "სტაციონარი";
  }elseif($row['condition_type']==2){
   $condition = "ამბულატორია";
  }elseif($row['condition_type']==3){
   $condition = "ობსერვაცია";
  }
   
 
      $data[] = array(
     "id"=>$row['id'],
	  "reg_date"=>$row['reg_date'],
     "history_number"=>$row['history_number'],
     "personal_no"=>$row['personal_no'],
	  "first_name"=>$row['first_name'],
	  "last_name"=>$row['last_name'],
	  "doctor_id"=> getDoctor($row['doctor_id'],1),
     "doctor_structure"=> getDoctor($row['doctor_id'],2),
      "condition"=>$condition,
       "action"=>$edit,
       "history_id"=>$row["history_id"]
   );
}

## Response
$response = array(
   "draw" => intval($draw),
   "iTotalRecords" => $totalRecords,
   "iTotalDisplayRecords" => $totalRecordwithFilter,
   "aaData" => $data
);

echo json_encode($response);


?>