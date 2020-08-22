<!DOCTYPE html>
    <head>
        <title>SANDBOX</title>
        <meta charset="utf-8">
    </head>
    <nav>
        <a href="lesson_1.php">урок 1</a>
        <a href="lesson_2.php">урок 2</a>
    </nav>
    <body>
        <main>
        <?php

        function addTableRow ($i_min, $i_max) { //$i_min, $i_max это диапазон первого множителя в произведении двух чисел
            echo '<tr>';
            for ($i=$i_min;$i<=$i_max;$i++) {
                echo "<td>";
                for ($z=1;$z<=10;$z++) {
                    echo $i . ' * ' . $z . ' = ' . ($i*$z) . '<br>'; }

            echo "</td>";
            }
            echo "</tr>";
        }

        echo '<table border=1>';
            addTableRow(1, 5); //строка таблицы от 1 до 5
            addTableRow(6, 10); //строка таблицы от 6 до 10
        echo '</table>';

        ?>
    </main>
    <footer>
        Copyright
    </footer>
    </body>
</html>

