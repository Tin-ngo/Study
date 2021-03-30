<?php
    include 'connect.php';
    
    $sql = "UPDATE nguoidung SET name=:name, age=:age WHERE id=:id";
    
    $name = filter_input(INPUT_POST, 'name');
    $age = filter_input(INPUT_POST, 'age');
    $id = filter_input(INPUT_POST, 'id');
    
    $stm = $pdo->prepare($sql);
    $stm->bindValue(':name', $name);
    $stm->bindValue(':age', $age);
    $stm->bindValue(':id', $id);
    $stm->execute();
    
?>
<html>
    
    <body>
        
        <form action="update.php" method="post">
            
            Nhập tên: <input type="text" name="name">
            <br>
            Nhập tuổi: <input type="text" name="age">
            <br>
            Nhập id của người cần đổi: <input type="text" name="id">
            <input type="submit" name="submit">
            
        </form>
        
    </body>
    
</html>