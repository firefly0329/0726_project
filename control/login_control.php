<?php 
session_start();

require_once('model/login_model.php');
//主程式
if(isset($_POST["login"])){
    //db;
    $login_modle = new login_modle;
    $result = $login_modle->getMember();
    
    echo login($result); //登入檢查
}

if(isset($_POST["register"])){
    header("location: register.php");
}
if(isset($_POST["visitor"])){
    header("location: repice.php");
}


//登入檢查
function login($result){
    while($row = mysql_fetch_assoc($result)){
        if($row['account'] == $_POST['account'] && $row['password'] == $_POST['password']){
            echo $_SESSION['account'] = $row['name'];
            echo "<script>alert('登入成功，系統將自動跳轉至主頁面');location.href='repice.php';</script>";
        }
    }
    // echo "<script>alert('登入成功')</script>";
    return "請檢查帳號密碼!!!!!!!";
}




?>