
<?php
    session_start();
    
    if(!isset($_SESSION['count'])){
        $_SESSION['count'] = 1;
    }
    else{
        $_SESSION['count']+=1;
    }

?>
<!DOCUTYPE html>
<html>
    
    <head>
        
        <title>Đếm</title>
        <meta charset="utf-8">
        
    </head>
    
    <body>
        
        <a href="dem.php">Next</a>
        <br>
        <a href="huy_session.php">Hủy session</a>
    </body>
    
</html>