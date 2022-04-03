<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>while 반복문</title>
    </head>
    <body>
        <?php
        $sum = 0;
        $i = 1;
        while ($i <= 100) {
            $sum = $sum + $i;
            $i += 2;
        }
        echo "1에서 100까지 홀수의 합은 $sum 입니다.";
        ?>
    </body>
</html>
