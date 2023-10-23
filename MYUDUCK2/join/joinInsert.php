<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS -->
    <link rel="stylesheet" href="../assets/css/style.css">

    <title>뮤지컬 회원가입 약관</title>
    <style>
    </style>
</head>

<body>
    <?php include "../include/header.php"?>
    <!-- //header -->


    <main>
        <!-- join__inner -->
        <section class="join__inner3">
            <h2 class="blind">회원가입</h2>
            <div class="join__from2 container2">
                <h3>회원가입 <span>Sing up</span></h3>
                <form action="joinResult" name="joinResult" method="post">
                    <fieldset>
                        <legend class="blind">회원가입 영역</legend>
                        <div>
                            <label for="youID" class="required blind">아이디</label>
                            <input type="text" name="youID" id="youID" placeholder="아이디" class="input__style" required>
                            <div class="btn" onclick="idChecking()">아이디 중복 검사</div>
                        </div>
                        <p class="msg" id="youIdComment"></p>
                        <div>
                            <label for="youPass" class="required blind">비밀번호</label>
                            <input type="password" name="youPass" id="youPass" placeholder="비밀번호" class="input__style" required>
                        </div>
                        <div>
                            <label for="youPassC" class="required blind">비밀번호 확인</label>
                            <input type="password" name="youPassC" id="youPassC" placeholder="비밀번호 확인" class="input__style" required>
                        </div>
                        <div>
                            <label for="youName" class="required">이름 *</label>
                            <input type="text" name="youName" id="youName" placeholder="이름을 입력하세요" class="input__style" required>
                        </div>
                        <div>
                            <label for="youEmail" class="required">이메일 *</label>
                            <input type="email" name="youEmail" id="youEmail" placeholder="이메일을 입력하세요" class="input__style" required>
                            <div class="btn" onclick="emailChecking()">이메일 중복 검사</div>
                        </div>
                        <p class="msg" id="memberEmailMsg"></p>
                        <button type="submit" class="join_btn btn-style3">회원가입 완료</button>
                    </fieldset>
                </form>
            </div>

        </section>
    
    
    </main>
    <!-- //main-->

    <?php include "../include/footer.php"?>
    <!-- //footer -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="../script/commons.js"></script>
    <script>

    </script>
</body>
</html>