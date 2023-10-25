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
    <title>PHP 블로그 만들기</title>

    <link rel="stylesheet" href="../assets/css/style.css">

    <style>
        .intro_inner.blogStyle .intro_img {
            max-width: 200px;
            height: 150px;
        }

        .intro_inner.blogStyle .intro_text h3 {
            font-size: 1.8rem;
            margin-bottom: 10px;
        }
    </style>
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
                <h3>블로그 글쓰기</h3>
                <p>최신 정보와 관련된 블로그 글을 쓸 수 있습니다.</p>
            </div>
        </div>

        <div class="blog_layout container">
            <div class="blog_contents">
                <section class="blog_write">
                    <form action="blogWriteSave.php" name="blogWriteSave" method="post" enctype="multipart/form-data">
                        <fieldset>
                            <legend class="blind">게시글 작성하기</legend>
                            <div>
                                <label for="blogCategory" class="blind">카테고리</label>
                                <select name="blogCategory" id="blogCategory">
                                    <option value="최신정보">최신 정보</option>
                                    <option value="강의정보">강의 정보</option>
                                    <option value="사이트정보">사이트 정보</option>
                                </select>
                            </div>
                            <div>
                                <label for="blogTitle" class="blind">제목</label>
                                <input type="text" id="blogTitle" name="blogTitle" placeholder="제목을 적어주세요!"
                                    class="input_style" required>
                            </div>
                            <div>
                                <label for="blogContents" class="blind">내용</label>
                                <textarea id="blogContents" name="blogContents" placeholder="내용을 적어주세요!"></textarea>
                            </div>
                            <div class="file">
                                <label for="blogFile" class="blind">파일</label>
                                <input type="file" id="blogFile" name="blogFile">
                                <!-- accept=".jpg, .jpeg, .png, .gif, .webp" -->
                                <p>* jpg, gif, png, webp 파일만 넣을 수 있습니다. 이미지 용량은 1MB를 넘길 수 없습니다.</p>
                            </div>
                            <div class="btn">
                                <button type="submit" class="btn_style3">저장하기</button>
                            </div>
                        </fieldset>
                    </form>
                </section>
            </div>
            <div class="blog_aside">
                <?php include "blogAd.php" ?>
                <!-- //blog_ad -->

                <?php include "blogIntro.php" ?>
                <!-- //blogIntro -->

                <?php include "blogCategory.php" ?>
                <!-- //blogCategory -->

                <?php include "blogPopular.php" ?>
                <!-- //blogPopular -->

                <?php include "blogComment.php" ?>
                <!-- //blogComment -->
            </div>
        </div>
    </main>
    <!-- //main -->

    <?php include "../include/footer.php" ?>
    <!-- footer -->

    <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/translations/ko.js"></script>
    <script>
        // 글쓰기 상단 메뉴 플러그인 (css 하나 있음 .ck-editor__editable)
        ClassicEditor
            .create(document.querySelector('#blogContents'), {
                language: 'ko'
            })
            .catch(error => {
                console.error(error);
            });
    </script>
</body>

</html>