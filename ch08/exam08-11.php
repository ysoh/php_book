<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>값호출</title>
    </head>
    <body>
        <?php
        function swap($a, $b) {
            $tmp = $a;
            $a = $b;
            $b = $tmp;
        }

        $num1 = 10;
        $num2 = 20;
        echo "swap(\$a, \$b) 실행 전 : \$num1 = $num1, \$num2 = $num2<br>";

        swap($num1, $num2);
        echo "swap(\$a, \$b) 실행 후 : \$num1 = $num1, \$num2 = $num2<br>";

        ?>
    </body>
</html>
