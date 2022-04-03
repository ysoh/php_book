<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>break 문</title>
    </head>
    <body>
        <?php
        $i = 0;
        do {
            if ($i == 10) {
                break;
            }
            echo "$i <br>";
            $i++;
        } while (true)
        ?>
    </body>
</html>
