<!Docutype html>
<html>
    <title>Giải phương trình bậc 1</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.scss">
    
    <body>
        <?php
        if(isset($_POST["soa"]) && isset($_POST["sob"])){
            $Soa = filter_input(INPUT_POST, "soa");
            $Sob = filter_input(INPUT_POST, "sob");
            
            if($Soa == 0){
                if($Sob == 0) $nghiem = "Phương trình vô số nghiệm";
                if($Sob <> 0) $nghiem = "Phương trình vô nghiệm";
            }
            else{
                $x = -($Sob/$Soa);
                $x = round($x,2);
                $nghiem = $x;
            }
        }
        else{
            $nghiem = "";
        }
        ?>
        <form action="Bai2_p2.php" method="post">
            
            <table border="1">
                <tr>
                    <td colspan="3" bgcolor="yellow">Giải phương trình bậc 1</td>
                </tr>
                <tr>
                    <td>Phương trình: </td>
                    <td>
                        <input type="text" name="soa">
                        X+
                    </td>
                    <td>
                        <input type="text" name="sob">
                        =0
                    </td>
                </tr>
                <tr>
                    <td colspan="3">
                        Nghiệm: 
                        <input type="text" value="x= <?php echo $nghiem; ?>">
                    </td>
                </tr>
                <tr>
                    <td colspan="3">
                <center><input type="submit" value="Xuất"></center>
                    </td>
                </tr>
            </table>
            
        </form>
        
    </body>
    
</html>

