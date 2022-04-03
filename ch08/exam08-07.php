<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>자연수의 합</title>
    </head>
    <body>
        <?php

        function sum($num) { // $num = 10 이라 가정하면
            if ($num == 1) {
                return 1;
            } else {
                return $num + sum($num - 1); // 10 + sum(9)을 결과로 돌려줌
            }
        }
        ?>
        1에서 <?= $_GET["n"] ?>까지 자연수의 합은
        <?= sum($_GET["n"]) ?> 입니다.
    </body>
</html>
