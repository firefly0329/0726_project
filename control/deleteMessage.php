<?php
    require_once('../model/db.php');
    
    $db1 = new db;
    echo $messageId = $_GET['messageId'];
    $grammer = "DELETE FROM `message` WHERE id like $messageId";
    $result = $db1->link($grammer);
    header("location: ../message.php?letter={$_GET['menuId']}");


?>