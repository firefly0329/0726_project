<?php 

require_once('db.php');

class register_modle{
    
    function getMember(){
        $grammer = "select * from member";
        $db1 = new db;
        $result = $db1->link($grammer);
        return $result;
    }
    function setMember($id, $account, $password, $name){
        $grammer = "insert into member (id, account, password, name) 
            value($id, '$account', '$password', '$name')";
        $db1 = new db;
        $result = $db1->link($grammer);
        return $result;
    }
}


    




?>