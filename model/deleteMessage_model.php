<?php
require_once('db.php');
class deleteMessage{
    
    function deleteMsg($messageId){
        $grammer = "DELETE FROM `message` WHERE id like $messageId";
        $db1 = new db;
        $db1->link($grammer);
    }
}
?>