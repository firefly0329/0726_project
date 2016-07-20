<?php
header("Content-Type:text/html; charset=utf-8");
$link = mysql_connect("localhost", "root", "");
$result = mysql_query("set names utf8", $link);
mysql_selectdb("recipe", $link);
$result = mysql_query("select * from menu", $link);

?>



<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>sakamoto_menu</title>
        <link rel="stylesheet" type="text/css" href="css/firefly_frame.css" media="screen">
        <link rel="stylesheet" type="text/css" href="css/UI.css" media="screen">
        <link rel="stylesheet" type="text/css" href="css/modifyCooking.css" media="screen">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
        <script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
    </head>
    <body>
        <div id="wrapper">
            <header class="relative">
                <div>
                    <h1>手做美食好簡單</h1>
                </div>
            </header>
            
            <article>
                <?php while($row = mysql_fetch_assoc($result)):?>
                <a href="modifyCooking_2.php?cookingId=<?php echo $row['id']; ?>" class="">
                    <img src="image/<?php echo $row['picture']; ?>" class=""></img>
                    <div class="">
                        <div class=""><?php echo $row['dishName']; ?></div>
                        <div class="btn">修改</div>
                    </div>
                </a>
                <?php endwhile?>
            </article>
            
        </div>
    </body>
</html>