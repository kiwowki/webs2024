<?php
include "../connect/connect.php";


?>

<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS -->
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/commons2.css">

    <title>MYUDUCK</title>
    <style>
    </style>
</head>

<body>
    <?php include "../include/header.php" ?>
    <!-- //header -->

    <main id="search">
        <div class="search_inner container">
            <div class="search_logo">
                <img src="../assets/img/duck_all_search.png" alt="오페라글래스낀뮤덕로고">
            </div>
            <form action="search_result.php" method="GET">
                <fieldset class="all_search">
                    <legend class="blind">검색 영역</legend>
                    <input type="search" name="searchKeyword" id="searchKeyword" placeholder="검색어를 입력하세요." required>
                    <select name="searchOption" id="searchOption">
                        <option value="all">전체</option>
                        <option value="theater">극장</option>
                        <option value="musical">뮤지컬</option>
                        <option value="actor">배우</option>
                    </select>
                    <button type="submit">검색</button>
                </fieldset>
            </form>
            <div class="category">
                <span><a href="theater.html">극장</a></span>
                <span><a href="musical.html">뮤지컬</a></span>
                <span><a href="actor.html">배우</a></span>
            </div>
        </div>
    </main>
    <!-- //main -->

    <?php include "../include/footer.php" ?>
    <!-- //footer -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="../script/commons.js"></script>
    <script>

    </script>
</body>

</html>