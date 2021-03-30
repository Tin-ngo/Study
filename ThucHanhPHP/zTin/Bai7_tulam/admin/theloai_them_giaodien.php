<!DOCUTYPE HTML>
<html>
    
    <head>
        
        <title>Thêm tin tức</title>
        <meta charset="utf-8">
        
    </head>
    
    <body>
        
        <form action="theloai_them_xuly.php" method="POST" enctype="multipart/form-data" name="form1">
            
            <table border="0" cellspacing="10" cellpadding="1">
                
                <tr>
                    <td align="right">Tên thể loại</td>
                    <td>
                        <input type="text" name="tentl">
                    </td>
                </tr>
                
                <tr>
                    <td align="right">Thứ tự</td>
                    <td>
                        <input type="text" name="thutu">
                    </td>
                </tr>
                
                <tr>
                    <td align="right">Ẩn hiện</td>
                    <td>
                        <select name="anhien">
                            <option value="0">Ẩn</option>
                            <option value="1">Hiện</option>
                        </select>
                    </td>
                </tr>
                
                <tr>
                    <td align="right">Icon</td>
                    <td>
                        <input type="file" name="icon">
                    </td>
                </tr>
                
                <tr>
                    <td align="right">
                        <input type="submit" value="Thêm">
                    </td>
                    <td>
                        <input type="reset" value="reset">
                    </td>
                </tr>
                
            </table>
            
        </form>
        
    </body>
    
</html>