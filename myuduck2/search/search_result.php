<?php
include "../connect/connect.php";

if (isset($_GET['searchKeyword']) && isset($_GET['searchOption'])) {
    $searchOption = $connect->real_escape_string(trim($_GET['searchOption']));

    // $searchOption 값을 변경
    switch ($searchOption) {
        case 'all':
            $searchOption = '전체';
            break;
        case 'musical':
            $searchOption = '뮤지컬';
            break;
        case 'actor':
            $searchOption = '배우';
            break;
        case 'theater':
            $searchOption = '극장';
            break;
    }
}
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

                <h2><span><?php echo $searchOption; ?></span> 검색결과</h2>
                <div class="search_result_inner">
                    <div class="result_img">
                        <?php
                        error_reporting(E_ALL);
                        ini_set('display_errors', 1);

                        // $jsonData = file_get_contents("../json/mu_data.json");
                        // $data = json_decode($jsonData, true);

                        if (isset($_GET['searchKeyword']) && isset($_GET['searchOption'])) {
                            $searchKeyword = $connect->real_escape_string(trim($_GET['searchKeyword']));
                            $searchOption = $connect->real_escape_string(trim($_GET['searchOption']));

                            // 띄어쓰기 제거 및 소문자 변환
                            $cleanedSearchKeyword = strtolower(str_replace(" ", "", $searchKeyword));

                            $resultsExist = false;

                            // 뮤지컬(+all) 검색
                            if ($searchOption === 'musical' || $searchOption === 'all') {
                                $musicalResults = array();

                                // 한글로 검색
                                $sqlKorean = "SELECT muNameKo, muPlace, muImg FROM musical WHERE REPLACE(LOWER(muNameKo), ' ', '') LIKE '%$cleanedSearchKeyword%'";
                                $resultKorean = $connect->query($sqlKorean);

                                // 영어로 검색
                                $sqlEnglish = "SELECT muNameEn, muPlace, muImg FROM musical WHERE REPLACE(LOWER(muNameEn), ' ', '') LIKE '%$cleanedSearchKeyword%'";
                                $resultEnglish = $connect->query($sqlEnglish);

                                while ($row = $resultKorean->fetch_assoc()) {
                                    $musicalResults[] = $row;
                                }

                                while ($row = $resultEnglish->fetch_assoc()) {
                                    $musicalResults[] = $row;
                                }

                                if (!empty($musicalResults)) {
                                    $resultsExist = true;
                                    foreach ($musicalResults as $row) {
                                        $muPlace = $row['muPlace'];
                                        $imagePath = $row['muImg'];

                                        if ($searchOption === 'all' || $searchOption === 'musical') {
                                            $displayedMuNameEn = true;

                                            if (isset($row['muNameEn'])) {
                                                $muNameEn = $row['muNameEn'];
                                                echo '<div class="imgcontainer">';
                                                echo '<a href="#"><img src="' . $imagePath . '" alt=""></a>';
                                                echo '<div class="text">';
                                                echo '<div class="t1">' . $muNameEn . '</div>';
                                                echo '<div class="t2">' . $muPlace . '</div>';
                                                echo '</div>';
                                                echo '</div>';
                                            } else {
                                                $muNameEn = ''; // muNameEn 값이 없는 경우 빈 문자열로 설정
                                                $muNameKo = $row['muNameKo'];
                                                echo '<div class="imgcontainer">';
                                                echo '<a href="#"><img src="' . $imagePath . '" alt=""></a>';
                                                echo '<div class="text">';
                                                echo '<div class="t1">' . $muNameKo . '</div>';
                                                echo '<div class="t2">' . $muPlace . '</div>';
                                                echo '</div>';
                                                echo '</div>';
                                            }
                                        }
                                    }
                                }
                            }

                            // 배우(+all) 검색
                            if ($searchOption === 'actor' || $searchOption === 'all') {
                                $actorResults = array();

                                // 한글로 검색
                                $sqlKorean = "SELECT acNameKo, acImgDetail FROM actor WHERE REPLACE(LOWER(acNameKo), ' ', '') LIKE '%$cleanedSearchKeyword%'";
                                $resultKorean = $connect->query($sqlKorean);

                                // 영어로 검색
                                $sqlEnglish = "SELECT acNameEn, acImgDetail FROM actor WHERE REPLACE(LOWER(acNameEn), ' ', '') LIKE '%$cleanedSearchKeyword%'";
                                $resultEnglish = $connect->query($sqlEnglish);

                                while ($row = $resultKorean->fetch_assoc()) {
                                    $actorResults[] = $row;
                                }

                                while ($row = $resultEnglish->fetch_assoc()) {
                                    $actorResults[] = $row;
                                }

                                if (!empty($actorResults)) {
                                    $resultsExist = true;
                                    foreach ($actorResults as $row) {
                                        $imagePath = $row['acImgDetail'];

                                        if ($searchOption === 'all' || $searchOption === 'actor') {
                                            $displayedAcNameEn = true;

                                            if (isset($row['acNameEn'])) {
                                                $acNameEn = $row['acNameEn'];
                                                echo '<div class="imgcontainer">';
                                                echo '<a href="#"><img src="' . $imagePath . '" alt=""></a>';
                                                echo '<div class="text">';
                                                echo '<div class="t1">' . $acNameEn . '</div>';
                                                echo '</div>';
                                                echo '</div>';
                                            } else {
                                                $acNameEn = ''; // acNameEn 값이 없는 경우 빈 문자열로 설정
                                                $acNameKo = $row['acNameKo'];
                                                echo '<div class="imgcontainer">';
                                                echo '<a href="#"><img src="' . $imagePath . '" alt=""></a>';
                                                echo '<div class="text">';
                                                echo '<div class="t1">' . $acNameKo . '</div>';
                                                echo '</div>';
                                                echo '</div>';
                                            }
                                        }
                                    }
                                }

                                if (!$resultsExist) {
                                    echo '<div class="no_result"><p>' . "검색 결과가 없습니다." . '</p><img src="../assets/img/blueduck.png" alt="검색결과 없음 이미지"></div>';
                                }
                            }
                        }


                        ?>
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
    </script>
</body>

</html>