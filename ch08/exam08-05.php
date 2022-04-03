<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>자연수의 합</title>
    </head>
    <body>
        <?php

        function sum($num) {
            for ($sum = 0, $i = 1; $i <= $num; $i ++) {
                $sum += $i;
            }
            return $sum;
        }
        ?>
        1에서 <?= $_GET["n"] ?>까지 자연수의 합은
        <?= sum($_GET["n"]) ?> 입니다.
    </body>
</html>
