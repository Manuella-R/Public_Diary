<?php
if (isset($_GET['id'])) {
    include('configs/connect.php');
    $id = mysqli_real_escape_string($conn, $_GET['id']);

    if (isset($_POST['update'])) {
        $title = mysqli_real_escape_string($conn, $_POST["articlename"]);
        $author = mysqli_real_escape_string($conn, $_POST["username"]);
        $description = mysqli_real_escape_string($conn, $_POST["articletext"]);
        
        $sqlUpdate = "UPDATE articles SET articlename = '$title', username = '$author', articletext = '$description' WHERE articleid='$id'";
        if(mysqli_query($conn, $sqlUpdate)){
            session_start();
            $_SESSION["update"] = "Article Updated Successfully!";
            header("Location: author_page.php");
            exit();
        } else {
            die("Something went wrong");
        }
    }

    $sqlSelect = "SELECT * FROM articles WHERE articleid='$id'";
    $result = $conn->query($sqlSelect);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $title = $row["articlename"];
        $author = $row["username"];
        $description = $row["articletext"];
    } else {
        die("Article not found");
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Update Article</title>
    <link rel="stylesheet" href="css/add.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
<div class="row">
    <h1>Update Article</h1>
    <form action="" method="POST">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <div class="inputBox">
        <label for="articlename">Article Title:</label>
        <input type="text" id="articlename" name="articlename" value="<?php echo $title; ?>"><br>
</div>
<div class="inputBox">
        <label for="username">Author:</label>
        <input type="text" id="username" name="username" value="<?php echo $author; ?>"><br>
</div>
<div class="inputBox">
        <label for="articletext">Article Content:</label>
        <textarea id="articletext" name="articletext"><?php echo $description; ?></textarea><br>
</div>    
        <button type="submit" name="update" id="btn">Update Article</button>

    </form>
</div>
</body>

</html>
