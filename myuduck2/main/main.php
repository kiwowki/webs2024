<?php
include "../connect/connect.php";


$sql = "SELECT * FROM musical ORDER BY musicalId DESC";
$result = $connect->query($sql);


if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $musicalId = $row['musicalId'];
        $muNameKo = $row['muNameKo'];
        $muPlace = $row['muPlace'];
        $muDate = $row['muDate'];
        $muTime = $row['muTime'];
        $muAge = $row['muAge'];
        $muImg = $row['muImg'];

        $musicalMainInfo[] = array(
            'musicalId' => $musicalId,
            'muNameKo' => $muNameKo,
            'muPlace' => $muPlace,
            'muDate' => $muDate,
            'muImg' => $muImg,
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
                            <img src="../assets/img/slide01.jpg" alt="">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="slider_img">
                            <img src="../assets/img/slide02.jpg" alt="">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="slider_img">
                            <img src="../assets/img/slide03.jpg" alt="">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="slider_img">
                            <img src="../assets/img/slide04.jpg" alt="">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="slider_img">
                            <img src="../assets/img/slide05.jpg" alt="">
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
                    <h2><span>new</span> 개봉예정 뮤지컬!</h2>
                    <div class="new_muWrap">
                        <?php for ($i = 0; $i < 5; $i++) : ?>
                            <?php $muInfo = $musicalMainInfo[$i]; ?>
                            <div class="new_musical n<?php echo $i + 1; ?>">
                                <div class="new_imgWrap">
                                    <img src="<?php echo $muInfo['muImg']; ?>" alt="<?php echo $muInfo['muNameKo']; ?> 이미지">
                                    <div class="new_overlay"></div>
                                </div>
                                <div class="new_text">
                                    <h3><?php echo $muInfo['muNameKo']; ?></h3>
                                    <span><?php echo $muInfo['muPlace']; ?></span>
                                    <p><?php echo $muInfo['muDate']; ?></p>
                                </div>
                            </div>
                        <?php endfor; ?>
                    </div>
                </div>
            </div>
        </section>
        <!-- //introWrap -->

        <section id="category_link">
            <div class="link_inner">
                <div class="container3">
                    <div class="link_img">
                        <div class="img1">
                            <p><em>Theater</em></p>
                            <figure>
                                <img src="../assets/img/link_theater.jpg" alt="극장 바로가기">
                                <figcaption>극장 카테고리<a href="../theater/category_theater.php">바로가기</a></figcaption>
                            </figure>
                        </div>
                        <div class="img2">
                            <p><em>Musical</em></p>
                            <figure>
                                <img src="../assets/img/link_musical.jpg" alt="뮤지컬 바로가기">
                                <figcaption>뮤지컬 카테고리<a href="../musical/category_musical.php">바로가기</a></figcaption>
                            </figure>
                        </div>
                        <div class="img3">
                            <p><em>Actor</em></p>
                            <figure>
                                <img src="../assets/img/link_actor.jpg" alt="배우 바로가기">
                                <figcaption>배우 카테고리<a href="../actor/category_actor.php">바로가기</a></figcaption>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="mainBoard">
            <div class="mainBoard_inner">
                <!-- <div class="container3"> -->
                <div class="main_review_wrap">
                    <h2 class="container3"><span>new</span> 후기 게시판 최신글!</h2>
                    <div class="main_review_wrap_img">
                        <figure>
                            <img src="../assets/img/aaa11.jpg" alt="후기 게시판 바로가기">
                            <figcaption>후기 게시판<a href="#">바로가기</a></figcaption>
                        </figure>
                    </div>
                    <div class="main_review_text">
                        <div class="text t1">
                            <h3><a href="#"><em>💬</em> 안녕하세요 "뮤덕" 후기입니다.</a></h3>
                            <p><a href="#">안녕하세요. 오늘도 행복했던 순간입니다. <br>
                                    뮤덕을 관람한 후 놀라운 음악과 아름다운 무대 연출에 감탄했습니다. 감동적인 스토리와 캐릭터들의 흥미진진한 모험이 펼쳐져, 관객들은 마음을 울리는 여정에 몰입했습니다.<br>
                                    뛰어난 연기력과 다채로운 무대 설정은 전체적으로 뮤지컬을 통해 특별한 순간을 만들어냈습니다.<br>
                                    "뮤덕"은 음악과 이야기의 조화로운 조합으로, 뮤지컬 팬들에게 꼭 추천하고 싶은 작품입니다.</a></p>
                        </div>
                        <div class="text t2">
                            <h3><a href="#"><em>💬</em> 안녕하세요 "오페라의 유령" 후기입니다!</a></h3>
                            <p><a href="#">안녕하세요. 오늘도 행복했던 순간입니다. <br>
                                    뮤덕을 관람한 후 놀라운 음악과 아름다운 무대 연출에 감탄했습니다. 감동적인 스토리와 캐릭터들의 흥미진진한 모험이 펼쳐져, 관객들은 마음을 울리는 여정에 몰입했습니다.<br>
                                    뛰어난 연기력과 다채로운 무대 설정은 전체적으로 뮤지컬을 통해 특별한 순간을 만들어냈습니다.<br>
                                    "뮤덕"은 음악과 이야기의 조화로운 조합으로, 뮤지컬 팬들에게 꼭 추천하고 싶은 작품입니다.</a></p>
                        </div>
                        <div class="text t3">
                            <h3><a href="#"><em>💬</em> 안녕하세요 "레미제라블" 후기입니다!!!</a></h3>
                            <p><a href="#">안녕하세요. 오늘도 행복했던 순간입니다. <br>
                                    뮤덕을 관람한 후 놀라운 음악과 아름다운 무대 연출에 감탄했습니다. 감동적인 스토리와 캐릭터들의 흥미진진한 모험이 펼쳐져, 관객들은 마음을 울리는 여정에 몰입했습니다.<br>
                                    뛰어난 연기력과 다채로운 무대 설정은 전체적으로 뮤지컬을 통해 특별한 순간을 만들어냈습니다.<br>
                                    "뮤덕"은 음악과 이야기의 조화로운 조합으로, 뮤지컬 팬들에게 꼭 추천하고 싶은 작품입니다.</a></p>
                        </div>
                    </div>
                </div>
                <!-- </div> -->
            </div>
        </section>
        <!-- //mainBoard -->

        <section id="mainBoard2">
            <div class="mainBoard_inner">
                <!-- <div class="container3"> -->
                    <div class="main_notice_wrap">
                        <h2 class="container3"><span>new</span> 공지사항 최신글!</h2>
                        <div class="main_notice_text">
                            <div class="text n1">
                                <h3><a href="#">후기게시판 관련 공지사항입니다.</a><span>2023.11.17</span></h3>
                            </div>
                            <div class="text n2">
                                <h3><a href="#">뮤지컬 일 테노레(IL TENORE)2차 티켓오픈안내</a><span>2023.11.17</span></h3>
                            </div>
                            <div class="text n3">
                                <h3><a href="#">뮤지컬 〈렌트〉 3차 티켓오픈 안내</a><span>2023.11.17</span></h3>
                            </div>
                            <div class="text n4">
                                <h3><a href="#">뮤지컬 〈레베카〉 10주년 기념 공연 앙코르 티켓오픈 안내</a><span>2023.11.17</span></h3>
                            </div>
                        </div>
                        <div class="main_notice_wrap_img">
                            <figure>
                                <img src="../assets/img/aaa11.jpg" alt="공지사항 바로가기">
                                <figcaption>공지사항<a href="#">바로가기</a></figcaption>
                            </figure>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- //mainBoard -->




        <section id="ticket_link">
            <div class="ticket_inner">
                <div class="container3">
                    <h2>티켓 <span>예매처</span> 바로가기</h2>
                    <div class="ticket_wrap">
                        <div class="ticket">
                            <p><a href="https://tickets.interpark.com/">인터파크 티켓 <span>바로가기</span></a></p>
                            <a href="https://tickets.interpark.com/"><img src="../assets/img/link_interpark.png" alt="인터파크 티켓 바로가기"></a>
                        </div>
                        <div class="ticket">
                            <p><a href="http://ticket.yes24.com/">예스24 티켓 <span>바로가기</span></a></p>
                            <a href="http://ticket.yes24.com/"><img src="../assets/img/link_yes24.png" alt="예스24 티켓 바로가기"></a>
                        </div>
                        <div class="ticket">
                            <p><a href="https://www.ticketlink.co.kr/">티켓 링크 <span>바로가기</span></a></p>
                            <a href="https://www.ticketlink.co.kr/"><img src="../assets/img/link_ticketlink.png" alt="티켓 링크 바로가기"></a>
                        </div>
                        <div class="ticket">
                            <p><a href="https://ticket.m.11st.co.kr/">티켓 11번가 <span>바로가기</span></a></p>
                            <a href="https://ticket.m.11st.co.kr/"><img src="../assets/img/link_11st.png" alt="티켓 11번가 바로가기"></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- //ticket_link -->
    </main>
    <!-- //main -->

    <?php include "../include/footer.php" ?>
    <!-- //footer -->

    <script src="https://cdn.jsdelivr.net/gh/studio-freight/lenis@1/bundled/lenis.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="../script/commons.js"></script>
    <script>
        // lenis 스무스 효과
        const lenis = new Lenis();

        lenis.on('scroll', (e) => {
            console.log(e);
        })

        function raf(time) {
            lenis.raf(time)
            requestAnimationFrame(raf);
        }

        requestAnimationFrame(raf);


        // swiper
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

        const btnPlay = document.querySelector(".swiper-button-play")
        const btnStop = document.querySelector(".swiper-button-stop")

        btnStop.addEventListener("click", () => {
            swiper.autoplay.stop();
        })

        btnPlay.addEventListener("click", () => {
            swiper.autoplay.start();
        })
    </script>
</body>

</html>