<?php
    session_start();
    require_once('../model/message_model.php');
    require_once('../control/login_check.php');
    
    $letter = $_GET["letter"];
    $model = new message_model;
    $result = $model->getMessage($letter);

    $result2 = $model->getMenu($letter);

    $row2 = mysql_fetch_assoc($result2);
    
    //主程式--新增留言
    if(isset($_POST['newMessageBtn'])){
        date_default_timezone_set('Asia/Taipei');
        $time = date("Y-m-d H:i:s");
        $_POST['message'] = str_replace("'","&#39",$_POST['message']);//將'換成&#39
        $model->setMessage($_SESSION['account'],$_POST['message'],$time,$letter);
        echo "<script>alert('留言成功!!!');location.href='message.php?letter=$letter';</script>";
        // header("location: message.php?letter=$letter");
    }
    //主程式--刪除留言
    if(isset($_POST['deleteMessageBtn'])){
         $model->deleteMessage($_POST['id']);
        echo "<script>alert('刪除成功')</script>";
        // header("location: message.php?letter=$letter");
    }
    
?>