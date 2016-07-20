<?php 
session_start();
header("Content-Type:text/html; charset=utf-8");
require_once('../model/deleteCooking_model.php');

$model = new deleteCooking_model;
$result = $model->getMenu($_GET['cookingId']);
// $grammer = "select * from menu where id like {$_GET['cookingId']}";
// $db1 = new db;
// $result = $db1->link($grammer);

$row = mysql_fetch_assoc($result);

if($_SESSION['account'] != $row['writer']){
    echo false;
}else{
    echo true;
}

    

    

    // $grammer = "DELETE FROM menu where id like {$_GET['cookingId']}";
    // $db1->link($grammer);
    
    
    
    



?>


