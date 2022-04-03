<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>for 반복문</title>
    </head>
    <body>
        <?php
        $sum = 0;
        for ($i = 0; $i <= 100; $i + 2) {
            $sum = $sum + $i;
        }
        echo "1에서 100까지 짝수의 합은 $sum 입니다.";
        ?>
    </body>
</html>
