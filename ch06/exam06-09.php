<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>switch 문</title>
    </head>
    <body>
        <?php
        $num = rand(0,10);
        
        echo "{$num}은 ";
        
        switch($num) {
            case  0 : 
            case  2 : 
            case  4 : 
            case  6 : 
            case  8 : 
            case 10 : echo "짝수 ";
                      break;
            case  1 : 
            case  3 : 
            case  5 : 
            case  7 : 
            case  9 : echo "홀수 ";
        }
        
        echo "입니다.";
        ?>
    </body>
</html>
