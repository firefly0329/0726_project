<?php
//確定是否為會員
if(!isset($_SESSION['account'])){
    echo "<script>alert('請先登入');location.href='login.php';</script>";
}
?>