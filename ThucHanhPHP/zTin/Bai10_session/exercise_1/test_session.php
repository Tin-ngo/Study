<?php
    session_start();
?>
<!DOCUTYPE html>
<html>
    
    <head>
        
        <title>Test session</title>
        <meta charset="ytf-8">
        
    </head>
    <body>
        
        <?php
        echo 'Chào bạn '.$_SESSION['name'].' Có số tuổi là ',$_SESSION['age'];
        ?>
        
        <br><a href="huy_session.php">hủy session</a>
        
    </body>
    
</html>
