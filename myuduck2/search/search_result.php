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
            <div class="search_result_logo">
                <img src="../assets/img/redduck.jpg" alt="오페라글래스낀뮤덕로고">
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
            <div class="search_result">
                <h2><span>뮤지컬</span> 검색결과</h2>
                <div class="search_result_inner">
                    <div class="result_img">
                        <div class="img1 imgcontainer">
                            <a href="#"><img src="../assets/img/musical/ca_mu_img1.jpg" alt=""></a>
                            <div class="text">
                                <div class="t1">빨래</div>
                                <div class="t2">샤롯데씨어터</div>
                            </div>
                        </div>

                        <div class="img2 imgcontainer">
                            <a href="#"><img src="../assets/img/musical/ca_mu_img2.jpg" alt=""></a>
                            <div class="text">
                                <div class="t1">오페라의 유령</div>
                                <div class="t2">샤롯데씨어터</div>
                            </div>
                        </div>
                        insert_data.php
                        <div class="img3 imgcontainer">
                            <a href="#"><img src="../assets/img/musical/ca_mu_img3.jpg" alt=""></a>
                            <div class="text">
                                <div class="t1">레미제라블</div>
                                <div class="t2">블루스퀘어</div>    
                            </div>
                        </div>

                        <div class="img4 imgcontainer">
                            <a href="#"><img src="../assets/img/musical/ca_mu_img4.jpg" alt=""></a>
                            <div class="text">
                                <div class="t1">웃는 남자</div>
                                <div class="t2">예술의전당</div>
                            </div>
                        </div>

                        <div class="img5 imgcontainer">
                            <a href="#"><img src="../assets/img/musical/ca_mu_img5.jpg" alt=""></a>
                            <div class="text">
                                <div class="t1">더 데빌</div>
                                <div class="t2">충무아트센터</div>
                            </div>
                        </div>
                    </div>
                </div>
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