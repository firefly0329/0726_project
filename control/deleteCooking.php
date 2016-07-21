<?php 
session_start();
header("Content-Type:text/html; charset=utf-8");
require_once('../model/deleteCooking_model.php');

// 判斷是不是作者，是的話回傳true
$model = new deleteCooking_model;
$result = $model->getMenu($_GET['cookingId']);

$row = mysql_fetch_assoc($result);

if($_SESSION['account'] != $row['writer']){
    echo false;
}else{
    echo true;
}


?>


