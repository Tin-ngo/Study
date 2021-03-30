<?php
    session_start();
    
    if(!isset($_SESSION['name'])){
        $_SESSION['name']="Phi Tin";
        $_SESSION['age']=20;
    }
    
?>
<!DOCTYPE html>
<html>
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Session</title>
    </head>

    <body>
        
    <?php
        echo "Tên bạn là:". $_SESSION['name']."<br/>";
        echo "Số tuổi của bạn:".$_SESSION['age']."<br/>";
    ?>
        <a href="test_session.php">Click here!</a>
    </body>
    
</html>

