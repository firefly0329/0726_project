<?php 
session_start();
if(isset($_POST["logout"])){
    unset($_SESSION['account']);
    echo "<script>alert('登出成功');</script>";
}
if(isset($_POST["login"])){
    unset($_SESSION['account']);
    header("location: login.php");
}
?>