<?php
    include 'database.php';
    
    $category_name = filter_input(INPUT_POST, 'category_name');
    if($category_name == NULL){
        $error = "Lỗi khi thêm thể loại! Có thể bạn dã nhập sai gì đó !!";
        include 'error.php';
    }else{
        include 'database.php';
        
        $sql = "INSERT INTO categories(categoryName) VALUES (:category_name)";
        
        $stm = $db->prepare($sql);
        $stm->bindValue(':category_name', $category_name);
        $stm->execute();
        $stm->closeCursor();
    }
    
    include 'category_list.php';
    
    
    
    
?>
