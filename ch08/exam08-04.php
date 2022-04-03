<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>별 출력 함수</title>
    </head>
    <body>
        <?php

        function stars($n) {
            for ($star = "", $i = 0; $i < $n; $i ++) {
                $star .= "*";  // 반복문 안에서 n 개의 *을 구성한 후
            }
            return $star;      // 구성된 n 개의 별을 결과로 반환
        }
        ?>
        stars(5) : <?= stars(5)   //  5 개의 별을 함수 밖에서 출력 ?><br>
        stars(10) : <?= stars(10) // 10 개의 별을 함수 밖에서 출력 ?><br>
    </body>
</html>
