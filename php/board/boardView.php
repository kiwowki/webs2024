<?php
    include "../connect/connect.php";
    include "../connect/session.php";
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP 블로그 만들기</title>
    <?php include "../include/head.php"?>
</head>


<body class="gray">
    <?php include "../include/skip.php" ?>
    <!-- skip -->

    <?php include "../include/header.php" ?>
    <!-- header -->

    <main id="main" role="main">
    <div class="intro_inner container bmStyle">
            <div class="intro_img small">
                <img srcset="../assets/img/intro03.jpg 1x, ../assets/img/intro03@2x.jpg 2x, ../assets/img/intro03@3x.jpg 3x" alt="">
            </div>
            <div class="intro_text">
                <h2>게시판</h2>
                <p>
                    웹디자이너, 웹 퍼블리셔, 프론트앤드 개발자를 위한 게시판입니다<br> 관련된 문의는 어쩌구
                </p>
            </div>
        </div>
        <section class="board_inner container">
            <div class="board_view">
                <table>
                    <colgroup>
                        <col style="width: 20%;">
                        <col style="width: 80%;">
                    </colgroup>
                    <tbody>
<?php
    $boardID = $_GET['boardID'];

    $sql = "SELECT b.boardTitle, m.youName, b.regTime, b.boardView, b.boardContents FROM board b JOIN members m ON(b.memberID = m.memberID) WHERE b.boardID = {$boardID}";
    $result = $connect -> query($sql);

    if($result){
        $info = $result -> fetch_array(MYSQLI_ASSOC);

        echo "<tr><th>제목</th><td>".$info['boardTitle']."</td></tr>";
        echo "<tr><th>등록자</th><td>".$info['youName']."</td></tr>";
        echo "<tr><th>등록일</th><td>".date('Y-m-d', $info['regTime'])."</td></tr>";
        echo "<tr><th>조회수</th><td>".$info['boardView']."</td></tr>";
        echo "<tr><th>내용</th><td>".$info['boardContents']."</td></tr>";
    }
?>
                        <!-- <tr>
                            <th>제목</th>
                            <td></td>
                        </tr>
                        <tr>
                            <th>등록자</th>
                            <td></td>
                        </tr>
                        <tr>
                            <th>등록일</th>
                            <td></td>
                        </tr>
                        <tr>
                            <th>조회수</th>
                            <td></td>
                        </tr> -->
                        <!-- <tr>
                            <th>내용</th>
                            <td class="view_text">프론트 앤드 개발자 취업 노하우<br><br>

                                프론트엔드 개발자로 취업을 준비하는 분들에게는 다음과 같은 노하우가 도움이 될 수 있습니다.<br>
                                1. 기본기를 탄탄하게 다지기 HTML, CSS, JavaScript 등의 기본 기술을 제대로 이해하고 활용할 수 있어야 합니다. 특히 HTML과 CSS는 디자인을 구현하는 <br>
                                2. 핵심 기술이기 때문에 충분히 연습해보는 것이 좋습니다. 또한, 최신 기술 동향에 대한 관심과 학습도 중요합니다.<br>
                                3. 프로젝트를 경험해보기 개인 프로젝트나 오픈 소스 프로젝트에 참여하면서 프론트엔드 개발의 전반적인 경험을 쌓아보는 것이 좋습니다. <br>
                                4. 이를 통해 실제 개발 과정을 경험하고, 자신의 역량을 향상시킬 수 있습니다.<br>
                                5. 포트폴리오 작성하기 자신이 진행한 프로젝트나 작업물을 체계적으로 정리하여 포트폴리오를 작성하는 것이 좋습니다. 이를 통해 자신의 역량과 경험을 보여줄 수 있으며, <br>
                                6. 면접에서도 도움이 됩니다.<br>
                                7. 적극적인 커뮤니케이션 프론트엔드 개발자는 디자이너나 백엔드 개발자와 긴밀하게 협업해야 합니다. 따라서, 소통과 협력 능력이 중요합니다. 특히, 어려움이나 문제점을 <br>
                                8. 발견했을 때 적극적으로 의견을 제시하고 해결책을 모색하는 자세가 도움이 됩니다.<br>
                                9. 지속적인 학습과 성장 프론트엔드 개발 분야는 기술의 변화가 빠르기 때문에 지속적인 학습과 성장이 필요합니다. 새로운 기술이나 프레임워크를 학습하고, 개발자 <br>
                                10. 커뮤니티에 참여하여 정보를 공유하는 것도 좋은 방법입니다.<br><br>
                            </td>
                        </tr> -->
                    </tbody>
                </table>
            </div>
            <div class="board_btns">
                <a href="boardModify.php?boardID=<?=$_GET['boardID']?>" class="btn_style3 mr10">수정하기</a>
                <a href="boardRemove.php?boardID=<?=$_GET['boardID']?>" class="btn_style3 mr10" onclick = "return confirm('정말 삭제하겠습니까?')">삭제하기</a>
                <a href="board.php" class="btn_style3">목록보기</a>
            </div>
        </section>
    </main>
<!-- //main -->
    
    <?php include "../include/footer.php" ?>
    <!-- footer -->
</body>
</html>