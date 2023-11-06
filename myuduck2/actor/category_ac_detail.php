<?php
include "../connect/connect.php";

if (isset($_GET['actorId'])) {
    $actorId = $_GET['actorId'];
} else {
    // actorId가 지정되지 않은 경우의 기본값 설정
    $actorId = 0;
}

// 배우 상세 정보 가져오기
$actorsWithPerformances = array();

$sql = "SELECT * FROM actor WHERE actorId = $actorId"; 
$result = $connect->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $acNameKo = $row['acNameKo'];
        $acNameEn = $row['acNameEn'];
        $acOccupation = $row['acOccupation'];
        $acDOB = $row['acDOB'];

        // 연극 정보 가져오기
        $sql2 = "SELECT * FROM ac_perform WHERE actorId = " . $row['actorId'];
        $result2 = $connect->query($sql2);
        $performances = array();

        if ($result2->num_rows > 0) {
            while ($row2 = $result2->fetch_assoc()) {
                $acPerformName = $row2['acPerformName'];
                $acPerformDate = $row2['acPerformDate'];
                $acPerformPlace = $row2['acPerformPlace'];
                $acPerformRole = $row2['acPerformRole'];

                // 배우와 연극 정보를 배열에 추가
                $performances[] = "$acPerformName($year)";
            }
        }

        // 배우 정보와 연극 정보를 묶어서 배열에 저장
        $actorsWithPerformances[] = array(
            'actorId' => $row['actorId'],
            'acNameKo' => $acNameKo,
            'acNameEn' => $acNameEn,
            'acOccupation' => $acOccupation,
            'acDOB' => $acDOB,
            'performances' => $performances
        );
    }
}
?>
<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MYUDUCK</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/commons2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>

<body>
    <?php include "../include/header.php" ?>
    <!-- //header -->


    <div class="dtail_fix_image">
        <img src="../assets/img/detail_image.jpg" alt="이미지" class="intro_img">
        <div class="intro_actor">

            <div class="image_wrap">
                <div>
                    <button class="like-button">☆ 찜버튼</button>
                </div>
                <img src="../assets/img/actor/acd_JeonDong-Seok.jpg" alt="전동석 사진2">
            </div>
            <div class="intro_info">
                <div class="name">
                    <h1><?= $acNameKo ?></h1>
                    <h1><?= $acNameEn ?></h1>
                </div>
                <p class="occupation">직업 : <?= $acOccupation ?></p>
                <p class="birthdate">생년월일 : <?= $acDOB ?></p>
                <div class="rating">
                    <span class="rating_result">
                    </span>
                    <i class="rating_star far fa-star"></i>
                    <i class="rating_star far fa-star"></i>
                    <i class="rating_star far fa-star"></i>
                    <i class="rating_star far fa-star"></i>
                    <i class="rating_star far fa-star"></i>
                </div>
            </div>
        </div>
    </div>

    <main id="category_ac_wrap">
        <div class="category_ac_inner">
            <div class="main_actor container">
                <h3>배우 정보 <span>Actor information</span></h3>
                <div class="main_actor_title">
                    <h4>현재 출연작 & 출연 예정작</h4>
                </div>
                <div class="recent_work">
                    <div class="work-card">
                        <div class="ac_img_wrap">
                            <img src="../assets/img/actor/ac_work0<?=$actorsWithPerformances['actorId'].$actorId?>.jpg" alt="ac_work0<?=$actorsWithPerformances['actorId'].$actorId?>">
                        </div>
                        <div class="ac_text_wrap">
                            <h3 class="ac_musical"><?= $actorsWithPerformances['performances'].$acPerformName ?></h3>
                            <p class="ac_date"><?= $actorsWithPerformances['performances'].$acPerformDate ?></p>
                            <p class="ac_theater"><?= $actorsWithPerformances['performances'].$acPerformPlace ?></p>
                            <p class="ac_role"><?= $actorsWithPerformances['performances'].$acPerformRole ?></p>
                        </div>
                    </div>
                    <!-- //work-card t1 -->

                    <div class="work-card">
                        <div class="ac_img_wrap">
                            <img src="../assets/img/actor/ac_work02.jpg" alt="ac_work02">
                        </div>
                        <div class="ac_text_wrap">
                            <h3 class="ac_musical">브랜든 리 심포니 OST 콘서트</h3>
                            <p class="ac_date">2023.10.17 ~ 2023.10.18</p>
                            <p class="ac_theater">세종문화회관 대극장</p>
                            <p class="ac_role">바이올린 역</p>
                        </div>
                    </div>
                    <!-- //work-card t2 -->

                    <div class="work-card">
                        <div class="ac_img_wrap">
                            <img src="../assets/img/actor/ac_work03.jpg" alt="ac_work03">
                        </div>
                        <div class="ac_text_wrap">
                            <h3 class="ac_musical">오페라의 유령</h3>
                            <p class="ac_date">2023.07.21 ~ 2023.11.19</p>
                            <p class="ac_theater">샤롯데씨어터</p>
                            <p class="ac_role">오페라의 유령 역</p>
                        </div>
                    </div>
                    <!-- //work-card t2 -->
                </div>
            </div>
        </div>
    </main>



    <?php include "../include/footer.php" ?>
    <!-- //footer -->


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="../script/star.js"></script>
    <script>

    </script>
</body>

</html>