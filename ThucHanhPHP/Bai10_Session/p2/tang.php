<?php 
    session_start();
    if (!isset($_SESSION['count']))
    {
	$_SESSION['count']=1;
    }
    else 
        $_SESSION['count'] ++;

?>
<?php 
echo $_SESSION['count'];
echo '<br><a href="dem.php">next</a>';
echo '<br><a href="huy_session.php">Hủy Session</a>';
?>