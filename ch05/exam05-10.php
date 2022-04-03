<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>삼항 연산자</title>
    </head>
    <body>
        <?php
        $a = 10;
        $b = 20;
        
        // $a > $b는 거짓이므로 $c = $b
        $c = ($a > $b) ? $a : $b;
        
        echo "입력된 두 수 $a, $b 중 큰 값은 $c 입니다.<br>";
        echo "그리고 두 수의 크기는 ";
        
        // $a != $b는 참이므로 echo "다릅니다." 실행
        echo ($a != $b) ? "다릅니다." : "같습니다.";
        ?>
    </body>
</html>
