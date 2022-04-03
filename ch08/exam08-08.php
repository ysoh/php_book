<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>별 출력 함수</title>
    </head>
    <body>
        <?php

        function stars($n) { // $num = 10 이라 가정하면
            if ($n == 1) {
                return "*";
            } else {
                return "*" . stars($n - 1); // '*' + star(9)을 결과로 돌려줌
            }
        }
        ?>
        print_star(<?= $_GET["n"] ?> ) : <?= stars($_GET["n"]) ?>
    </body>
</html>
