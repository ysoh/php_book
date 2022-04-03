<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>증감 연산자</title>
    </head>
    <body>
        <?php
        $a = 10; //$a 변수에 10 저장
        $b = 3; //$b 변수에 3 저장
        echo "\$a의 값: $a <br>";
        echo "\$b의 값: $b <br><br>";

        $a++;
        $b--;
        echo "\$a++, \$b-- 실행 후 결과<br>";
        echo "\$a의 값: $a <br>";
        echo "\$b의 값: $b <br><br>";

        ++$a;
        --$b;
        echo "++\$a, --\$b 실행 후 결과<br>";
        echo "\$a의 값: $a <br>";
        echo "\$b의 값: $b <br><br>";
        ?>
    </body>
</html>
