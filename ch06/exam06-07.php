<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>switch 문</title>
    </head>
    <body>
        <?php
        $rank = rand(1, 3);

        echo "{$rank}등 상품은 ";

        switch ($rank) {
            case 1 : echo "컴퓨터 ";
            case 2 : echo "모니터 ";
            case 3 : echo "프린터 ";
        }

        echo "입니다.";
        ?>
    </body>
</html>
