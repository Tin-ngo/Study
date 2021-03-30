<?php

include 'database.php';

if(!isset($categories_id)){
    $categories_id = filter_input(INPUT_GET, 'ID_categories', FILTER_VALIDATE_INT);
    if($categories_id == NULL || $categories_id == FALSE){
        $categories_id = 1;
    }
}
//lấy dữ liệu để hiện cá thẻ ul li để chọn guitar, bass, drum trong web
$sql_categories = "SELECT * FROM categories ORDER BY categoryID"; // order by sắp xếp tăng dần ( thêm desk là giảm dần )
$stm_categories = $db->prepare($sql_categories);
$stm_categories->execute();
$categories = $stm_categories->fetchall();
$stm_categories->closeCursor();


//hiện ra tên categories nằm trên bảng và hiện dữ liệu bảng
$sql_categories_2 = "SELECT * FROM categories WHERE categoryID = :categoryid";
$stm_categories2 = $db->prepare($sql_categories_2);
$stm_categories2->bindValue(':categoryid', $categories_id);
$stm_categories2->execute();
$categories2 = $stm_categories2->fetch();
$categories_Name = $categories2['categoryName'];
$stm_categories2->closeCursor();

//lấy dữ liệu trong bảng products với id= id-category đã lấy ở trên
$sql_product = "SELECT * FROM products WHERE categoryID = :categoryid";
$stm_products = $db->prepare($sql_product);
$stm_products->bindValue(':categoryid', $categories_id);
$stm_products->execute();
$products = $stm_products->fetchall();

$stm_products->closeCursor();



?>
<!DOCUTYPE html>
<html>
    
    <head>
        
        <meta charset="utf-8">
        <title>Xem sản phẩm</title>
        <link rel="stylesheet" type="text/css" href="main.css" />
        
    </head>
    
    <body>
        
        <header>
            <h1>Product Manager</h1>
        </header>
        
          <!-- một lớp chỉ được sử dụng một thẻ main, thẻ main để chỉ định nội dung chính của trang web-->
        <main>    <!-- nội dung chính ở đây -->
            <h1>Products List </h1>
            <aside>     <!-- chỉ định những nội dung trong thẻ aside là nội dung ngoài -->
                
                <h4>Categories</h4>
                
            <?php foreach($categories as $value) :?>
                <nav> <!-- dùng để gom lại khối liên kết điều hướng chính-->
            <ul> <!--ul đi đôi với li: không có đạh thứ tự , ol thì có đánh thứ tự như 1,2 -->
                
                <li>
                    <a href=".?ID_categories=<?php echo $value['categoryID']; ?>">
                        <?php echo $value['categoryName']; ?>
                    </a>
                </li>
                
            </ul>
                </nav>
            <?php endforeach; ?>
            </aside>
            
            <section>
                
                <p><?php echo $categories_Name; ?></p>
                
                <table>
                    
                    <tr>
                        <td>Code</td>
                        <td>Name</td>
                        <td>Price</td>
                        <td></td>
                    </tr>
                   <?php foreach ($products as $value_product): ?> 
                    
                    <tr>
                        <td>
                            <?php echo $value_product['productCode']; ?>
                        </td>
                        
                        <td>
                            <?php echo $value_product['productName']; ?>
                        </td>
                        
                        <td>
                            <?php echo $value_product['listPrice']; ?>
                        </td>
                        
                        <td>
                               <!-- khi nhấn sẽ gửi 2 value hidden sang lớp delete -->
                            <form action="delete_product.php" method="post">
                                
                                <input type="hidden" name="category_id" 
                                       value="<?php echo $value_product['categoryID']; ?>">
                                
                                <input type="hidden" name="product_id" 
                                       value="<?php echo $value_product['productID']; ?>">
                                
                                <input type="submit" value="Delete" >
                            </form>
                        </td>
                    </tr>
                    
                    <?php endforeach; ?>
                </table>
                <br>
                <a href="add_product_form.php">add Product</a>
                <br>
                <br>
                <a href="category_list.php">List Categories</a>
                
            </section>
            
        </main>
        
    </body>
    
</html>