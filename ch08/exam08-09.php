<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>함수 내에서 전역 변수의 선언 및 사용</title>
    </head>
    <body>
        <?php
        $a = 500;

        function var_scope() {
            $a = 100;
            echo "2. var_scope() 내부에서의 a는 {$a}입니다. <br>"; // 라인12의 $a
        }

        echo "1. var_scope() 바깥에서의 a는 {$a}입니다. <br>"; // 라인9의 $a
        var_scope();
        echo "3. var_scope() 바깥에서의 a는 {$a}입니다. <br>"; // 라인9의 $a
        ?>
    </body>
</html>
