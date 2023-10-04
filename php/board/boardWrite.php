<?php
    include "../connect/connect.php";
    include "../connect/session.php";

    // echo "<pre>";
    // var_dump($_SESSION);
    // echo "</pre>";
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP 블로그 만들기</title>
    <?php include "../include/head.php"?>
</head>


<body class="gray">
    <?php include "../include/skip.php" ?>
    <!-- skip -->

    <?php include "../include/header.php" ?>
    <!-- header -->

    <main id="main" role="main">
        <div class="intro_inner container bmStyle">
            <div class="intro_img small">
                <img srcset="../assets/img/intro03.jpg 1x, ../assets/img/intro03@2x.jpg 2x, ../assets/img/intro03@3x.jpg 3x" alt="">
            </div>
            <div class="intro_text">
                <h2>게시글 작성하기</h2>
                <p>
                    웹디자이너, 웹 퍼블리셔, 프론트앤드 개발자를 위한 게시판입니다<br>게시글 작성은 여기서 해주세요!
                </p>
            </div>
        </div>
        <section class="board_inner container">
            <div class="board_write">
                <form action="boardWriteSave.php" name="boardWrite" method="post">
                    <fieldset>
                        <legend class="blind">게시글 작성하기</legend>
                        <div>
                            <label for="boardTitle">제목</label>
                            <input type="text" id="boardTitle" name="boardTitle" class="input_style">
                        </div>
                        <div>
                            <label for="boardContents">내용</label>
                            <textarea id="boardContents" name="boardContents" rows="20" class="input_style"></textarea>
                        </div>
                        <div class="board_btns">
                            <button type="submit" class="btn_style3">저장하기</button>
                        </div>
                    </fieldset>
                </form>
            </div>
        </section>
    </main>
<!-- //main -->
    
    <?php include "../include/footer.php" ?>
    <!-- footer -->
</body>
</html>