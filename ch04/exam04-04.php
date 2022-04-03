<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>사용자 정의 상수</title>
    </head>
    <body>
        <?php
        define(COMPANY, "현대");
        echo COMPANY;  // 현대 출력
        echo "<br>";
        define("VOLTAGE", 220);
        echo VOLTAGE;  // 220 출력
        ?>
    </body>
</html>