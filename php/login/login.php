<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>회원가입 페이지</title>

    <!-- CSS -->
    <?php include "../include/head.php" ?>
</head>
<body class="gray">
    <?php include "../include/skip.php" ?>
    <!-- skip -->

    <?php include "../include/header.php" ?>
    <!-- header --> 

    <main id="main" role="main">
        <section class="login_inner container">
            <h2>로그인</h2>
            <p>로그인을 하시면 게시글 및 댓글 작성이 가능합니다.</p>
            
                <div class="login_form btStyle bmStyle">
                <form action="loginSave.php" name="loginSave" method="post">    <fieldset>
                        <legend class="blind">로그인 영역</legend>
                        <div>
                            <label for="youEmail" class="required blind">이메일</label>
                            <input type="email" id="youEmail" name="youEmail" placeholder="이메일" class="input_style" required>
                        </div>
                        <div>
                            <label for="youPass" class="required blind">비밀번호</label>
                            <input type="paddword" id="youPass" name="youPass" placeholder="비밀번호" class="input_style" autocomplete="off" required>
                        </div>
                        <button type="submit" class="btn_style2 mt30">로그인</button>
                    </fieldset>
                </form>
            </div>
            <div class="login_footer">
                <div class="list-style">
                    <li>회원가입을 하지 않았다면 회원가입을 먼저 해주세요. <a href="join.php">회원가입</a></li>
                    <li>아이디가 기억이 나지 않는다면? <a href="#">아이디 찾기</a></li>
                    <li>비밀번호가 기억이 나지 않는다면? <a href="#">비밀번호 찾기</a></li>
                </div>
            </div>
        </section>
    </main>
    <!-- main -->
    
    <footer id="footer" role="contentinfo">
        <div class="footer_inner container btStyle">
            <div>Copyright 2023 kiwowki</div>
            <div>blog by kang's</div>
        </div>
        
    </footer>
    <!-- footer -->
</body>
</html>