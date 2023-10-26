<?php
include "../connect/connect.php";
include "../connect/session.php";

if (isset($_GET['blogId'])) {
    $blogId = $_GET['blogId'];
} else {
    Header("Location: blog.php");
}

// 조회수 추가
$updateViewSql = "UPDATE board SET blogView = blogView + 1 WHERE blogId = '$blogId'";
$connect->query($updateViewSql);

// 블로그 정보 가져오기
$blogSql = "SELECT * FROM blog WHERE blogId = '$blogId'";
$blogResult = $connect->query($blogSql);
$blogInfo = $blogResult->fetch_array(MYSQLI_ASSOC);

// 이전글 가져오기
$prevBlogSql = "SELECT * FROM blog WHERE blogId < '$blogId' ORDER BY blogId DESC LIMIT 1";
$prevBlogResult = $connect->query($prevBlogSql);
$prevBlogInfo = $prevBlogResult->fetch_array(MYSQLI_ASSOC);

// 다음글 가져오기
$nextBlogSql = "SELECT * FROM blog WHERE blogId > '$blogId' ORDER BY blogId ASC LIMIT 1";
$nextBlogResult = $connect->query($nextBlogSql);
$nextBlogInfo = $nextBlogResult->fetch_array(MYSQLI_ASSOC);
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

    <?php include "../include/header.php" ?>
    <!-- header -->

    <main id="main" role="main">
        <div class="intro_inner blogStyle bmStyle container">
            <div class="intro_img main">
                <img srcset="../assets/img/Frame6.jpg, ../assets/img/Frame11@2x.jpg, ../assets/img/Frame11@3x.jpg"
                    alt="">
            </div>
        </div>

        <div class="blog_layout container">
            <div class="blog_contents">
                <section class="blog_view">
                    <h3>
                        <?= $blogInfo['blogTitle'] ?>
                    </h3>
                    <div class="info">
                        <span class="author">
                            <?= $blogInfo['blogAuthor'] ?>
                        </span>
                        <span class="date">
                            <?= date('Y-m-d', $blogInfo['blogRegtime']) ?>
                        </span>
                    </div>
                    <div class="contents">
                        <img src="../assets/blog/<?= $blogInfo['blogImgFile'] ?>" alt="<?= $blogInfo['blogTitle'] ?>">
                        <?= $blogInfo['blogContents'] ?>
                    </div>
                </section>
                <section class="blog_index">
                    <h4 class="blind">이전글/다음글 가기</h4>

                    <?php if (!empty($prevBlogInfo)) { ?>
                        <a href="blogView.php?blogId=<?=$prevBlogInfo['blogId'];?>" class="prev">
                        이전글 <?=substr($prevBlogInfo['blogTitle'],0, 20);?></a>...
                    <?php } else { ?>
                        <span class="prev">이전글이 없습니다.</span>
                    <?php } ?>
                    
                    <?php if (!empty($nextBlogInfo)) { ?>
                        <a href="blogView.php?blogId=<?=$nextBlogInfo['blogId'];?>" class="next">
                        다음글 <?=substr($prevBlogInfo['blogTitle'],0, 20);?></a>
                    <?php } else { ?>
                        <span class="next">다음글이 없습니다.</span>
                    <?php } ?>
                    <!-- <a href="#" class="next">다음글</a> -->
                </section>

            </div>
            <div class="blog_aside">
                <?php include "blogAd.php" ?>
                <!-- //blog_ad -->

                <?php include "blogIntro.php" ?>
                <!-- blog_intro -->

                <?php include "blogCategory.php" ?>
                <!-- blog_category -->

                <?php include "blogPopular.php" ?>
                <!-- blog_popular -->

                <?php include "blogComment.php" ?>
                <!-- blog_comment -->
            </div>
    </main>
    <!-- main -->

    <?php include "../include/footer.php" ?>
    <!-- footer -->
</body>

</html>