<!Docutype html>
<html>
    <meta charset="utf-8">
    <title>In lời chào</title>
    
    <body>
        <?php
        if(isset($_POST["ten"])){
    //      $ten = $_POST["ten"];
            $ten = filter_input(INPUT_POST, 'ten');
            $hienthiten = 'chào bạn '.$ten;
        }
        else{
            $hienthiten = null;
        }
        ?>
        <form action="Bai1_p2.php" method="post">
            
            <table width="271" border="1">
                <tr>
                    <td colspan="2" align="center" bgcolor="#336699">In lời chào</td>
                </tr>
                <tr>
                    <td>Họ tên bạn: </td>
                    <td>
                        <input type="text" name="ten">
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <label><center><?php echo $hienthiten; ?></center></label>
                    </td>
                </tr>
                <tr>
                    <td colspan="2"align="center" valign="middle"><input type="submit"  value="Xuất"></td>
                </tr>
            </table>
            
        </form>
    </body>
</html>
    