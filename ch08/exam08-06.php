<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>반환 값이 없는 return문</title>
    </head>
    <body>
        <?php

        function print_grade($score) {
            $grade = floor($score / 10); // $score/10 계산 후 소수점 이하를 버림
            switch ($grade) {
                case 10: // 100점
                case 9:  // 90점-99점
                    echo "등급 : A <br>";
                    return;
                case 8:  // 80점-89점
                    echo "등급 : B <br>";
                    return;
                case 7:  // 70점-79점
                    echo "등급 : C <br>";
                    return;
                case 6:  // 60점-60점
                    echo "등급 : D <br>";
                    return;
                default: // 60점 미만
                    echo "등급 : F <br>";
                    return;
            }
        }

        $score = rand() % 101;  // 0에서 100 사이의 임의의 점수 생성
        echo "점수: {$score} <br>";
        print_grade($score); // 함수호출
        ?>
    </body>
</html>
