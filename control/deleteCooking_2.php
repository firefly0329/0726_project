<?php 
session_start();
header("Content-Type:text/html; charset=utf-8");
require_once('../model/deleteCooking_2_model.php');

$model = new deleteCooking_2_model;
$result = $model->deleteMenu($_GET['cookingId']);

// $db1 = new db;
// $grammer = "DELETE FROM menu where id like {$_GET['cookingId']}";
// $db1->link($grammer);
echo "<script>alert('刪除成功!!');</script>";
header("location: ../repice.php");
?>