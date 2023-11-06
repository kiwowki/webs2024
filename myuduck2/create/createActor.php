<?php
include "../connect/connect.php";

$sql = "CREATE TABLE actor (";
$sql .= "actorId int(10) unsigned auto_increment,";
$sql .= "acNameKo varchar(100) NOT NULL,";
$sql .= "acNameEn varchar(100) NOT NULL,";
$sql .= "acOccupation varchar(50) NOT NULL,";
$sql .= "acDOB varchar(20) NOT NULL,";

$sql .= "PRIMARY KEY (actorId)";
$sql .= ") charset=utf8";

$result = $connect->query($sql);

if($result){
    echo "Create Actor Table Complete";
} else {
    echo "Create Actor Table False";
}
?>