<?php
if (isset($_GET['id'])) {
    include('configs/connect.php');
$id = $_GET['id'];
$sql = "DELETE FROM users WHERE userid='$id'";
if(mysqli_query($conn,$sql)){
    session_start();
    $_SESSION["delete"] = "User Deleted Successfully!";
    header("Location:login_form.php");
}else{
    die("Something went wrong");
}
}
?>

<?php


