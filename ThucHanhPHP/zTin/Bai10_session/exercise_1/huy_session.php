<?php
    session_start();
    unset($_SESSION['name']);
 //   session_destroy();
?>
<!DOCUTYPE html>
<html>
    
    <head>
        
        <title>Test session</title>
        <meta charset="ytf-8">
        
    </head>
    <body>
        
        
        <?php
        if(isset($_SESSION['name'])){
        echo 'Chào bạn '.$_SESSION['name'].' Có số tuổi là ',$_SESSION['age'];
        }
        else{
            echo "<script> alert('Bạn đã hủy session');</script>";
          //  echo "location.href='session.php'; ";
        }
        ?>
        
        <br><a href="session.php">về lại session</a>
        
    </body>
    
</html>
