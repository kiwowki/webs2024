<?php
include "../connect/connect.php";
include "../connect/session.php";

if (isset($_GET['category'])) {
    $category = $_GET['category'];
} else {
    Header("Location: blog.php");
}

$categorySql = "SELECT * FROM blog WHERE blogDelete = 1 AND blogCategory = '$category' ORDER BY blogId DESC";
$categoryResult = $connect->query($categorySql);
$categoryInfo = $categoryResult->fetch_array(MYSQLI_ASSOC);
$categoryCount = $categoryResult->num_rows;
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
            <div class="intro_text">
                <h3>
                    <?= $category ?>
                </h3>
                <p>웹 개발과 관련된
                    <?= $category ?>를 한 눈에 볼 수 있습니다.
                </p>
            </div>
        </div>

        <div class="blog_layout container">
            <div class="blog_contents">
                <section class="blog_card card_wrap">
                    <div class="card_inner column3">
<?php foreach ($categoryResult as $blog) { ?>
                            <div class="card">
                                <figure class="card_img">
                                    <a href="blogView.php?blogId=<?= $blog['blogId'] ?>">
                                        <img src="../assets/blog/<?= $blog['blogImgFile'] ?>" alt="<?= $blog['blogTitle'] ?>">
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
        </div>
    </main>
    <!-- main -->

    <?php include "../include/footer.php" ?>
    <!-- footer -->
</body>

</html>