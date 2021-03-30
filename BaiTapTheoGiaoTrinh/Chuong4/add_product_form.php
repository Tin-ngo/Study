<?php
    
    include 'database.php';
    
    $sql = "SELECT * FROM categories ORDER BY categoryID";
    $stm = $db->prepare($sql);
    $stm->execute();
    $categories = $stm->fetchall();
    $stm->closeCursor();

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
         <h1>Add product </h1>
        <form action="add_product.php" method="post">
            
            <label>Category:</label>
            
            <select  name="category_id">
            <?php foreach ($categories as $value): ?>
                
                <option value="<?php echo $value['categoryID'] ?>">
                <?php echo $value['categoryName']; ?>
                </option>
            
            <?php endforeach; ?>
            </select>
            
            <br>
            <br>
            
            <label>Code</label>
            &emsp;&emsp;<input type="text" name="code">
            
            <br>
            <br>
            
            <label>Name</label>
            &emsp;&ensp;<input type="text" name="name">
            
            <br>
            <br>
            
            <label>List Price</label>
            &ensp;<input type="text" name="price">
            
            <br>
            <br>
            <input type="submit" value="Add Product">
            
            
        </form>
         
         <br>
         <a href="index.php">View Products list</a>
        
    </body>
    
</html>