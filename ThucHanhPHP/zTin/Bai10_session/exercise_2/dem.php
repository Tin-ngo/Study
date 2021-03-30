<?php
    session_start();
    
?>
<!DOCUTYPE html>
<html>
    
    <head>
        
        <title>Đếm</title>
        <meta charset="utf-8">
        
    </head>
    
    <body>
        
        <?php
            echo $_SESSION['count'];
        ?>
        <a href="tang.php">Next</a>
        <br>
        <a href="huy_session.php">Hủy session</a>
    </body>
    
</html>