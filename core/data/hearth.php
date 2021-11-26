<?php 
include '../config.php';
require_once '../functions.php';
$conn=getDB();
if($_GET["visit_id"]){
   $where = "WHERE visit_id=".$_GET["visit_id"];
}else{
   $where= "";
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
$stmt = $conn->prepare("SELECT COUNT(1) + (select count(1) from patient_blood_circulation_system  $where ) AS allcount FROM patient_respiratory_system  $where");
$stmt->execute();
$records = $stmt->fetch();
$totalRecords = $records['allcount'];

## Total number of records with filtering
$stmt = $conn->prepare("SELECT COUNT(1) + (select count(1) from patient_blood_circulation_system  $where ) AS allcount FROM patient_respiratory_system  $where");
$stmt->execute($searchArray);
$records = $stmt->fetch();
$totalRecordwithFilter = $records['allcount'];




## Fetch records
$stmt = $conn->prepare("SELECT id, visit_id, reg_date , reg_name , position , structure , 1 as type from patient_blood_circulation_system $where 
union all 
SELECT id, visit_id, reg_date , reg_name , position , structure , 2 as type from patient_respiratory_system  $where ORDER BY ".$columnName." ".$columnSortOrder." LIMIT :limit,:offset");


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
$name="";
if($row["type"]==1){
    $name ="სისხლის მიმოქცევის სისტემა";
}elseif($row["type"]==2){
    $name="სასუნთქი სისტემა";
}
   
 
      $data[] = array(
     "id"=>$row['id'],
	  "reg_date"=>$row['reg_date'],
     "reg_name"=>$row['reg_name'],
     "position"=>$row['position'],
	  "structure"=>$row['structure'],
      "type"=>$row["type"],
      "record"=>$name
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