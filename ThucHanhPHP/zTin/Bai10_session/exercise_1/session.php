<?php
    session_start();
    
    if(!isset($_SESSION['name'])){
        $_SESSION['name'] = 'Phi Tin';
        $_SESSION['age'] = 20;
    }
?>
<!DOCUTYPE html>
<html>
    
    <head>
        
        <title>Test session</title>
        <meta charset="utf-8">
        
    </head>
    <body>
        
        <?php
        echo 'Tên bạn là: '.$_SESSION['name'];
        echo '<br>Tuổi bạn là '.$_SESSION['age'];
        ?>
        
        <a href="test_session.php"><br>Next</a>
        
    </body>
    
</html>