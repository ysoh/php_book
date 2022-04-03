<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>array 함수</title>
    </head>
    <body>
        <?php
        // 스칼라 배열의 생성
        $array1 = array(10, 20, 30);

        $size1 = sizeof($array1);
        echo "Size of array1 = $size1<br>";
        echo "\$array1[0] = $array1[0]<br>";
        echo "\$array1[1] = $array1[1]<br>";
        echo "\$array1[2] = $array1[2]<br>";

        echo "<br>";
        
        // 연관 배열의 생성
        $score = array("Lee" => 100, "Kim" => 90, "Seo" => 80);

        $size2 = sizeof($score);
        echo "Size of score = $size2<br>";
        echo "Lee : {$score["Lee"]}점<br>";
        echo "Kim : {$score["Kim"]}점<br>";
        echo "Seo : {$score["Seo"]}점<br>";
        ?>
    </body>
</html>
