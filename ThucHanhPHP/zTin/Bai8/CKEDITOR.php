<!DOCUTYPE html>
<html>
    
    <head>
        
        <meta charset="utf-8">
        <title>CKEDITOR Test</title>
        <script type="text/javascript" src="ckeditor/ckeditor.js"></script>
        
    </head>
    <body>
        
        <form action="" method="post">
            
            <textarea name="tomtat"></textarea>
            <script type="text/javascript">
                CKEDITOR.replace('tomtat');
            </script>
            
            <input type="submit" value="ok" />
        </form>
        
    </body>
</html>