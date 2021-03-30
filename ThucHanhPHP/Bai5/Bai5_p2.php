<!docutype html>
<html>
    <title>Giải phương trình bậc 2</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.scss">
    
    <body>
        
        <?php
        
        if(isset($_POST["soa"]) && isset($_POST["sob"]) && isset($_POST["soc"])){
            $a = filter_input(INPUT_POST, 'soa');
            $b = filter_input(INPUT_POST, 'sob');
            $c = filter_input(INPUT_POST, 'soc');
            $nghiem = giai_pt_bac2($a, $b, $c);
        }
        
        
        //giải phương trình bậc 1
        function giai_pt_bac1($a,$b){
            if($a==0){
                if($b==0) $nghiem = "Phương trình vô số nghiệm";
                if($b<>0) $nghiem = "phương trình vô nghiệm";
            }
            else{
                $nghiem = round(-($a/$b),2);
            }
            return $nghiem;
        }
        //giải phương trình bậc 2
        function giai_pt_bac2($a,$b,$c){
            if($a==0) $nghiem = giai_pt_bac1 ($b, $c);
            if($a<>0){
                $delta = pow($b, 2) - 4*$a*$c;
                if($delta<0) $nghiem = "Phương trình vô nghiệm";
                if($delta == 0){
                    $nghiem = "Phương trình có nghiệm kép x1=x2= ".-($b/2*$a);
                }
                else{
                    $can_delta = sqrt($delta);
                    $x1 = (-$b+$can_delta)/(2*$a);
                    $x2 = (-$b-$can_delta)/(2*$a);
                    $nghiem = "Phương trình có 2 nghiệm phân biệt X1= ".round($x1,2)." X2= ".round($x2,2);
                }
            }
            return $nghiem;
        }
        
        
        ?>
        
        <form action="Bai5_p2.php" method="post">
            
            <table border="2">
                
                <tr>
                    <td colspan="4" bgcolor="yellow">Giải phương trình bậc 2</td>
                </tr>
                <tr>
                    <td>
                        Phương trình:
                    </td>
                    <td>
                        <input type="text" name="soa">&emsp;X^2 +&emsp;
                    </td>
                    <td>
                        <input type="text" name="sob">&emsp;X+&emsp;
                    </td>
                    <td>
                        <input type="text" name="soc">&emsp;= 0&emsp;
                    </td>
                </tr>
                <tr>
                    <td colspan="4">
                        Nghiệm: &emsp;&emsp;
                        <input type="text" size="91" value="<?php if(isset($nghiem)) echo htmlspecialchars($nghiem); ?>">
                    </td>
                </tr>
                <tr>
                    <td colspan="4">
                <center><input type="submit" value="Xuất"></center>
                    </td>
                </tr>
                
            </table>
            
        </form>
        
    </body>
</html>