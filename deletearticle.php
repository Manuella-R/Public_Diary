<?php
if (isset($_GET['id'])) {
    include('configs/connect.php');
$id = $_GET['id'];
$sql = "DELETE FROM articles WHERE articleid='$id'";
if(mysqli_query($conn,$sql)){
    session_start();
    $_SESSION["delete"] = "article Deleted Successfully!";
    header("Location:searchoptionad.html");
}else{
    die("Something went wrong");
}
}
?>

<?php


