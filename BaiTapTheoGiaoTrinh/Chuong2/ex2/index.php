<?php
       if(!isset($dautu)){ $dautu = ''; }
       if(!isset($laisuat)) { $laisuat = ''; }
       if(!isset($nam)) { $nam = ''; }
?>
<!Docutype hmtl>
<hmtl>
    <head>
        <meta charset="utf-8">
        <title>Tính lãi suất</title>
        <link type="text/css" rel="stylesheet" href="main.scss">
    </head>
    
    <body>
        <main>
            <h1>Tính toán giá trị tương lai</h1>
            
            <?php if(!empty($error_messenger)) { ?>
                   <p><?php    echo htmlspecialchars($error_messenger); ?>
            <?php } ?>
                       
                   <form action="display_result.php" method="post">
                       
                       <div id="data">
                           <label>Số tiền đầu tư:</label>
                           <input type="text" name="dautu">
                           <br>
                           <label>Lãi suất hàng năm: </label>
                           <input type="text" name="laisuat">
                           <br>
                           <label>Số năm: </label>
                           <input type="text" name="sonam">
                           <br>
                       </div>
                       <div id="buttons">
                           <label> </label>
                           <input type="submit" value="tinh">
                       </div>
                       
                   </form>
                       
                       
        </main>
    </body>
    
</hmtl>