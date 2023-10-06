<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>
<?php
    // echo "<pre>";
    // var_dump($_SESSION);
    // echo "</pre>";

    include "../connect/connect.php";
    include "../connect/session.php";

    $boardID = $_GET['boardID'];
    $memberID = $_SESSION['memberID'];  


    // 로그인 한 사람만 지우기
    if (isset($_SESSION['memberID'])) {
        // 게시글 소유자 확인
        $sql = "SELECT memberID FROM board WHERE boardID = {$boardID}";
        $result = $connect -> query($sql);

        if ($result) {
            $info = $result -> fetch_array(MYSQLI_ASSOC);
            $boardOwnerID = $info['memberID'];

            // 로그인 멤버ID 게시글 멤버ID 일치 여부
            if($memberID === $boardOwnerID) {
                $sql = "DELETE FROM board WHERE boardID = {$boardID}";
                $connect -> query($sql);
                echo '<script>alert("게시글이 삭제되었습니다.");</script>';
            }else {
                // 작성자와 다른 경우
                echo '<script>alert("지울 수 있는 권한이 없습니다. 자신의 글만 삭제할 수 있습니다.");</script>';
            }
        } else {
            echo '<script>alert("관리자에게 문의해주세요.");</script>';
        }
    } else {
        echo '<script>alert("로그인이 필요합니다. 로그인 후 다시 시도해주세요.");</script>';
    }

    // if (isset($_SESSION['memberID'])) {
    //     

    //     // 로그인하지 않은 경우
    //     echo '<script>alert("로그인이 필요합니다. 로그인 후 다시 시도해주세요.");</script>';
    // } else {
    //     if ($result) {
    //         $row = $result->fetch_assoc();
    //         $writerID = $row['memberID'];
            
    //         // 작성자와 로그인한 사용자가 동일한 경우
    //         if (isset($_SESSION['memberID']) && $memberID === $writerID) {
    //             // 작성자와 동일한 경우 글 삭제 가능
    //             $deleteSQL = "DELETE FROM board WHERE boardID = {$boardID}";
    //             $connect->query($deleteSQL);
    //             echo '<script>alert("삭제가 완료되었습니다.");</script>';
    //         } else {
    //             // 작성자와 다른 경우
    //             echo '<script>alert("지울 수 있는 권한이 없습니다. 자신의 글만 삭제할 수 있습니다.");</script>';
    //         }
    //     }
    // }


?>

<script>
    location.href = "board.php";
</script>
</body>
</html>