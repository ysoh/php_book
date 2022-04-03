<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>continue 문(오류)</title>
    </head>
    <body>
        <?php
        $i = 0;
        while ($i <= 10) {
            if ($i % 2 == 1) {
                continue;
            }
            echo "$i <br>";
            $i++;
        }
        ?>
    </body>
</html>
