
<html>
    <head>
<link rel="stylesheet" href="css/view.css">
<style>
        body {
            background-image: url('images/back.jpg');
            background-size: cover; /* Adjust as needed */
        }
    </style>
</head>

<body>
<div class="main">


<?php

include('configs/connect.php');

    $spot_article = "SELECT * ,DATE_FORMAT(publication_date, '%M %e, %Y') AS formatted_date FROM `articles` ORDER BY articleid DESC LIMIT 1";
    $article_res = $conn->query($spot_article);
    $sn = 1;
    if ($article_res->num_rows > 0) {
        // output data of each row
        while ($article_row = $article_res->fetch_assoc()) {
            $date = $article_row['formatted_date'];

    ?>
<div class="featured">
<div class="recentarticle">
            <p class="recentTitle"><span class="bolded">Most Recent Article</span></p>
        </div>
                <p class="titleText"><?= $article_row['articlename']; ?></p>
                <div class="category">
                    <img src="./images/line.svg" alt="line" />
                    <p class="catText"><?= $article_row['username']; ?></p>
                </div>
                <p class="article"><?= $article_row['articletext']; ?></p>
                <div class="featuredInfos">
                    <div class="featuredInfo">
                        <img src="./images/eye.svg" alt="eye" />
                        <p class="infoText">12</p>
                    </div>
                    <div class="featuredInfo">
                        <img src="./images/calender.svg" alt="calendar" />
                        <p class="infoText"><?= $date ?></p>
                    </div>
                </div>
            </div>
            <a href="author_page.php">Return to author page</a>
</div>

<?php
        }
    } else {
        echo "0 results";
    }

?>

<div class="otherarticles">


    <div class="articles">
        <div class="recentarticle">
            <p class="recentTitle"><span class="bolded">Recent Articles</span></p>
        </div>
        <?php

        $spot_article = "SELECT *,DATE_FORMAT(publication_date, '%M %e, %Y') AS formatted_date FROM articles WHERE articleid < ( SELECT articleid FROM articles ORDER BY articleid DESC LIMIT 1) ORDER BY articleid DESC LIMIT 6";
        $article_res = $conn->query($spot_article);
        

        $sn = 1;
        if ($article_res->num_rows > 0) {
            // output data of each row
            while ($article_row = $article_res->fetch_assoc()) {
                $fdate = $article_row['formatted_date'];


        ?>
                <div class="article">
                    <div class="articleInfo">
                        <p class="articleBody"><?= $article_row['articletext']; ?></p>
                        <div class="articleInfos">
                            <div class="articleOtherInfo">
                                <img src="./images/darkprofile-fill.svg" alt="author" />
                                <p class="otherInfoText"><?= $article_row['username'] ?></p>
                            </div>
                            <div class="articleOtherInfo">
                                <img src="./images/calender.svg" alt="calendar" />
                                <p class="otherInfoText"><?= $fdate ?></p>
                            </div>
                        </div>
                    </div>
                </div>

                
        <?php
            }
        } else {
            echo "0 results";
        }

        ?>

    </div>
    
</div>



</body>

</html>