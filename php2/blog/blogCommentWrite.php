<?php
    include "../connect/connect.php";

    $blogId = $_POST['blogId'];
    $memberId = $_POST['memberId'];
    $commentName = $_POST['name'];
    $commentPass = $_POST['pass'];
    $commentWrite = $_POST['msg'];
    $regTime = time();

    $sql = "INSERT INTO blogComment(memberId, blogId, commentName, commentPass, commentMsg, commentDelete, regTime) VALUE('$memberId', '$blogId', '$commentName', '$commentPass', '$commentWrite', '1', '$regTime')";
    $result = $connect -> query($sql);

    echo json_encode(array("info" => $blogId));

?>