<?php
header("Content-Type:text/html; charset=utf-8");
session_start();
require_once('../model/newCooking_model.php');
require_once('../control/login_check.php');


//主程式
if(isset($_POST["submit"])){
    $newCooking = new newCooking_modle;
    $result = $newCooking->getMenuId();

    $lastId = repeat($result);//找出lastId
    $lastId = $lastId+1;
    $imgId = $lastId . substr(strrchr($_FILES['file']['name'], '.'), 0);
    move_uploaded_file($_FILES['file']['tmp_name'],'../image/'.$imgId);
    date_default_timezone_set('Asia/Taipei');
    $time = date("Y-m-d H:i:s");

    $newCooking->setMenu($lastId,$_POST['dishName'],$_SESSION['account'],$imgId,$_POST['difficult'],$_POST['class'],$time,$_POST['make'],$_POST['ps'],$_POST['stuff']);

    echo "<script>alert('新增完成');location.href='../repice.php';</script>";
}

//找出lastId
function repeat($result){
    while($row = mysql_fetch_assoc($result)){
        if($lastId < $row["id"]){
            $lastId = $row["id"];
        }
    }
    return $lastId;
}


    
    
    
    
?>