<?php
include "../connect/connect.php";

$theaterId = $_GET['theaterId'];

$sql = "SELECT * FROM theater ORDER BY theaterId ASC";

$performances = array();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $thLogo = $row['thLogo'];
        $thName = $row['thName'];
        $thAddress = $row['thAddress'];
        $thCall = $row['thCall'];
        $thHomepage = $row['thHomepage'];
        $thTransport = $row['thTransport']; 
        $thSeatImg = $row['thSeatImg']; 
        $thPerform = $row['thPerform']; 


        

        

        // 배우 정보와 연극 정보를 묶어서 배열에 저장
        $performances[] = array(
            'thLogo' => $thLogo,
            'thName' => $thName,
            'thAddress' => $thAddress,
            'thCall' => $thCall,
            'thHomepage' => $thHomepage,
            'thTransport' => $thTransport,
            'thSeatImg' => $thSeatImg,
            'thPerform' => $thPerform
        );
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
    <link rel="stylesheet" href="../assets/css/commons.css">
    <link rel="icon" href="../assets/img/favicon.png" type="image/x-icon">

    <title>뮤지컬 카테고리</title>
    <style>
    </style>
</head>

<body>

    <?php include "../include/header.php" ?>
    <!-- //header -->

    <main>
        <div class="theater__ineer container">
            <h1>공연장</h1>
            <div class="mapwrap">
                <div id="map"></div>
            </div>
            <div class="theater__info">
                <div class="theater__link">
                    <ul>
                        <li><a href="#"><img class="im1" src="../assets/img/theater/theater01.jpg" alt="샤롯데시어티"></a>
                        </li>
                        <li><a href="#"><img class="im2" src="../assets/img/theater/theater02.jpg" alt="세종문화회관"></a>
                        </li>
                        <li><a href="#"><img class="im3" src="../assets/img/theater/theater03.jpg" alt="예술의전당"></a></li>
                        <li><a href="#"><img class="im4" src="../assets/img/theater/theater04.jpg" alt="블루스퀘어"></a></li>
                        <li><a href="#"><img class="im5" src="../assets/img/theater/theater05.jpg" alt="LG아트센터서울"></a>
                        </li>
                        <li><a href="#"><img class="im6" src="../assets/img/theater/theater06.jpg" alt="충무아트센터"></a>
                        </li>
                        <li><a href="#"><img class="im7" src="../assets/img/theater/theater07.jpg" alt="디큐브링크아트센터"></a>
                        </li>
                        <li><a href="#"><img class="im8" src="../assets/img/theater/theater08.jpg" alt="국립극장(해오름극장)"></a></li>
                        <li><a href="#"><img class="im9" src="../assets/img/theater/theater09.jpg" alt="유니버설아트센터"></a>
                        </li>
                        <li><a href="#"><img class="im10" src="../assets/img/theater/theater10.jpg" alt="한전아트센터"></a>
                        </li>
                        <li><a href="#"><img class="im11" src="../assets/img/theater/theater11.jpg" alt="우리금융아트홀"></a>
                        </li>
                    </ul>
                </div>
                <div class="theater__list">
                    <table class="list__cont">
                        <tr class="list_cont_header">
                            <th class="rounded-left"><span>공연장</span></th>
                            <th class="rounded-center"><span>장소</span></th>
                            <th class="rounded-right"><span>최근 주요 작품</span></th>
                        </tr>
                        <tr class="th_info ca1">
                            <td class="img_name">
                                <a href="category_th_detail.php?thIndex=1">
                                    <img src="../assets/img/theater/theater01.jpg" alt="샬롯롯데시어티">
                                </a>
                                <a href="category_th_detail.php?thIndex=1"><span>샤롯롯데시어티</span></a>
                            </td>
                            <td class="theater__location">
                                <span>
                                    <?php
                                    $address = $theaterdata[0]["thAddress"];
                                    $pattern = '/서울특별시\s*(\S+구)/';
                                    preg_match($pattern, $address, $matches);
                                    echo '<span>' . $matches[1] . '</span>';
                                    ?>
                                </span>
                            </td>
                            <td class="theater__musical">
                                <ul>
                                    <li><?php echo $theaterdata[0]["thPerform"][0]; ?></li>
                                    <li><?php echo $theaterdata[0]["thPerform"][1]; ?></li>
                                    <li><?php echo $theaterdata[0]["thPerform"][2]; ?></li>
                                </ul>
                            </td>
                        </tr>
                        <!-- //ca1 -->

                        <tr class="th_info ca2">
                            <td class="img_name">
                                <a href="category_th_detail.php?thIndex=2">
                                    <img src="../assets/img/theater/theater02.jpg" alt="세종문화회관">
                                </a>
                                <a href="category_th_detail.php?thIndex=2"><span>세종문화회관</span></a>
                            </td>
                            <td class="theater__location">
                                <span>
                                    <?php
                                    $address = $theaterdata[1]["thAddress"];
                                    $pattern = '/서울특별시\s*(\S+구)/';
                                    preg_match($pattern, $address, $matches);
                                    echo '<span>' . $matches[1] . '</span>';
                                    ?>
                                </span>
                            </td>
                            <td class="theater__musical">
                                <ul>
                                    <li><?php echo $theaterdata[1]["thPerform"][0]; ?></li>
                                    <li><?php echo $theaterdata[1]["thPerform"][1]; ?></li>
                                    <li><?php echo $theaterdata[1]["thPerform"][2]; ?></li>
                                </ul>
                            </td>
                        </tr>
                        <!-- //ca2 -->

                        <tr class="th_info ca3">
                            <td class="img_name">
                                <a href="category_th_detail.php?thIndex=3">
                                    <img src="../assets/img/theater/theater03.jpg" alt="예술의전당">
                                </a>
                                <a href="category_th_detail.php?thIndex=3"><span>예술의전당</span></a>
                            </td>
                            <td class="theater__location">
                                <span>
                                    <?php
                                    $address = $theaterdata[2]["thAddress"];
                                    $pattern = '/서울특별시\s*(\S+구)/';
                                    preg_match($pattern, $address, $matches);
                                    echo '<span>' . $matches[1] . '</span>';
                                    ?>
                                </span>
                            </td>
                            <td class="theater__musical">
                                <ul>
                                    <li><?php echo $theaterdata[2]["thPerform"][0]; ?></li>
                                    <li><?php echo $theaterdata[2]["thPerform"][1]; ?></li>
                                    <li><?php echo $theaterdata[2]["thPerform"][2]; ?></li>
                                </ul>
                            </td>
                        </tr>
                        <!-- //ca3 -->

                        <tr class="th_info ca4">
                            <td class="img_name">
                                <a href="category_th_detail.php?thIndex=4">
                                    <img src="../assets/img/theater/theater04.jpg" alt="블루스퀘어">
                                </a>
                                <a href="category_th_detail.php?thIndex=4"><span>블루스퀘어</span></a>
                            </td>
                            <td class="theater__location">
                                <span>
                                    <?php
                                    $address = $theaterdata[3]["thAddress"];
                                    $pattern = '/서울특별시\s*(\S+구)/';
                                    preg_match($pattern, $address, $matches);
                                    echo '<span>' . $matches[1] . '</span>';
                                    ?>
                                </span>
                            </td>
                            <td class="theater__musical">
                                <ul>
                                    <li><?php echo $theaterdata[3]["thPerform"][0]; ?></li>
                                    <li><?php echo $theaterdata[3]["thPerform"][1]; ?></li>
                                    <li><?php echo $theaterdata[3]["thPerform"][2]; ?></li>
                                </ul>
                            </td>
                        </tr>
                        <!-- //ca4 -->

                        <tr class="th_info ca5">
                            <td class="img_name">
                                <a href="category_th_detail.php?thIndex=5">
                                    <img src="../assets/img/theater/theater05.jpg" alt="LG아트센터 서울">
                                </a>
                                <a href="category_th_detail.php?thIndex=5"><span>LG아트센터 서울</span></a>
                            </td>
                            <td class="theater__location">
                                <span>
                                    <?php
                                    $address = $theaterdata[4]["thAddress"];
                                    $pattern = '/서울특별시\s*(\S+구)/';
                                    preg_match($pattern, $address, $matches);
                                    echo '<span>' . $matches[1] . '</span>';
                                    ?>
                                </span>
                            </td>
                            <td class="theater__musical">
                                <ul>
                                    <li><?php echo $theaterdata[4]["thPerform"][0]; ?></li>
                                    <li><?php echo $theaterdata[4]["thPerform"][1]; ?></li>
                                    <li><?php echo $theaterdata[4]["thPerform"][2]; ?></li>
                                </ul>
                            </td>
                        </tr>
                        <!-- //ca5 -->

                        <tr class="th_info ca6">
                            <td class="img_name">
                                <a href="category_th_detail.php?thIndex=6">
                                    <img src="../assets/img/theater/theater06.jpg" alt="충무아트센터">
                                </a>
                                <a href="category_th_detail.php?thIndex=6"><span>충무아트센터</span></a>
                            </td>
                            <td class="theater__location">
                                <span>
                                    <?php
                                    $address = $theaterdata[5]["thAddress"];
                                    $pattern = '/서울특별시\s*(\S+구)/';
                                    preg_match($pattern, $address, $matches);
                                    echo '<span>' . $matches[1] . '</span>';
                                    ?>
                                </span>
                            </td>
                            <td class="theater__musical">
                                <ul>
                                    <li><?php echo $theaterdata[5]["thPerform"][0]; ?></li>
                                    <li><?php echo $theaterdata[5]["thPerform"][1]; ?></li>
                                    <li><?php echo $theaterdata[5]["thPerform"][2]; ?></li>
                                </ul>
                            </td>
                        </tr>
                        <!-- //ca6 -->

                        <tr class="th_info ca7">
                            <td class="img_name">
                                <a href="category_th_detail.php?thIndex=7">
                                    <img src="../assets/img/theater/theater07.jpg" alt="디큐브 링크아트센터">
                                </a>
                                <a href="category_th_detail.php?thIndex=7"><span>디큐브 링크아트센터</span></a>
                            </td>
                            <td class="theater__location">
                                <span>
                                    <?php
                                    $address = $theaterdata[6]["thAddress"];
                                    $pattern = '/서울특별시\s*(\S+구)/';
                                    preg_match($pattern, $address, $matches);
                                    echo '<span>' . $matches[1] . '</span>';
                                    ?>
                                </span>
                            </td>
                            <td class="theater__musical">
                                <ul>
                                    <li><?php echo $theaterdata[6]["thPerform"][0]; ?></li>
                                    <li><?php echo $theaterdata[6]["thPerform"][1]; ?></li>
                                    <li><?php echo $theaterdata[6]["thPerform"][2]; ?></li>
                                </ul>
                            </td>
                        </tr>
                        <!-- //ca7 -->

                        <tr class="th_info ca8">
                            <td class="img_name">
                                <a href="category_th_detail.php?thIndex=8">
                                    <img src="../assets/img/theater/theater08.jpg" alt="국립극장(해오름극장)">
                                </a>
                                <a href="category_th_detail.php?thIndex=8"><span>국립극장(해오름극장)</span></a>
                            </td>
                            <td class="theater__location">
                                <span>
                                    <?php
                                    $address = $theaterdata[7]["thAddress"];
                                    $pattern = '/서울특별시\s*(\S+구)/';
                                    preg_match($pattern, $address, $matches);
                                    echo '<span>' . $matches[1] . '</span>';
                                    ?>
                                </span>
                            </td>
                            <td class="theater__musical">
                                <ul>
                                    <li><?php echo $theaterdata[7]["thPerform"][0]; ?></li>
                                    <li><?php echo $theaterdata[7]["thPerform"][1]; ?></li>
                                    <li><?php echo $theaterdata[7]["thPerform"][2]; ?></li>
                                </ul>
                            </td>
                        </tr>
                        <!-- //ca8 -->

                        <tr class="th_info ca9">
                            <td class="img_name">
                                <a href="category_th_detail.php?thIndex=9">
                                    <img src="../assets/img/theater/theater09.jpg" alt="유니버설아트센터">
                                </a>
                                <a href="category_th_detail.php?thIndex=9"><span>유니버설아트센터</span></a>
                            </td>
                            <td class="theater__location">
                                <span>
                                    <?php
                                    $address = $theaterdata[8]["thAddress"];
                                    $pattern = '/서울특별시\s*(\S+구)/';
                                    preg_match($pattern, $address, $matches);
                                    echo '<span>' . $matches[1] . '</span>';
                                    ?>
                                </span>
                            </td>
                            <td class="theater__musical">
                                <ul>
                                    <li><?php echo $theaterdata[8]["thPerform"][0]; ?></li>
                                    <li><?php echo $theaterdata[8]["thPerform"][1]; ?></li>
                                    <li><?php echo $theaterdata[8]["thPerform"][2]; ?></li>
                                </ul>
                            </td>
                        </tr>
                        <!-- //ca9 -->

                        <tr class="th_info ca10">
                            <td class="img_name">
                                <a href="category_th_detail.php?thIndex=10">
                                    <img src="../assets/img/theater/theater10.jpg" alt="한전아트센터">
                                </a>
                                <a href="category_th_detail.php?thIndex=10"><span>한전아트센터</span></a>
                            </td>
                            <td class="theater__location">
                                <span><?php
                                        $address = $theaterdata[9]["thAddress"];
                                        $pattern = '/서울특별시\s*(\S+구)/';
                                        preg_match($pattern, $address, $matches);
                                        echo '<span>' . $matches[1] . '</span>';
                                        ?></span>
                            </td>
                            <td class="theater__musical">
                                <ul>
                                    <li><?php echo $theaterdata[9]["thPerform"][0]; ?></li>
                                    <li><?php echo $theaterdata[9]["thPerform"][1]; ?></li>
                                    <li><?php echo $theaterdata[9]["thPerform"][2]; ?></li>
                                </ul>
                            </td>
                        </tr>
                        <!-- //ca10 -->

                        <tr class="th_info ca11">
                            <td class="img_name">
                                <a href="category_th_detail.php?thIndex=11">
                                    <img src="../assets/img/theater/theater11.jpg" alt="우리금융아트홀">
                                </a>
                                <a href="category_th_detail.php?thIndex=11"><span>우리금융아트홀</span></a>
                            </td>
                            <td class="theater__location">
                                <span><?php
                                        $address = $theaterdata[10]["thAddress"];
                                        $pattern = '/서울특별시\s*(\S+구)/';
                                        preg_match($pattern, $address, $matches);
                                        echo '<span>' . $matches[1] . '</span>';
                                        ?></span>
                            </td>
                            <td class="theater__musical">
                                <ul>
                                    <li><?php echo $theaterdata[10]["thPerform"][0]; ?></li>
                                    <li><?php echo $theaterdata[10]["thPerform"][1]; ?></li>
                                    <li><?php echo $theaterdata[10]["thPerform"][2]; ?></li>
                                </ul>
                            </td>
                        </tr>
                        <!-- //ca11 -->
                    </table>
                </div>
            </div>
        </div>
    </main>
    <!-- //main-->

    <?php include "../include/footer.php" ?>
    <!-- //footer -->

    <script src="//dapi.kakao.com/v2/maps/sdk.js?appkey=7b2abc1a5bd9d4d76409a078f6cdf032  "></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    <script src="script.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="../script/commons.js"></script>
    <script src="../script/map.js"></script>
    <script>
        function handleLinkClick(thName) {
            // category_th_detail.php 페이지로 이동
            window.location.href = "http://jhyjhy968.dothome.co.kr/AAmyuduck/theater/category_th_detail.php";

            // 클릭한 a 링크에 대한 정보를 localStorage에 저장
            localStorage.setItem("thName", thName);
        }
    </script>
</body>

</html>