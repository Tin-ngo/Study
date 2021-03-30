<!--
    //2 cách tạo mảng asociative
                 cách 1: $age = array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
       
                 cách 2:
                         $age['Peter']="35";
                         $age['Ben']="37";
                         $age['Joe']="43";

-->
<html>
    <body>
        <p>tạo mảng dùng array:<br>
            <?php
                $age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
                echo "Peter is " . $age['Peter'] . " years old.";
             ?>

        </p>
        <p>tạo mảng dùng cách 2:<br>
            <?php
                  $age['Peter']="35";
                  $age['Ben']="37";
                   $age['Joe']="43";
                  echo "Peter is " . $age['Peter'] . " years old.";
            ?>
        </p>
    </body>
</html>