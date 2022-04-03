<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>자연수의 합</title>
    </head>
    <body>
        <?php

        function sum(&$num) {
            for ($sum = 0, $i = 1; $i <= $num; $i ++) {
                $sum += $i;
            }
			$num = $sum;
        }

		$no = $_GET["n"];
		sum($no);
		echo $no;
		?>
    </body>
</html>
