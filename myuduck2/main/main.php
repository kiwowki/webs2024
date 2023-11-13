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
    <title>MYUDUCK</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/commons2.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
</head>

<body>
    <?php include "../include/header.php" ?>
    <!-- //header -->

    <main id="main" role="main">
        <section id="sliderWrap">
            <div class="swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="slider_img">
                            <img src="../assets/img/slide01.jpg" alt="레베카 슬라이드 이미지">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="slider_img">
                            <img src="../assets/img/slide02.jpg" alt="시스터즈 슬라이드 이미지">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="slider_img">
                            <img src="../assets/img/slide03.jpg" alt="레미제라블 슬라이드 이미지">
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>

                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>

                <div class="swiper-button">
                    <div class="swiper-button-play"></div>
                    <div class="swiper-button-stop"></div>
                </div>
            </div>
        </section>
        <!-- </section> -->

        <section id="introWrap">
            <div class="intro_inner">
                <div class="container3">
                    <div class="intro_img">
                        <div class="img1">
                            <img src="../assets/img/slide01.jpg" alt="멤버십1" aria-hidden="true">
                        </div>
                        <div class="img2">
                            <img src="../assets/img/slide01.jpg" alt="멤버십2" aria-hidden="true">
                        </div>
                        <div class="img3">
                            <img src="../assets/img/slide01.jpg" alt="멤버십3">
                        </div>
                    </div>
                    <div class="intro_text">
                        <h3>머물수록<br />즐거움이 쌓이는<br /><em>현대백화점</em> 포인트</h3>
                        <p>현대백화점그룹 라이프스타일 멤버십<br /> H.Point로 쌓고 즐기고 나누는 새로운 일상</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- //introWrap -->

        <section id="pointUse">
            <div class="use_inner">
                <div class="container3">
                    <div class="use_title">
                        <h3>포인트 <em>쓰기</em> <span>의미있게 사용하는 가치있는 소비생활</span></h3>
                    </div>
                    <div class="use_img">
                        <div class="img1">
                            <figure>
                                <img src="assets/img/use01.jpg" alt="포인트 샵">
                                <figcaption>포인트 샵</figcaption>
                            </figure>
                            <p>H.Point로 하는 즐거운 소비생활</p>
                        </div>
                        <div class="img2">
                            <figure>
                                <img src="assets/img/use02.jpg" alt="포인트 기부">
                                <figcaption>포인트 기부</figcaption>
                            </figure>
                            <p>기부하는 당신이 세상의 영웅</p>
                        </div>
                        <div class="img3">
                            <figure>
                                <img src="assets/img/use03.jpg" alt="포인트 선물">
                                <figcaption>포인트 선물</figcaption>
                            </figure>
                            <p>친구끼리 포인트 선물은 어때요?</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="pointUp">
            <div class="up_inner">
                <div class="container3">
                    <div class="up_title">
                        <h3>포인트 <em>쌓기</em> <span>즐거움이 매일매일 쌓이는 포인트 플레이</span></h3>
                    </div>
                    <div class="up_slider">
                        <div class="img">
                            <div>
                                <img src="assets/img/up01.png" alt="H.설문">
                                <span>H.설문</span>
                                <em>간단한 설문에 혜택이 빵빵!</em>
                            </div>
                            <div>
                                <img src="assets/img/up03.png" alt="오늘의 퀴즈">
                                <span>오늘의 퀴즈</span>
                                <em>간단히 포인트 받자!</em>
                            </div>
                            <div class="active">
                                <img src="assets/img/up02.png" alt="알파벳">
                                <span>알파벳</span>
                                <em>조합하고 완성하는 재미</em>
                            </div>
                            <div>
                                <img src="assets/img/up05.png" alt="출석룰렛">
                                <span>출석룰렛</span>
                                <em>매일 돌리면 포인트</em>
                            </div>
                            <div>
                                <img src="assets/img/up04.png" alt="포인트 워크">
                                <span>포인트 워크</span>
                                <em>걸으면서 받는 포인트</em>
                            </div>
                        </div>
                        <div class="btn">
                            <a href="#" class="left"><span class="ir">왼쪽 이미지</span></a>
                            <a href="#" class="right"><span class="ir">오른쪽 이미지</span></a>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- //pointUp -->
        <section id="download">
            <div class="download_inner">
                <div class="download_title">
                    <h3>포인트를 가장 빠르고 재밌게 모으는 방법</h3>
                    <p>H.POINT APP에 다 있다.</p>
                </div>
                <div class="download_img">
                    <div class="img">
                        <img src="assets/img/download01.png" alt="h.point">
                    </div>
                    <div class="btn">
                        <a href="#">앱다운로드 바로가기</a>
                    </div>
                </div>
                <div class="download_bg" aria-label="true">
                    <img src="assets/img/download02.png" alt="H.Point">
                </div>
            </div>
        </section>
        <!-- //download -->
    </main>
    <!-- //main -->

    <?php include "../include/footer.php" ?>
    <!-- //footer -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    <script src="../script/commons.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script>
        // let swiper = new Swiper(".swiper", {
        //     navigation: {
        //         nextEl: ".swiper-button-next",
        //         prevEl: ".swiper-button-prev",
        //     },
        //     autoplay: {
        //         delay: 4000,
        //         disableOnInteraction: false,
        //     },
        //     pagination: {
        //         el: ".swiper-pagination",
        //         clickable: true,
        //     },
        // });

        // const btnStop = document.querySelector(".swiper-button-play")
        // const btnPlay = document.querySelector(".swiper-button-stop")

        // btnStop.addEventListener("click", () => {
        //     swiper.autoplay.stop();
        // })
        // btnPlay.addEventListener("click", () => {
        //     swiper.autoplay.start();
        // })

        let swiper = new Swiper(".swiper", {
            loop: true, // 무한 루프 활성화
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            autoplay: {
                delay: 4000,
                disableOnInteraction: false,
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
        });

        const btnStop = document.querySelector(".swiper-button-play")
        const btnPlay = document.querySelector(".swiper-button-stop")

        btnStop.addEventListener("click", () => {
            swiper.autoplay.stop();
        })

        btnPlay.addEventListener("click", () => {
            swiper.autoplay.start();
        })
    </script>
</body>

</html>