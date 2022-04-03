<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>별 출력 함수</title>
    </head>
    <body>
        <?php

        function print_star($n) {
            for ($star = "", $i = 0; $i < $n; $i ++) {
                $star .= "*"; // 반복문 안에서 n 개의 *을 구성한 후
            }
            echo $star;       // 함수 내에서 출력
        }
        ?>
        print_star(5) : <?php print_star(5) ?><br>
        print_star(10) : <?php print_star(10) ?><br>
    </body>
</html>
