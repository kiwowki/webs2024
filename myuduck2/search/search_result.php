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
            <form action="search_result.php" name="search_result" method="get">
                <fieldset class="all_search">
                    <legend class="blind">검색 영역</legend>
                    <input type="search" name="searchKeyword" id="searchKeyword" placeholder="검색어를 입력하세요." required>
                    <select name="searchOption" id="searchOption">
                        <option value="all">전체</option>
                        <option value="theater">극장</option>
                        <option value="musical">뮤지컬</option>
                        <option value="actor">배우</option>
                    </select>
                    <button type="submit" id="searchButton">검색</button>
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
                                <?php
                                error_reporting(E_ALL);
                                ini_set('display_errors', 1);

                                if (isset($_GET['searchKeyword']) && isset($_GET['searchOption'])) {
                                    $searchKeyword = $_GET['searchKeyword'];
                                    $searchOption = $_GET['searchOption'];

                                    $searchKeyword = $connect->real_escape_string(trim($searchKeyword));
                                    $searchOption = $connect->real_escape_string(trim($searchOption));

                                    if ($searchOption === 'musical' || $searchOption === 'all') {
                                        $sql = "SELECT muNameKo, muPlace FROM musical WHERE muNameKo LIKE '%$searchKeyword%'";
                                        $result = $connect->query($sql);

                                        if ($result) {
                                            while ($row = $result->fetch_assoc()) {
                                                $muNameKo = $row['muNameKo'];
                                                $muPlace = $row['muPlace'];
                                                echo '<div class="t1">' . $muNameKo . '</div>';
                                                echo '<div class="t2">' . $muPlace . '</div>';
                                            }
                                        } else {
                                            echo "검색 결과가 없습니다.";
                                        }
                                    }
                                }
                                ?>
                            </div>
                        </div>
                        <div class="img2 imgcontainer">
                            <a href="#"><img src="../assets/img/musical/ca_mu_img2.jpg" alt=""></a>
                            <div class="text">
                                <div class="t1">오페라의 유령</div>
                                <div class="t2">샤롯데씨어터</div>
                            </div>
                        </div>
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        // $(document).ready(function() {
        $("#searchButton").click(function() {
            if ($("#searchKeyword").val() == "") {
                alert("검색어를 작성해주세요.");
                $("#searchKeyword").focus();
            } else {
                const searchKeyword = $("#searchKeyword").val();
                const searchOption = $("#searchOption").val();
                alert(searchKeyword)
                $.ajax({
                    url: "search_musical.php",
                    method: "GET",
                    dataType: "json",
                    data: {
                        searchKeyword: searchKeyword,
                        searchOption: searchOption
                    },
                    success: function(results) {
                        displayResults(results);
                    },
                });
            }
        });
        // });

        function displayResults(results) {
            console.log(results);
            const resultContainer = $(".search_result_inner");
            resultContainer.empty();

            results.forEach(function(result) {
                const muNameKo = result.muNameKo;
                const muPlace = result.muPlace;

                const resultItem = $(
                    "<div class='imgcontainer'><a href='#'><img src='../assets/img/musical/ca_mu_img1.jpg'></a><div class='text'><div class='t1'>" + muNameKo + "</div><div class='t2'>" + muPlace + "</div></div></div>");

                resultContainer.append(resultItem);
            });
            console.log(results)
        }
    </script>
</body>

</html>