<?php
    
    include 'connect.php';
    
    $ten = filter_input(INPUT_POST, 'name');
    $tuoi = filter_input(INPUT_POST, 'age');
    
    $sql = "INSERT INTO nguoidung(name, age) VALUES(:ten, :tuoi);";
    
    $stm = $pdo->prepare($sql);
    $stm->bindValue(':ten', $ten);
    $stm->bindValue(':tuoi', $tuoi);
    $stm->execute();
    
?>
<!DOCUTYPE html>
<html>
    
    <body>
        
        <form action="insert.php" method="post">
            
            Tên: <input type="text" name="name">
            <br>
            Tuổi: <input type="text" name="age">
            <br>
            <input type="submit" name="submit">
            
        </form>
        
    </body>
    
</html>

