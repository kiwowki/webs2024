<?php 
    include "../connect/session.php";

    unset($_SESSION['memberID']);
    unset($_SESSION['youEmail']);
    unset($_SESSION['youName']);

    header("Location: ../main/main.php");
?>
