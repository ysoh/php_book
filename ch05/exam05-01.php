<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>산술 연산자</title>
    </head>
    <body>
        <?php
        $a = 10; //$a 변수에 10 저장
        $b = 3; //$b 변수에 3 저장

        $add = $a + $b;
        $diff = $a - $b;
        $multi = $a * $b;
        $div = $a / $b;
        $rem = $a % $b;

        echo "\$a의 값: $a <br>";
        echo "\$b의 값: $b <br>";
        echo "$a + $b = $add <br>";
        echo "$a - $b = $diff <br>";
        echo "$a * $b = $multi <br>";
        echo "$a / $b = $div <br>";
        echo "$a % $b = $rem <br>";
        ?>
    </body>
</html>
