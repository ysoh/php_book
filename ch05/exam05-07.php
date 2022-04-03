<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>비교 연산자</title>
    </head>
    <body>
        <?php
        $a = 99.9 + 0.1;

        echo "100 == 99.9 + 0.1 : ";
        var_dump(100 == $a);
        echo "<br>";

        echo "100 != 99.9 + 0.1 : ";
        var_dump(100 != $a);
        echo "<br>";

        echo "100 <> 99.9 + 0.1 : ";
        var_dump(100 <> $a);
        echo "<br>";
        ?>
    </body>
</html>
