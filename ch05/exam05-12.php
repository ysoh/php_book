<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>연산자 우선 순위</title>
    </head>
    <body>
        <?php
        $a = false || true; // $a = (false || true);
        $b = false or true; // ($b = false) or true;
        var_dump($a, $b);
        echo "<br>";

        $c = true && false;  // $c = (true && false);
        $d = true and false; // ($d = true) and false;
        var_dump($c, $d);
        echo "<br>";
        ?>
    </body>
</html>
