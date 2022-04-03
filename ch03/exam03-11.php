<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>총점 및 평균 계산</title>
    </head>
    <body>
        국어 : <?= $_GET["kor"] ?>점<br>
        수학 : <?= $_GET["mat"] ?>점<br>
        영어 : <?= $_GET["eng"] ?>점<br>
        <?php
            $total = $_GET["kor"] + $_GET["mat"] + $_GET["eng"];
            $avg = $total / 3;
        ?>
        총점 : <?= $total ?>점<br>
        평균 : <?= $avg ?>점<br>
    </body>
</html>
