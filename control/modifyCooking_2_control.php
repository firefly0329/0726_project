<?php
header("Content-Type:text/html; charset=utf-8");
session_start();
require_once('../model/modifyCooking_2_model.php');

$modle = new modifyCooking_2_model;
$result = $modle->getMenu($_GET['cookingId']);


$row = mysql_fetch_assoc($result);
$row['make'] = preg_replace('/<br\\s*?\/??>/i','',$row['make']);

//判斷是否為作者
if($_SESSION['account'] != $row['writer']){
    echo "<script>alert('您不是本篇作者');location.href='../repice.php';</script>";
}


//主程式
if(isset($_POST["submit"])){
    $imgId = $_GET['cookingId'] . substr(strrchr($_FILES['file']['name'], '.'), 0);
    move_uploaded_file($_FILES['file']['tmp_name'],'../image/'.$imgId);
    $time = date("Y/m/d");
    //判斷有沒有修改圖片
    if(!$_FILES["file"]["tmp_name"]){
        $imgId = $row['picture'];
    }
    //修改
    $result = $modle->changeMenu($_GET['cookingId'],$_POST['dishName'],$_SESSION['account'],
        $imgId,$_POST['difficult'],$_POST['class'],$time,$_POST['make'],$_POST['ps'],
        $_POST['stuff'],$_GET['cookingId']);
    echo "<script>alert('修改完成');location.href='../repice.php';</script>";
}

 
?>