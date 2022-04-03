<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>switch 문</title>
    </head>
    <body>
        <?php
        $num = rand();

        echo "{$num}은 ";

        switch ($num % 2) {
            case 0 : echo "짝수 ";
                break;
            case 1 : echo "홀수 ";
        }

        echo "입니다.";
        ?>
    </body>
</html>
