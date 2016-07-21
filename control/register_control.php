<?php 
session_start();
require_once('../model/register_model.php');
//主程式
if(isset($_POST["submit"])){
    //db
    $linkdb = new register_modle;
    $result = $linkdb->getMember();

    $lastId = repeat($result);//檢查帳號.名稱是否重複，並回傳最後一筆資料id
    if(isset($lastId)){ 
        $lastId = $lastId + 1;
        $linkdb->setMember($lastId, $_POST['account'], $_POST['password'], $_POST['name']);
        
        $_SESSION['account'] = $_POST['name'];
        echo "<script>alert('申請成功，系統將自動跳轉至主頁面');location.href='../index.php';</script>";
    }
}
if(isset($_POST["login"])){
    header("location: login.php");
}




//檢查帳號.名稱是否重複，並回傳最後一筆資料id
function repeat($result){
    while($row = mysql_fetch_assoc($result)){
        // var_dump($row);
        // echo $row["account"] ;
        if($_POST["account"] == $row["account"]){
            echo "您的帳號已被使用";
            $lastId = NULL;
            break;
        }else if($_POST["name"] == $row["name"]){
            echo "您的名稱已被使用";
            $lastId = NULL;
            break;
        }else{
            $lastId = $row["id"];
        }
        
    }
    return $lastId;
}

?>