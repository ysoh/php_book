<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>2차원 연관 배열의 초기화</title>
    </head>
    <body>
        <?php
        // 첨자를 이용한 초기화
        $arr1["han"]["weight"] = 60;
        $arr1["han"]["height"] = 170;
        $arr1["seo"]["weight"] = 70;
        $arr1["seo"]["height"] = 180;

        echo "\$arr1[\"han\"][\"weight\"] : {$arr1["han"]["weight"]}<br>";
        echo "\$arr1[\"han\"][\"height\"] : {$arr1["han"]["height"]}<br>";
        echo "\$arr1[\"seo\"][\"weight\"] : {$arr1["seo"]["weight"]}<br>";
        echo "\$arr1[\"seo\"][\"height\"] : {$arr1["seo"]["height"]}<br>";
        
        echo "<br>";

        // array 함수를 이용한 초기화 
        $arr2 = array(
            "han" => array("weight" => 60, "height" => 170),
            "seo" => array("weight" => 70, "height" => 180)
        );
        
        echo "\$arr2[\"han\"][\"weight\"] : {$arr2["han"]["weight"]}<br>";
        echo "\$arr2[\"han\"][\"height\"] : {$arr2["han"]["height"]}<br>";
        echo "\$arr2[\"seo\"][\"weight\"] : {$arr2["seo"]["weight"]}<br>";
        echo "\$arr2[\"seo\"][\"height\"] : {$arr2["seo"]["height"]}<br>";
        ?>
    </body>
</html>
