<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>스칼라 배열</title>
    </head>
    <body>
        <?php
        $array1[0] = 10;
        $array1[1] = 20;
        $array1[2] = 30;

        $size1 = sizeof($array1);
        echo "Size of array1 = $size1<br>";
        echo "\$array1[0] = $array1[0]<br>";
        echo "\$array1[1] = $array1[1]<br>";
        echo "\$array1[2] = $array1[2]<br>";

        echo "<br>";
        
        $array2[] = 100;
        $array2[] = 200;
        $array2[] = 300;

        $size2 = sizeof($array2);
        echo "Size of array2 = $size2<br>";
        echo "\$array2[0] = $array2[0]<br>";
        echo "\$array2[1] = $array2[1]<br>";
        echo "\$array2[2] = $array2[2]<br>";
        ?>
    </body>
</html>
