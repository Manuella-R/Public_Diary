<?php

include('configs/connect.php');

if(isset($_POST["addArticle"])){
    $title = mysqli_real_escape_string($conn, $_POST["title"]); 
    $articleContent = mysqli_real_escape_string($conn,  $_POST["articleContent"]);
    $authorname = mysqli_real_escape_string($conn, $_POST["currUserName"]);

    $insert_article = "INSERT INTO goodweb.articles (username, articlename, articletext) VALUES ('$authorname', '$title', '$articleContent');";
    
    if(mysqli_query($conn,$insert_article)){
        session_start();
        $_SESSION["addArticle"] = "Article Added Successfully!";
        header("Location:viewarticles.php");
    }else{
        die("Something went wrong");
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Create Article</title>
    <link rel="stylesheet" href="css/add.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <div class="row">
        <div class="signUpDiv">
            <p class="h1 formText">Create a Post<span>.</span></p>
            <div class="box">
            <form action="addarticles1.php" method="POST"> <!-- Corrected form action -->
            <div class="inputBox">
            <input type="text" id="currUserName" name="currUserName" placeholder="enter penname" />
</div>
<div class="inputBox">
<input type="text" id="title" name="title" placeholder="Title" />
</div>
<div class="inputBox">
<textarea id="articleContent" name="articleContent" placeholder="Content..." rows="10" cols="70"></textarea>
</div> </div>
                <button name="addArticle" id="btn">Add Article</button>
                <a href="author_page.php">Return to author page</a>
            </form>
</div> 
        </div>
    </div>
</body>
</html>
