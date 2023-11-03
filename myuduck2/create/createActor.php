<?php
include "../connect/connect.php";

$sql = "CREATE TABLE actor (";
$sql .= "actorId int(10) unsigned auto_increment,";
$sql .= "acName varchar(100) NOT NULL,";
$sql .= "acOccupation varchar(50) NOT NULL,";
$sql .= "acPerform text NOT NULL,";

$sql .= "PRIMARY KEY (actorId)";
$sql .= ") charset=utf8";

$result = $connect->query($sql);

if($result){
    echo "Create Tables Complete";
} else {
    echo "Create Tables False";
}
?>