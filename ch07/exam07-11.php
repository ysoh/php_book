<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>foreach 반복문</title>
    </head>
    <body>
        <?php
        // 스칼라 배열 생성
        $array = array(10, 20, 30);

        for ($i = 0; $i < sizeof($array); $i++) {
            echo "array[$i] = {$array[$i]}<br>";
        }

        // 연관 배열 생성
        $score = array("Hong" => 100, "Kim" => 90, "Park" => 80);

        foreach ($score as $key => $value) {
            echo "$key {$value}점<br>";
        }
        ?>
    </body>
</html>
