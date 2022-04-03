<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>함수</title>
    </head>
    <body>
        <?php

        function add($a, $b) { // add 함수의 정의
            return $a + $b;    // $a+$b의 결과를 돌려줌
        }

        echo "5 + 10 = ";
        echo add(5, 10);       // 15(5+10의 결과) 출력
        echo "<br>";

        echo "10 + 100 = ";
        echo add(10, 100);     // 110(10+100의 결과) 출력
        echo "<br>";

        echo "add(10, 100) + 1000 = ";
        echo add(10, 100) + 1000; // 1110(110(10+100의 결과) + 1000) 출력
        echo "<br>";
        ?>
    </body>
</html>
