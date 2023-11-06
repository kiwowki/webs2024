<?php
include "../connect/connect.php";



// JSON 데이터를 배열로 변환
$dataActor = json_decode($jsonDataActor, true);
$dataMusical = json_decode($jsonDataMusical, true);

// 액터와 뮤지컬 테이블 조인
foreach ($dataActor as $actor) {
    $acName = $actor['acName'];

    foreach ($actor['acPerform'] as $perform) {
        $sql = "SELECT m.muNameKo, m.muDate FROM musical m
                INNER JOIN actor a ON m.muNameKo = '$perform'
                WHERE a.acName = '$acName'";

        $result = $connect->query($sql);

        if ($result) {
            while ($row = $result->fetch_assoc()) {
                $muNameKo = $row['muNameKo'];
                $muDate = $row['muDate'];
                echo "<p>{$muNameKo} ($muDate)</p>";
            }
            $result->free();
        } else {
            echo "오류: " . $sql . "<br>" . $connect->error;
        }
    }
}

$connect->close();

?>
<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MYUDUCK</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/commons2.css">
    <style>

    </style>
</head>

<body>
    <?php include "../include/header.php" ?>
    <!-- //header -->


    <div class="fix_image">
        <img src="../assets/img/category_musical.png" alt="이미지" class="intro_img">
    </div>

    <main id="category_wrap">
        <div class="category_inner container">
            <h1>뮤지컬 배우</h1>
            <div class="actor_list">
                <div class="actor_header">
                    <span class="actor">배우</span><span class="occupation">직업</span><span class="recent-performance">최근
                        공연</span>
                </div>
                <div class="actor_main">
                    <div class="actor-card">
                        <div class="info_actor">
                            <a href="category_ac_detail.html"><img src="../assets/img/actor/ac_JeonDong-seok.jpg" alt="전동석 사진"></a>
                            <h2><a href="category_ac_detail.html">전동석</a></h2>
                        </div>
                        <div class="info_occupation">
                            <p>뮤지컬 배우</p>
                        </div>
                        <div class="info_perform">
                            <p>드라큘라(2023)<br>브랜든 리 심포니 OST 콘서트(2023)<br>오페라의 유령(2023)</p>
                        </div>
                    </div>

                    <div class="actor-card">
                        <div class="info_actor">
                            <a href="#"><img src="../assets/img/actor/ac_YoonEun-chae.jpg" alt="윤은채 사진"></a>
                            <h2><a href="#">윤은채</a></h2>
                        </div>
                        <div class="info_occupation">
                            <p>뮤지컬 배우<br>연극 배우</p>
                        </div>
                        <div class="info_perform">
                            <p>은밀하게 위대하게(2017)<br>챠이카(2016)<br>레베카(2016)</p>
                        </div>
                    </div>

                    <div class="actor-card">
                        <div class="info_actor">
                            <a href="#"><img src="../assets/img/actor/ac_ChoSeungwoo.jpg" alt="조승우 사진"></a>
                            <h2><a href="#">조승우</a></h2>
                        </div>
                        <div class="info_occupation">
                            <p>뮤지컬 배우</p>
                        </div>
                        <div class="info_perform">
                            <p>오페라의 유령(2023)<br>헤드윅(2021)<br>맨 오브 라만차(2021)</p>
                        </div>
                    </div>

                    <div class="actor-card">
                        <div class="info_actor">
                            <a href="#"><img src="../assets/img/actor/ac_ChoiNakhee.jpg" alt="최낙희 사진"></a>
                            <h2><a href="#">최낙희</a></h2>
                        </div>
                        <div class="info_occupation">
                            <p>뮤지컬 배우</p>
                        </div>
                        <div class="info_perform">
                            <p>검사와 여선생(2021)<br>렌드 미 어 테너(2019)<br>아이언 마스크(2018)</p>
                        </div>
                    </div>

                    <div class="actor-card">
                        <div class="info_actor">
                            <a href="#"><img src="../assets/img/actor/ac_KimJunsu.jpg" alt="김준수 사진"></a>
                            <h2><a href="#">김준수</a></h2>
                        </div>
                        <div class="info_occupation">
                            <p>뮤지컬 배우<br>가수</p>
                        </div>
                        <div class="info_perform">
                            <p>드라큘라(2023)<br>데스노트 - 부산(2023)<br>데스노트(2023)</p>
                        </div>
                    </div>

                    <div class="actor-card">
                        <div class="info_actor">
                            <a href="#"><img src="../assets/img/actor/ac_YuYeon.jpg" alt="유연 사진"></a>
                            <h2><a href="#">유연</a></h2>
                        </div>
                        <div class="info_occupation">
                            <p>뮤지컬 배우</p>
                        </div>
                        <div class="info_perform">
                            <p>시스터즈(2023)<br>템플 - 고양(2023)<br>작은 아씨들(2021)</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <?php include "../include/footer.php" ?>
    <!-- //footer -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>

    </script>
</body>

</html>