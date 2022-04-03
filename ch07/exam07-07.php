<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>continue 문</title>
    </head>
    <body>
        <?php
        for ($i = 0; $i <= 100; $i++) {
            if ($i % 2 == 0) {
                continue;
            }
            echo "$i <br>";
        }
        ?>
    </body>
</html>
