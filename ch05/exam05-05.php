<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>대입 연산자</title>
    </head>
    <body>
        <?php
        $a = 10; // $a에 10을 대입 
        $b = 3;  // $b에3을 대입
        echo "a = $a<br>";
        echo "b = $b<br>";
        $a += $b;          // $a = $a + $b 
        echo "a += b => a = $a <br>";
        $a -= $b;          // $a = $a - $b; 
        echo "a -= b => a = $a <br>";
        $a %= $b;          // $a = $a % $b; 
        echo "a %= b => a = $a <br>";
        $a += $b - $a;     // $a = $a + ($b - $a); 
        echo "a += b - a => a = $a <br>";
        $a += $b + $a;     // $a = $a + ($b + $a); 
        echo "a += b + a => a = $a <br>";
        $a += $b % $a;     // $a = $a + ($b % $a); 
        echo "a += b % a => a = $a <br>";
        ?>
    </body>
</html>
