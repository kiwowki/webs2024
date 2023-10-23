<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS -->
    <link rel="stylesheet" href="../assets/css/style.css">

    <title>뮤지컬 회원가입</title>
    <style>
    </style>
</head>

<body>
    <header id="header">
        <h1 class="logo">
            <a href="main.html">myuduck</a>
        </h1>
        <nav class="category">
            <ul>
                <li><a href="category_theater.html">Theater</a></li>
                <li><a href="http://jhyjhy968.dothome.co.kr/project2/kategorie_musical.html">Musical</a></li>
                <li><a href="category_actor.html">Actor</a></li>
                <li><a href="search.html">Search</a></li>
            </ul>
        </nav>

        <div class="header_ham">
            <div class="navbar_overlay"></div>
            <div class="navbar_burger">
                <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor" class="bi bi-list"
                    viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
                </svg>
            </div>
            <div class="navbar_menu">
                <ul>
                    <li><a href="#" class="m">마이페이지</a>
                        <ul class="submenu">
                            <li><a href="#" class="m">나의 찜 목록</a></li>
                            <li><a href="#" class="m">회원 정보 수정</a></li>
                        </ul>
                    </li>

                    <li><a href="http://ljy16.dothome.co.kr/myuduck/html/login.html" class="m">로그인</a></li>

                    <li><a href="http://jhyjhy968.dothome.co.kr/project2/QA_write.html" class="m">문의하기</a>
                        <ul class="submenu">
                            <li><a href="#" class="m">문의 글 쓰기</a></li>
                            <li><a href="#" class="m">문의 글 목록</a></li>
                        </ul>
                    </li>

                    <li><a href="#" class="m">회원탈퇴</a></li>
                </ul>
                <div class="navbar_burger_back">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                        class="bi bi-x-lg" viewBox="0 0 16 16">
                        <path
                            d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z" />
                    </svg>
                </div>
            </div>
        </div>
    </header>
    <!-- //header -->

    <main id="main" role="main">
        <section class="join_inner3">
            <h2 class="blind">회원가입</h2>
            <div class="join_from2 container2">
                <form action="joinResult.php" name="joinResult" method="post" onsubmit="return joinChecks();">
                    <fieldset>
                        <legend class="blind">회원가입 영역</legend>
                        <div class="join">
                            <label for="youId" class="required">아이디</label>
                            <div class="check">
                                <input type="text" id="youId" name="youId" placeholder="아이디을 적어주세요!"
                                    class="input_style">
                                <div class="btn" onclick="idChecking()">아이디 중복 검사</div>
                            </div>
                            <p class="msg" id="youIdComment"></p>
                        </div>

                        <div class="join">
                            <label for="memberName" class="required">이름</label>
                            <input type="text" id="memberName" name="memberName" placeholder="이름을 적어주세요!"
                                class="input_style">
                            <p class="msg" id="memberNameMsg"></p>
                        </div>

                        <div class="join">
                            <label for="memberEmail" class="required">이메일</label>
                            <div class="check">
                                <input type="email" id="memberEmail" name="memberEmail" placeholder="이메일을 적어주세요!"
                                    class="input_style">
                                <div class="btn" onclick="emailChecking()">이메일 중복 검사</div>
                            </div>
                            <p class="msg" id="memberEmailMsg"></p>
                        </div>

                        <div class="join">
                            <label for="memberPass" class="required">비밀번호</label>
                            <input type="text" id="memberPass" name="memberPass" placeholder="비밀번호를 적어주세요!"
                                autocomplete="off" class="input_style">
                            <p class="msg" id="memberPassMsg"></p>
                        </div>

                        <div class="join">
                            <label for="memberPassC" class="required">비밀번호 확인</label>
                            <input type="password" id="memberPassC" name="memberPassC" placeholder="다시 한번 비밀번호를 적어주세요!"
                                autocomplete="off" class="input_style">
                            <p class="msg" id="memberPassCMsg"></p>
                        </div>

                        <div class="join">
                            <label for="memberPhone">연락처</label>
                            <input type="text" id="memberPhone" name="memberPhone" placeholder="연락처는 공백없이 적어주세요!"
                                class="input_style">
                            <p class="msg" id="memberPhoneMsg"></p>
                        </div>

                        <button type="submit" id="submitBtn" class="btn_style mt100">회원가입 완료</button>
                    </fieldset>
                </form>
            </div>
        </section>
    </main>
    <!-- //main-->

    <footer id="footer">
        <div class="footer_inner">
            <div class="footer1">
                <img src="../assets/img/footerMyuduck2.jpg" alt="뮤덕이로고">
            </div>
            <div class="footer2">
                <div class="footer2-1">
                    <ul>
                        <li><a href="#">이용약관</a></li>
                        <li><a href="#">위치기반서비스 이용약관</a></li>
                        <li><a href="#">개인정보처리방침</a></li>
                        <li><a href="#">개인정보보호방침</a></li>
                    </ul>
                </div>
                <div class="footer2-2">
                    <p>
                        CODING CODI ALL Rights Reserved<br>
                        Contact : wolves941110@gmail.com, jhyjhy968@gmail.com, lee.jiyoung492@gmail.com
                    </p>
                </div>
            </div>
        </div>
    </footer>
    <!-- //footer -->

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        let isIdCheck = false;

        function idChecking() {
            let youId = $("#youId").val();

            if (youId == null || youId == '') {
                $("#youIdComment").text("** 아이디를 입력해주세요!!!");
            } else {
                // 아이디 유효성 검사
                let getYouId = RegExp(/^[a-zA-Z0-9_-]{4,20}$/);

                if (!getYouId.test($("#youId").val())) {
                    $("#youIdComment").text("아이디는 영어와 숫자를 포함하여 4~20글자 이내로 작성이 가능합니다.");
                    $("#youId").val('')
                    $("#youId").focus();
                    return false;
                } else {
                    $("#youIdComment").text("멋진 아이디입니다.");
                    $("#youIdComment").addClass("blue");
                }

                $.ajax({
                    type: "POST",
                    url: "joinCheck.php",
                    data: { "youId": youId, "type": "isIdCheck" },
                    dataType: "json",
                    success: function (data) {
                        if (data.result == "good") {
                            $("#youIdComment").text("사용 가능한 아이디입니다.");
                            isIdCheck = true;
                        } else {
                            $("#youIdComment").text("이미 존재하는 아이디입니다.");
                            isIdCheck = false;
                        }
                    }
                })
            }
        }

        function joinChecks() {

            if ($("#youId").val() == "") {
                $("#youIdComment").text("-> 아이디를 작성해주세요!");
                $("#youId").focus();
                return false;
            }
        }
    </script>

</body>

</html>