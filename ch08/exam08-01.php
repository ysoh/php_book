<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>함수</title>
    </head>
    <body>
        <?php

        function add($a, $b) { // add 함수의 정의
            echo $a + $b;      // $a+$b를 출력
        }

        echo "5 + 10 = ";
        add(5, 10);  // $a=5, $b=10을 가지고 add 함수를 실행, 15 출력
        echo "<br>";

        echo "10 + 100 = ";
        add(10, 100); // $a=10, $b=100을 가지고 add 함수를 실행, 110 출력
        echo "<br>";
        ?>
    </body>
</html>
