<!DOCTYPE html>
<html>
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <title>Untitled Document</title>
    <script type="text/javascript" src="ckeditor/ckeditor.js"></script>
    </head>

    <body>
        <form action="_posteddata.php" method="post">
            <textarea name="tomtat" cols="" rows=""></textarea>
            <script type="text/javascript">
			//<![CDATA[

				// This call can be placed at any point after the
				// <textarea>, or inside a <head><script> in a
				// window.onload event handler.

				// Replace the <textarea id="editor"> with an CKEditor
				// instance, using default configurations.
				CKEDITOR.replace( 'tomtat' );
				

			//]]>
	    </script>
			<input name="ok" type="submit" value="Ok" />
        </form>
    </body>
</html>

