<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>변수의 자료형</title>
    </head>
    <body>
        <?php
        $int = 10;    // 정수 저장
        $real = 10.0; // 실수 저장
        $str = "10";  // 문자열 저장
        ?>
        변수 $int 자료형 <?= gettype($int);   // 정수 ?><br>
        변수 $real 자료형 <?= gettype($real); // 실수 ?><br>
        변수 $str 자료형 <?= gettype($str);   // 문자열 ?><br>
        <?php
        $int = $str; // 변수 str의 값 변수 int에 복사
        ?>
        변수 $int 자료형 <?= gettype($int);  // 문자열 ?><br>
    </body>
</html>