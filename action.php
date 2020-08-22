<!DOCTYPE html>
    <head>
        <title>SANDBOX</title>
        <meta charset="utf-8">
    </head>
    <nav>
        <a href="lesson_1.php">урок 1</a>
        <a href="lesson_2.php">урок 2</a>
        <a href="lesson_3.php">урок 3</a>
    </nav>
    <body>
        <main>
        	<br>
            <?php
            	function utf8_strrev($str){
				    preg_match_all('/./us', $str, $ar);
				    	return join('', array_reverse($ar[0]));
				}

				echo utf8_strrev(htmlspecialchars($_POST['name']));
			?>
			<form action="lesson_3.php" method="back">
                <p><input  value="Назад" type="submit" /></p>
            </form>
        </main>
        <footer>
        </footer>
    </body>
</html>



