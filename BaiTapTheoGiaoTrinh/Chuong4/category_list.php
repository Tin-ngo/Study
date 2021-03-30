<?php
    include 'database.php';
    
    $sql = "SELECT * FROM categories ORDER BY categoryID";
    
    $stm = $db->prepare($sql);
    $stm->execute();
    $categories = $stm->fetchall();
    $stm->closeCursor();
    
?>
<!DOCTYPE html>
<html>

<!-- the head section -->
<head>
    <title>category list</title>
    <link rel="stylesheet" type="text/css" href="main.css" />
</head>

<!-- the body section -->
<body>
<header><h1>Product Manager</h1></header>
<main>
    <h1>Category List</h1>
    <table>
      
        <tr>
            <td>Name</td>
            <td></td>
        </tr>
        
        <?php foreach ($categories as $value) : ?>

        <tr>
            <td> <?php echo $value['categoryName']; ?></td>
            <td>
                <form action="delete_category.php" method="post">
                    
                    <input type="hidden" name="category_id" 
                           value="<?php echo $value['categoryID']; ?>" >
                    
                    <input type="submit" value="Delete">
                    
                </form>
            </td>
        </tr>

        <?php endforeach; ?>
        
    </table>

    <h2 class="margin_top_increase">Add Category</h2>
    
    <form action="add_category.php" method="post">

        Name: <input type="text" name="category_name" >
        
        <input type="submit" value="Add">
        
    </form>
    
    <p><a href="index.php">List Products</a></p>

</main>
<footer>
    <p>&copy; <?php echo date("Y"); ?> My Guitar Shop, Inc</p>
</footer>
</body>
</html>