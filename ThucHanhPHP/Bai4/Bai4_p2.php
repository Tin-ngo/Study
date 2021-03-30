<!docutype html>
<html>
    
    <title>Vòng lặp for</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.scss">
    
    <body>
        
        <?php
        if(isset($_POST["sobatdau"]) && isset($_POST["soketthuc"])){
            if(is_numeric($_POST["sobatdau"]) && is_numeric($_POST["soketthuc"])){
                
            $start = filter_input(INPUT_POST, "sobatdau");
            $end = filter_input(INPUT_POST, "soketthuc");
            $tong=0;
            $tich=1;
            $tong_chan=0;
            $tong_le=0;
            for($i=$start; $i<=$end;$i++)
                $tong+=$i;
            for($i=$start; $i<=$end;$i++)
                $tich*=$i;
            for($i=$start; $i<=$end;$i++){
                if($i%2==0)
                $tong_chan+=$i;
            }
            for($i=$start; $i<=$end;$i++){
                if($i%2!=0)
                $tong_le+=$i;
            }
            }
        
            else{
            $tong='0';
            $tich='0';
            $tong_chan='0';
            $tong_le='0';
            }
        }
        ?>
        
        <form action="Bai4_p2.php" method="post">
            
            <table border="1" >
                
                <tr>
                    <td></td>
                    <td>Số bắt đầu: 
                   <input type="text" name="sobatdau"></td>
                    <td>Số kết thúc: 
                        <input type="text" name="soketthuc"></td>
                </tr>
                <tr>
                    <td colspan="3">Kết quả</td>
                </tr>
                <tr>
                    <td>Tổng các số:</td>
                    <td colspan="2">
                        <input type="text" value=<?php echo $tong; ?>>
                    </td>
                </tr>
                <tr>
                    <td>Tích các số:</td>
                    <td colspan="2">
                        <input type="text" value=<?php echo $tich; ?>>
                    </td>
                </tr>
                <tr>
                    <td>Tổng các số chẵn:</td>
                    <td colspan="2">
                        <input type="text" value=<?php echo $tong_chan; ?>>
                    </td>
                </tr>
                <tr>
                    <td>Tổng các số lẻ:</td>
                    <td colspan="2">
                        <input type="text" value=<?php echo $tong_le; ?>>
                    </td>
                </tr>
                <tr>
                    <td colspan="3"><input type="submit" value="Tính toán"></td>
                </tr>
                    
                
            </table>
            
        </form>
        
    </body>
    
    
</html>