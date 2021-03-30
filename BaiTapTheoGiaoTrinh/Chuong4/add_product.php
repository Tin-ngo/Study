<?php
      // đặt tên biến để lưu id phải trùng với tên biến bên index
    $categories_id = filter_input(INPUT_POST, 'category_id');
    $code = filter_input(INPUT_POST, 'code');
    $name = filter_input(INPUT_POST, 'name');
    $price = filter_input(INPUT_POST, 'price');
    
    if($categories_id == FALSE || $categories_id == NULL || 
            $code == FALSE || $code== NULL || 
            $name == FALSE || $name == NULL ||
             $price == FALSE || $price == NULL){
        
        $error = "lỗi khi thêm sản phẩm!! Thông tin bạn nhập có gì đó không đúng!!!";
        include 'error.php';
        
    }else{
        
        include 'database.php';
        
        $sql = 'INSERT INTO products(categoryID, productCode, productName, listPrice)
                VALUES(:categories_id, :product_code, :product_name, :list_price)';
        $stm = $db->prepare($sql);
        $stm->bindValue(':categories_id', $categories_id);
        $stm->bindValue(':product_code', $code);
        $stm->bindValue(':product_name', $name);
        $stm->bindValue(':list_price', $price);
        $stm->execute();
        
        $stm->closeCursor();
        
        include 'index.php';
        
    }
?>