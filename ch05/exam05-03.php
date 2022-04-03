<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>문자열 연산자</title>
    </head>
    <body>
        <?php
        $a = "Web ";
        $b = "Programming";
        $c = $a . $b;
        echo "$c <br>";

        $d = "PHP ";
        $e = $d . $c . "!!!";
        echo "$e <br>";

        $f = 10;
        $g = 5;
        $h = $f * $g;

        $i = $f . " 곱하기 " . $g . "는 " . $h . "입니다.";
        //$i = "$f 곱하기 {$g}는 {$h}입니다.";
        echo "$i <br>";
        ?>
    </body>
</html>
