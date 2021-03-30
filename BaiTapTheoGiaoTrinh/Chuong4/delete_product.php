<?php
    include 'database.php';
    
    //gọi biến category_id này để khi xóa xong thì sẽ về lại trang index.php và về lại đúng id này mình vừa gọi
    // tên biến phải trùng với biến lưu id bên index
    $categories_id = filter_input(INPUT_POST, 'category_id');
    $product_id = filter_input(INPUT_POST, 'product_id');
    
    if($product_id != FALSE && $categories_id !=FALSE){
        $sql_delete = "DELETE FROM products WHERE productID = :productID";
        $stm_delete = $db->prepare($sql_delete);
        $stm_delete->bindValue(':productID',$product_id);
        $stm_delete->execute();
        $stm_delete->closeCursor();
        
    }
    
    include 'index.php';
    
?>