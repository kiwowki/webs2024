<?php
include "../connect/connect.php";

$sql = "CREATE TABLE musical (";
$sql .= "muNameKo varchar(100) NOT NULL,";
$sql .= "muNameEn varchar(100) NOT NULL,";
$sql .= "muPlace varchar(50) NOT NULL,";
$sql .= "muDate YEAR NOT NULL,";
$sql .= "unique_identifier varchar(200) NOT NULL,";
$sql .= "PRIMARY KEY (unique_identifier)";
$sql .= ") charset=utf8";

$result = $connect->query($sql);

if($result){
    echo "Create Tables Complete";
} else {
    echo "Create Tables False";
}
?>