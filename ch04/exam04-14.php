<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>2차원 스칼라 배열의 초기화</title>
    </head>
    <body>
        <?php
        // 첨자를 이용한 초기화
        $arr1[0][0] = "00";
        $arr1[0][1] = "01";
        $arr1[1][0] = "10";
        $arr1[1][1] = "11";

        echo "\$arr1[0][0] = {$arr1[0][0]}<br>";
        echo "\$arr1[0][1] = {$arr1[0][1]}<br>";
        echo "\$arr1[1][0] = {$arr1[1][0]}<br>";
        echo "\$arr1[1][1] = {$arr1[1][1]}<br>";

        echo "<br>";

        // array 함수를 이용한 초기화 
        $arr2 = array(
            array("00", "01"),
            array("10", "11")
        );

        echo "\$arr2[0][0] = {$arr2[0][0]}<br>";
        echo "\$arr2[0][1] = {$arr2[0][1]}<br>";
        echo "\$arr2[1][0] = {$arr2[1][0]}<br>";
        echo "\$arr2[1][1] = {$arr2[1][1]}<br>";
        ?>
    </body>
</html>
