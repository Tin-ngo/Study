<?php
    include 'database.php';
    
    if(!isset($category_id)){
        $category_id = filter_input(INPUT_GET, 'ID_category');   //lấy trong đường link của thể a
        if($category_id == NULL || $category_id == FALSE){
            $category_id=1;
        }
    }
    
    // hiển thị tên các thể loại để lựa chọn
    $sql_categories = "SELECT * FROM categories ORDER BY categoryID";
    $stm_1 = $db->prepare($sql_categories);
    $stm_1->execute();
    $categories = $stm_1->fetchall();
    $stm_1->closeCursor();
    
    
     //hiển thị tên thể loại khi kích chọn thể loại đó
    $sql_name = "SELECT * FROM categories WHERE categoryID = :category_id";
    $stm_2 = $db->prepare($sql_name);
    $stm_2->bindValue(':category_id', $category_id);
    $stm_2->execute();
    $category_name = $stm_2->fetch();
    $categoryName = $category_name['categoryName'];
    $stm_2->closeCursor();
    
    
    
    //hiển thị thông tin sản phẩm trong báng
    $sql_product = "SELECT * FROM products WHERE categoryID = :category_id ORDER BY productID";
    $stm_product = $db->prepare($sql_product);
    $stm_product->bindValue(':category_id', $category_id);
    $stm_product->execute();
    $products = $stm_product->fetchall();
    $stm_product->closeCursor();
    
    
    
?>
<!DOCUTYPE html>
<html>
    
    <head>
        <meta charset="utf-8">
        <title>Hiển thị sản phấm</title>
        
        <style>
            .one{
                float: left;
            }
            .two{
                margin-left: 200px;
            }
        </style>
    </head>
    <body>
        
        <h1> List Products </h1>
        <br>
        <h2> Categries </h2>
        
        <main>
            <div class="one">
                <?php foreach ($categories as $value):?>
                <ul>
                    
                    <li> 
                        <a href=".?ID_category=<?php echo $value['categoryID']; ?> ">
                            <?php echo $value['categoryName']; ?> 
                        </a>
                    </li>
                    
                </ul>
                 <?php endforeach; ?>
        </div>
            
            <div class="two">
                <?php echo $categoryName; ?>
                <br><br><br>
                <table border="1" cellpadding="10">
                    
                    <tr>
                        <td>Mã sản phẩm</td>
                        <td>Tên sản phẩm</td>
                        <td>Giá sản phẩm</td>
                        <td></td>
                    </tr>
                    
                    <?php foreach ($products as $value2):?>
                        
                    <tr>
                        <td>
                            <?php echo $value2['productCode']; ?>
                        </td>
                        
                        <td>
                            <?php echo $value2['productName']; ?>
                        </td>
                        
                        <td>
                            <?php echo $value2['listPrice']; ?>
                        </td>
                        
                        <td>
                            <form action="." method="post">
                                
                                <input type="hidden" name="categoryID"
                                       value="<?php echo $category_id; ?>" >
                                
                                <input type="hidden" name="productID"
                                       value="<?php echo $value2['productID']; ?> " >
                                
                                <input type="submit" value="Delete" >
                            </form>
                        </td>
                    </tr>
                    
                    <?php endforeach; ?>
                    
                    
                </table>
                
            </div>
       
        </main>
        
    </body>
    
</html>
