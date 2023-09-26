<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>회원가입 페이지</title>

    <!-- CSS -->
    <link rel="stylesheet" href="../html/assets/css/style.css">
</head>
<body class="gray">
    <?php include "../include/skip.php" ?>
    <!-- skip -->

    <?php include "../include/header.php" ?>
    <!-- header --> 

    <main id="main" role="main">
        <div class="intro_inner bmStyle container">
            <div class="intro_img">
                <img srcset="../html/assets/img/intro01.jpg 1x, ../html/assets/img/intro01@2x.jpg 2x, ../html/assets/img/intro01@3x.jpg 3x" alt="">
            </div>
            <div class="intro_text">
                회원가입을 해주시면 다양한 정보를 자유롭게 볼 수 있습니다.
            </div>
        </div>
        <section class="join_inner container">
            <h2>회원가입</h2>
            <div class="join_form">
                <form action="joinSave.php" name="joun" method="post">
                    <fieldset>
                        <legend class="blind">회원가입 영역</legend>
                        <div>
                            <label for="youEmail" class="required">이메일</label>
                            <input type="email" id="youEmail" name="youEmail" placeholder="이메일을 적어주세요!" class="input_style" required>
                        </div>
                        <div>
                            <label for="youName" class="required">이름</label>
                            <input type="text" id="youName" name="youName" placeholder="이름을 적어주세요!" class="input_style" required>
                        </div>
                        <div>
                            <label for="youPass" class="required">비밀번호</label>
                            <input type="paddword" id="youPass" name="youPass" placeholder="비밀번호를 적어주세요!" class="input_style" required>
                        </div>
                        <div>
                            <label for="youPassC" class="required">비밀번호 확인</label>
                            <input type="paddword" id="youPassC" name="youPassC" placeholder="다시 한번 비밀번호를 적어주세요!" class="input_style" required>
                        </div>
                        <div>
                            <label for="youPhone">연락처</label>
                            <input type="text" id="youPhone" name="youPhone" placeholder="연락처를 적어주세요!" class="input_style" required>
                        </div>
                        <button type="submit" class="btn_style mt100">회원가입 완료</button>
                    </fieldset>
                </form>
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