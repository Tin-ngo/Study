<?php
    session_start();
    unset($_SESSION['count']);
?>
<!DOCUTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Untitled Document</title>
    </head>

    <body>
        <?php
            echo $_SESSION['count'];
        ?>
        <a href="dem.php">click here</a>

    </body>
</html>

