<!--會員登入-->
<?php
session_start();
require_once('../control/login_control.php');


?>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    <body>
        <p style="margin-left:70px;">會員登入</p>
        <form  method="post">
            <lable>帳號</lable>
            <input type="text" name="account" placeholder=" 請輸入帳號 " required="required"/><br><br>
            <lable>密碼</lable>
            <input type="password" name="password" placeholder=" 請輸入密碼 " required="required"/><br><br>
            <input type="submit" value="登入" name="login" style="margin-left:80px;"/>
        </form>
        <form  method="post">
        <input type="submit" value="註冊會員" name="register" style="margin:40px 0 0 20px;"/>
        <input type="submit" value="訪客瀏覽" name="visitor" style="margin:40px 0 0 20px;"/>
        </form>
    </body>
</html>