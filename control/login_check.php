<?php
if(!isset($_SESSION['account'])){
    echo "<script>alert('請先登入');location.href='login.php';</script>";
}
?>