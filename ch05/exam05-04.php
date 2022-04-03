<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>연산자와 자료형</title>
    </head>
    <body>
        <?php
        $a = 10;
        $b = "10";
        $typea = gettype($a);
        $typeb = gettype($b);
        echo "\$a의 값 : $a, \$a의 자료형 : $typea <br>";
        echo "\$b의 값 : $b, \$b의 자료형 : $typeb <br><br>";

        $a = $a . $b;
        $typea = gettype($a);
        echo "\$a = \$a . \$b => \$a의 값 : $a, \$a의 자료형 : $typea ,";
        echo "\$b의 값 : $b, \$b의 자료형 : $typeb <br><br>";

        $b = $a + $b;
        $typeb = gettype($b);
        echo "\$b = \$a + \$b => \$a의 값 : $a, \$a의 자료형 : $typea ,";
        echo "\$b의 값 : $b, \$b의 자료형 : $typeb <br><br>";
        ?>
    </body>
</html>
