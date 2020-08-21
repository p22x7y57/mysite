<!DOCTYPE html>
    <head>
        <title>SANDBOX</title>
        <meta charset="utf-8">
    </head>
    <body>   
        <?php

        //function colorNumber($number, $color) {
            //echo '<font color="' . $color . '"><strong>' . $number . '</strong></font>';
            //return $number;
            //}

        //sayHello(1, 'red'); //call the function
        echo '<table border=1>';
        echo '<tr>';
        for ($i=1;$i<=5;$i++) {
        echo "<td>";
            for ($z=0;$z<=10;$z++) {
            //$a = (string)$i;
            //$b = (string)$z;
            //if ($i | $z == 1) {
                //$a = '<font color="red"><strong>1</strong></font>';
            	//$b = '<font color="red"><strong>1</strong></font>';
            //}


            echo $i . ' * ' . $z . ' = ' . ($i*$z) . '<br>'; }

        echo "</td>";
        }
        ?>
        </tr>
        <tr>
        <?php
        for ($i=6;$i<=10;$i++) {
        echo "<td>";
            for ($z=1;$z<=10;$z++) {
            echo $i.' * '.$z.' = '.($i*$z).'<br>'; }

        echo "</td>";
        }
        echo '</tr>';
        echo '</table>';
        ?>
        
        <font color="red"><strong>HI</strong></font>
    </body>
</html>
