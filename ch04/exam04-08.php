<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>변수</title>
    </head>
    <body>
        <?php
        $var1 = 10;    // 이름이 var1인 변수에 상수 10 저장
        $var2 = $var1; // 변수 var2에 변수 var1에 저장된 값이 복사
        echo "변수 $var1에 저장된 값은 {$var1}입니다.<br>";
        echo "변수 $var2에 저장된 값은 {$var2}입니다.<br>";
        ?>
    </body>
</html>