<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>elseif 조건문</title>
    </head>
    <body>
        <?php
        $score = rand(0, 100);

        echo "점수 : {$score}점, ";

        if (70 > $score && $score >= 60) {
            echo "평점 : 양";
        } else if (80 > $score && $score >= 70) {
            echo "평점 : 미";
        } else if (90 > $score && $score >= 80) {
            echo "평점 : 우";
        } else if ($score >= 90) {
            echo "평점 : 수";
        } else {
            echo "평점 : 가";
        }
        ?>
    </body>
</html>
