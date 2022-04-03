<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>if else 조건문</title>
    </head>
    <body>
        <?php
        $a = rand(-10, 10);

        echo "$a 의 절대값은 ";

        if ($a >= 0) {
            $a = $a;
        } else {
            $a = -$a;
        }

        echo "$a 입니다.<br>";
        ?>
    </body>
</html>
