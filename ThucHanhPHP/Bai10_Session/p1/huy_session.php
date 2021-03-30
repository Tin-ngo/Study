<?php
    session_start();
    unset($_SESSION['name']);// huy session co ten la 'name'
  //session_destroy();  //hủy hết session bao gồm tên và tuổi
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Untitled Document</title>
    </head>

    <body>
        <?php
            echo "Chao ban: ".$_SESSION['name']."<br> co tuoi la:".$_SESSION['age'];
        ?>
        <a href="test_session.php">click here</a>

    </body>
</html>

