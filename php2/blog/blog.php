<?php
include "../connect/connect.php";
include "../connect/session.php";

// echo "<pre>";
// var_dump($_SESSION);
// echo "</pre>";

$blogSql = "SELECT * FROM blog WHERE blogDelete = 1 ORDER BY blogId DESC";
$blogInfo = $connect->query($blogSql);
?>

<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP 블로그 만들기</title>

    <link rel="stylesheet" href="../assets/css/style.css">
    <style>

    </style>
</head>

<body class="gray">

    <?php include "../include/skip.php" ?>
    <!-- skip -->

    <header id="header" role="banner">
        <div class="container">
            <div class="header_inner">
                <div class="left">
                    <a href="../index.html">
                        <span class="blind">메인으로</span>
                    </a>
                </div>
                <h1 class="logo">
                    <a href="../main/main.php">Developer Blog</a>
                </h1>
                <div class="right">
                    <ul>
                        <li><a href="../login/login.php">로그인</a></li>
                        <li><a href="../join/joinAgree.php">회원가입</a></li>
                    </ul>

                </div>
            </div>
            <nav class="nav_inner">
                <ul>
                    <li><a href="../blog/blogCate.php?category=최신정보">최신 정보</a></li>
                    <li><a href="../blog/blogCate.php?category=강의정보">강의 정보</a></li>
                    <li><a href="../blog/blogCate.php?category=사이트정보">사이트 정보</a></li>
                    <li><a href="../board/board.php">공지 사항</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <!-- //header -->

    <main id="main" role="main">
        <div class="intro_inner blogStyle bmStyle container">
            <div class="intro_img main">
                <img srcset="../assets/img/Frame11.jpg, ../assets/img/Frame11@2x.jpg, ../assets/img/Frame11@3x.jpg"
                    alt="">
            </div>
            <div class="intro_text">
                <h3>블로그 글쓰기</h3>
                <p>최신 정보와 관련된 블로그 글을 쓸 수 있습니다.</p>
            </div>
        </div>

        <div class="blog_layout container">
            <div class="blog_contents">
                <section class="blog_card card_wrap">
                    <div class="card_inner column3">
                        <?php foreach ($blogInfo as $blog) { ?>
                            <div class="card">
                                <figure class="card_img">
                                    <a href="blogView.php?blogId=<?= $blog['blogId'] ?>">
                                        <img src="../assets/blog/<?= $blog['blogImgFile'] ?>"
                                            alt="<?= $blog['blogTitle'] ?>">
                                    </a>
                                </figure>
                                <div class="card_text">
                                    <h3>
                                        <a href="blogView.php?blogId=<?= $blog['blogId'] ?>">
                                            <?= $blog['blogTitle'] ?>
                                        </a>
                                    </h3>
                                    <p>
                                        <?= substr($blog['blogContents'], 0, 100) ?>
                                    </p>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </section>
                <section class="blog_pages">blog_pages</section>
                <section class="blog_index">blog_index</section>
                <section class="blog_relate">blog_relate</section>
                <section class="blog_view">blog_view</section>
                <section class="blog_write">blog_write</section>
            </div>
     