<!DOCUTYPE html>
<html>
    
    <head>
        
        <title>Lỗi database</title>
        <meta charset="utf-8">
        
    </head>
    
    <body>
        
        <header><h1> My Guitar Shop </h1></header>
        
        <main>
            
            <h1>Database Error </h1>
            <p> Đã xảy ra lỗi khi kết nối với cơ sở dữ liệu. </p>
            <p> Cơ sở dữ liệu phải được cài đặt như mô tả trong phụ lục. </p>
            <p> MySQL phải đang chạy như được mô tả trong chương 1. </p>
            <p>Error message: <?php echo $error_messenger; ?>
            <p>&nbsp;</p>
            
        </main>
        
        <footer>
            <p>&copy; <?php echo date("d/m/Y"); ?> My Guitar Shop, Inc.</p>
        </footer>
        
    </body>
    
</html>

