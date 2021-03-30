<!--
    //2 cách tạo mảng indexed
                 cách 1: $cars = array("Volvo","BMW","Toyota");
       
                 cách 2:
                         $xe[0]="Xe hơi";
                         $xe[1]="Xe máy";
                         $xe[2]="Xe đạp";
-->
<html>
    <body>
        <p>tạo mảng dùng array:<br>
            <?php
                  $cars=array("Volvo","BMW","Toyota");
                  echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
            ?>

        
        </p>
        <p>tạo mảng dùng cách 2:<br>
            <?php
                  $cars[0]="Volvo";
                  $cars[1]="BMW";
                  $cars[2]="TOyota";
                  echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
            ?>
        </p>
    </body>
</html>