<?php
    include 'connect.php';
    
    $id = filter_input(INPUT_POST, 'id');
    
    $sql = "DELETE FROM nguoidung WHERE id=:id";
    
    $stm = $pdo->prepare($sql);
    $stm->bindValue(':id', $id);
    $stm->execute();
    
?>
<!DOCUTYPE html>
<hmtl>
    
    <body>
        
        <form action="delete.php" method="post">
            
            Nhập id cần xóa: <input type="text" name="id">
            <br>
            <input type="submit" name="submit">
            
        </form>
        
    </body>
    
</hmtl>