<?php
include "../connect/connect.php";
include "../connect/session.php";


$youId = mysqli_real_escape_string($connect, $_POST['youId']);
$youName = mysqli_real_escape_string($connect, $_POST['youName']);
$youEmail = mysqli_real_escape_string($connect, $_POST['youEmail']);
$youPass = mysqli_real_escape_string($connect, $_POST['youPass']);
$youAddress1 = mysqli_real_escape_string($connect, $_POST['youAddress1']);
$youAddress2 = mysqli_real_escape_string($connect, $_POST['youAddress2']);
$youAddress3 = mysqli_real_escape_string($connect, $_POST['youAddress3']);
$youPhone = mysqli_real_escape_string($connect, $_POST['youPhone']);
$youRegTime = time();

$sql = "INSERT INTO myMembers(youId, youName, youEmail, youPass, youAddress, youPhone, youRegTime) VALUES ('$youId', '$youName', '$youEmail', '$youPass', '$youAddress1 $youAddress2 $youAddress3', '$youPhone', '$youRegTime')";
$connect->query($sql);

//데이터 베이스 연결 닫기
mysqli_close($connect);
?>
<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP 블로그 만들기</title>
    <?php include "../include/head.php" ?>
</head>


<body class="gray">
    <?php include "../include/skip.php" ?>
    <!-- skip -->

    <?php include "../include/header.php" ?>
    <!-- header -->

    <main id="main" role="main">
        <div class="intro_inner bmStyle container">
            <div class="intro_img">
                <img srcset="../assets/img/main.jpg, ../assets/img/main@2x.jpg, ../assets/img/main@3x.jpg" alt="">
            </div>
            <div class="intro_text">
                어떤 일이라도 노력하고 즐기면 그 결과는 빛을 바란다고 생각합니다.<br>
                십입의 열정과 도전정신을 깊숙히 새기며 배움에 있어 겸손함을<br>
                유지하며 세부적인 곳까지 파고드는 개발자가 되겠습니다.<br>
            </div>
        </div>
        <section class="join_inner container">
            <h2>회원가입 완료</h2>
            <div class="join_index">
                <ul>
                    <li>1</li>
                    <li>2</li>
                    <li class="active">3</li>
                </ul>
            </div>
            <div class="join_result">
                <p>
                    회원가입을 축하드립니다. 환영합니다.<br>
                    로그인을 해주세요!
                </p>
                <div class="ce">
                    <div class="confetti-container anim-y anim-y-1">
                        <div class="confetti anim-x anim-x-1 cer-1 delay"></div>
                    </div>
                    <div class="confetti-container anim-y anim-y-1">
                        <div class="confetti anim-x anim-x-2 cer-2"></div>
                    </div>
                    <div class="confetti-container anim-y anim-y-1 delay">
                        <div class="confetti anim-x anim-x-3 cer-3 delay"></div>
                    </div>
                    <div class="confetti-container anim-y anim-y-1 delay">
                        <div class="confetti anim-x anim-x-4 cer-4"></div>
                    </div>

                    <div class="confetti-container anim-y anim-y-2">
                        <div class="confetti anim-x anim-x-1 cer-5"></div>
                    </div>
                    <div class="confetti-container anim-y anim-y-2 delay">
                        <div class="confetti anim-x anim-x-2 cer-6 delay"></div>
                    </div>
                    <div class="confetti-container anim-y anim-y-2">
                        <div class="confetti anim-x anim-x-3 cer-7"></div>
                    </div>
                    <div class="confetti-container anim-y anim-y-2 delay">
                        <div class="confetti anim-x anim-x-4 cer-8"></div>
                    </div>

                    <div class="confetti-container anim-y anim-y-3">
                        <div class="confetti anim-x anim-x-1 cer-1 delay"></div>
                    </div>
                    <div class="confetti-container anim-y anim-y-3 delay">
                        <div class="confetti anim-x anim-x-2 cer-2"></div>
                    </div>
                    <div class="confetti-container anim-y anim-y-3">
                        <div class="confetti anim-x anim-x-3 cer-3"></div>
                    </div>
                    <div class="confetti-container anim-y anim-y-3 delay">
                        <div class="confetti anim-x anim-x-4 cer-4"></div>
                    </div>

                    <div class="confetti-container anim-y anim-y-1">
                        <div class="confetti anim-x anim-x-4 cer-5"></div>
                    </div>
                    <div class="confetti-container anim-y anim-y-2">
                        <div class="confetti anim-x anim-x-4 cer-6 delay"></div>
                    </div>
                    <div class="confetti-container anim-y anim-y-3">
                        <div class="confetti anim-x anim-x-4 cer-7"></div>
                    </div>

                    <div class="confetti-container anim-y anim-y-1 delay">
                        <div class="confetti anim-x cer-5"></div>
                    </div>
                    <div class="confetti-container anim-y anim-y-2">
                        <div class="confetti anim-x cer-6"></div>
                    </div>
                    <div class="confetti-container anim-y anim-y-3">
                        <div class="confetti anim-x cer-7"></div>
                        <!-- <img src="../assets/img/Frame20.jpg" alt="회원가입완료축하">     -->
                    </div>
                </div>
                <button href="#" class="btn_style">로그인</button>
        </section>
    </main>
    <!-- //main -->

    <?php include "../include/footer.php" ?>
    <!-- footer -->
</body>

</html>