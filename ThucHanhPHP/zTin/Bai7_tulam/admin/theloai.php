<!DOCUTYPE html>
<html>
    
    <head>
        
        <title>Trang xem thể loại</title>
        <meta charset='utf-8'>
        
    </head>
    
    <body>
        <?php include_once '../connect.php'; ?>
        <form>
            
            <table align='center' width='600' border='1' cellpadding='10' cellspacing='1'>
                
                <tr>
                    <td>Tên thể loại</td>
              
                    <td>Thứ tự</td>
               
                    <td>Ẩn hiện</td> 
                
                    <td>Icon</td>
                
                    <td colspan="2">
                        <a href='theloai_them_giaodien.php'>Thêm</a>
                    </td>
                </tr>
                
                
                <?php
                $sql = "select * from theloai";
                $result = mysqli_query($connect,$sql);
                while( ($row = mysqli_fetch_assoc($result)) != NULL)
                        {
                ?>
                
                <tr>
                    <td><?php echo $row['TenTL']; ?></td>
                    
                    <td><?php echo $row['ThuTu']; ?></td>
                    
                    <td>
                        <?php 
                        if($row['AnHien'] == 1){
                            echo 'Hiện';
                        }
                        else{
                             echo 'Ẩn';
                        }
                        ?>
                    </td>
                    
                    <td>
                        <img src="../image/<?php echo $row['icon'] ?>" widh='40' height='40'>
                    </td>
                    
                    <td>
                        <a href='theloai_sua.php?idTL=<?php echo $row['idTL']; ?>'>Sửa</a>
                    </td>
                    
                    <td>
                        <a href="theloai_xoa.php?idTL=<?php echo $row['idTL']; ?>" onclick="return confirm('Bạn có chắc chắn không?');">
                        Xóa</a>
                    </td>
                    
                    
                </tr>
                
                
                
                
                
                
                <?php
                        }
                ?>
                
            </table>
            
        </form>
        
    </body>
    
</html>