<?php
    include "../connect/connect.php";
    include "../connect/session.php";

    $boardTitle = $_POST['boardTitle'];
    $boardContents = $_POST['boardContents'];
    $memberID = $_SESSION['memberID'];
    $boardPass = $_POST['boardPass'];
    

    $boardTitle = $connect -> real_escape_string($boardTitle);
    $boardContents = $connect -> real_escape_string($boardContents);
    
    // // SQL 쿼리 작성
    // $sql = "UPDATE board SET boardTitle = '{$boardTitle}', boardContents = '{$boardContents}'";

    // // SQL 쿼리 실행
    // $result = $connect -> query($sql);

    // if ($result) {
    //     // 수정이 성공한 경우
    //     echo '<script>alert("수정이 완료되었습니다.");</script>';
    //     echo '<script>window.location.href = "board.php";</script>';
    // } else {
    //     // 수정이 실패한 경우
    //     echo '<script>alert("수정에 실패했습니다.");</script>';
    //     echo '<script>window.history.back();</script>';
    // }

    

    // 게시글의 비밀번호 확인
    $boardID = $_SESSION['boardID']; // 이 부분을 추가하여 게시글 ID를 받아옵니다.

    

    // SQL 쿼리 작성
    $sql = "SELECT boardPass FROM board WHERE boardID = {$boardID}";
    $result = $connect -> query($sql);

    if ($result) {
        $info = $result -> fetch_array(MYSQLI_ASSOC);
        $storedPass = $info['boardPass'];

        // 입력한 비밀번호와 저장된 비밀번호를 비교
        if (password_verify($boardPass, $storedPass)) { // 비밀번호가 일치하는 경우
            $sql = "UPDATE board SET boardTitle = '{$boardTitle}', boardContents = '{$boardContents}' WHERE boardID = {$boardID}";
            // SQL 쿼리 실행
            $result = $connect -> query($sql);

            if ($result) {
                // 수정이 성공한 경우
                echo '<script>alert("수정이 완료되었습니다.");</script>';
                echo '<script>window.location.href = "board.php";</script>';
            } else {
                // 수정이 실패한 경우
                echo '<script>alert("수정에 실패했습니다.");</script>';
                echo '<script>window.history.back();</script>';
            }
        } else { // 비밀번호가 일치하지 않는 경우
            echo '<script>alert("비밀번호가 틀렸습니다.");</script>';
            echo '<script>window.history.back();</script>';
        }
    } else {
        // 쿼리 실행에 실패한 경우
        echo '<script>alert("오류가 발생했습니다. 관리자에게 문의하세요.");</script>';
        echo '<script>window.history.back();</script>';
    }
?>