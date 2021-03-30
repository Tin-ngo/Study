<?php
    $category_id = filter_input(INPUT_POST, 'category_id');
    
    if($category_id == NULL){
        $error = "Lỗi khi xóa thể loại sản phẩm!! có thể đã sai thông tin ID";
        include 'error.php';
    }else{
        
        include 'database.php';
        
        $sql = "DELETE FROM categories WHERE categoryID = :category_id";
        
        $stm = $db->prepare($sql);
        $stm->bindValue(':category_id', $category_id);
        $stm->execute();
        $stm->closeCursor();
    }
    include 'category_list.php';
?>
