<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>do 반복문</title>
    </head>
    <body>
        <?php
        $sum = 0;
        $i = 1;
        do {
            $sum = $sum + $i;
            $i ++;
        } while ($i <= 100);
        echo "1에서 100까지 자연수의 합은 $sum 입니다.";
        ?>
    </body>
</html>
