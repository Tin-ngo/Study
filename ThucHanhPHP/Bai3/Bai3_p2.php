<!docutype html>
<html>
    
    <title>Đọc số</title>
    <meta charset="utf-8">
    <link type="text/css" rel="stylesheet" href="style.scss">
    
    <body>
        
        <?php
        if(isset($_POST["nhapso"])){
            if(is_numeric($_POST["nhapso"])){
                switch ($_POST["nhapso"]){
                    case 0:
                        $xuatso = 'không';
                        break;
                    case 1:
                        $xuatso = 'Một';
                        break;
                    case 2:
                        $xuatso = 'Hai';
                        break;
                    case 3:
                        $xuatso = 'Ba';
                        break;
                    case 4:
                        $xuatso = 'Bốn';
                        break;
                    case 5:
                        $xuatso = 'Năm';
                        break;
                    case 6:
                        $xuatso = 'Sáu';
                        break;
                    case 7:
                        $xuatso = 'Bảy';
                        break;
                    case 8:
                        $xuatso = 'Tám';
                        break;
                    case 9:
                        $xuatso = 'Chín';
                        break;
                    default:
                        $xuatso = 'Bạn hãy nhập số từ 0 đến 9';
                        break;
                }
            }
        }
        else{
            $xuatso = "";
        }
        ?>
        
        <form action="Bai3_p2.php" method="post">
            
            <table border="1">
                <tr>
                    <td colspan="3">Đọc số</td>
                </tr>
                <tr>
                    <td> Nhập số( 0 -> 9 ) </td>
                    <td rowspan="2">
                        <input type="submit" value="Submit">
                    </td>
                    <td>Bằng chữ</td>
                </tr>
                <tr>
                    <td ><input type="text" name="nhapso"></td>
                    <td><input type="text" value=<?php echo $xuatso; ?> ></td>
                </tr>
            </table>
            
        </form>
        
    </body>
    
</html>