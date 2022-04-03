<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>연산자 우선 순위</title>
    </head>
    <body>
        <?php
        $a = 100;
        $b = 200;
        $c = 300;
        echo "\$a = $a, \$b = $b, \$c = $c<br><br>";
        
        echo "세 수 $a, $b, {$c}의 평균값은 ";
        echo $a + $b + $c / 3;   // 잘못된 평균값 ($c / 3 먼저 계산)
        echo " 입니다.<br><br>";

        echo "세 수 $a, $b, {$c}의 평균값은 ";
        echo ($a + $b + $c) / 3; // 올바른 평균값
        echo " 입니다.<br><br>";
        
        
        echo "\$a + \$b . \$c * \$a = ";
        echo $a + $b . $c * $a;   // ((100 + 200) . (300 * 100))
        echo "<br><br>";
        
        echo "\$a + (\$b . \$c) * \$a = ";
        echo $a + ($b . $c) * $a; // (100 + ((200 . 300) * 100))
        echo "<br><br>";
        ?>
    </body>
</html>
