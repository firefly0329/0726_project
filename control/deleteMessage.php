<?php
    require_once('../model/deleteMessage_model.php');
    
    $model = new deleteMessage;
    $messageId = $_GET['messageId'];
    $model->deleteMsg($messageId);
    // $grammer = "DELETE FROM `message` WHERE id like $messageId";
    // $result = $db1->link($grammer);
    header("location: ../view/message.php?letter={$_GET['menuId']}");


?>