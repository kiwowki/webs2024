<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>게시판 글쓰기 세이브</title>
</head>
<body>
<?php
    include "../connect/connect.php";
    include "../connect/session.php";

    $boardTitle = $_POST['boardTitle'];
    $boardContents = $_POST['boardContents'];
    $youName = $_SESSION['youName'];   //
    $boardView = 1;
    $regTime = time();
    $memberID = $_SESSION['memberID'];

    // echo $boardTitle, $boardContents, $memberID;


    // 세션을 통해 사용자가 로그인되어 있는지 확인
    session_start();

    // 로그인된 사용자인지 확인
    if (!isset($_SESSION['memberID'])) {
        // 사용자가 로그인되어 있지 않으면, 로그인 페이지로 리다이렉트 또는 에러 메시지를 표시할 수 있습니다.
        // 예: header('Location: login.php');
        // 또는 사용자에게 메시지 표시
        echo '<script>alert("로그인 후에 게시글을 작성할 수 있습니다.");</script>';
        echo '<script>window.history.back();</script>'; // 이전 페이지로 돌아가기
        // echo '<script>window.location.href = "../login/login.php";</script>'; // 로그인 페이지로 이동
    } else {

        // 제목이나 콘텐츠 내용 하나라도 없으면 등록이 안되게 하기
        if (empty($boardTitle) || empty($boardContents)) {
            echo '<script>alert("제목과 콘텐츠 내용은 필수 입력 항목입니다.");</script>';
            echo '<script>window.history.back();</script>'; // 이전 페이지로 돌아가기
        } else {
            $boardTitle = $connect -> real_escape_string($boardTitle);
            $boardContents = $connect -> real_escape_string($boardContents);
        
            $sql = "INSERT INTO board(memberID, boardTitle, boardContents, youName, boardView, regTime)VALUES('$memberID', '$boardTitle', '$boardContents', '$youName', '$boardView', '$regTime')";
        
            $connect -> query($sql);
    
            echo '<script>alert("게시글이 작성되었습니다.");</script>';
            // Header("Location: /board.php");
            echo '<script>window.location.href = "board.php";</script>';
        }
    }
?>
</body>
</html>