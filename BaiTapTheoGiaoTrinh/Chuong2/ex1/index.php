<!DOCTYPE HTML>
<hmtl>
<head> 
        <meta charset="utf-8">
        <title> Tính giảm giá sản phẩm</title>
        <link rel="stylesheet" type="text/css" href="main.css">
</head>
 
<body>
        <main>
            <h1> Tính giảm giá sản phẩm</h1>
            <form action="display_discount.php" method="post">
            
                <div id="data">
                    
                    <label>Mô tả sản phẩm: </label>
                 <input type="text" name="motasanpham">
                 <br>
                 <label>Giá sản phẩm: </label>
                 <input type="text" name="giasanpham" >
                 <br>
                 <label>Phần trăm giảm giá: </label>
                 <input type="text" name="phantramgiamgia" ><span>%</span>
                 <br>
                 
                </div>
                
                <div id="button">
                  <label> </label>
                 <input type="submit" name="tinhgiangia" value="Tính giảm giá">
            
                </div>
            
            </form>
        </main>
</body>
    
</hmtl>