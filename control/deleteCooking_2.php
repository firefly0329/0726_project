<?php 
session_start();
header("Content-Type:text/html; charset=utf-8");
require_once('../model/deleteCooking_2_model.php');

//刪除Cooking
$model = new deleteCooking_2_model;
$result = $model->deleteMenu($_GET['cookingId']);

echo "<script>alert('刪除成功!!');</script>";
header("location: ../repice.php");
?>