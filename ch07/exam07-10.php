<!DOCTYPE html>
<html lang="ko">
    <head>
        <meta charset="UTF-8">
        <title>중첩 반복문</title>
        <style>
            table, th, td {border: 1px black solid;}
        </style>
    </head>
    <body>
        <table>
            <caption>구구단</caption>
            <tbody>
                <?php for ($i = 1; $i <= 9; $i++) { ?>
                    <tr>
                        <?php for ($j = 2; $j <= 9; $j++) { ?>
                            <td><?= $j ?>x<?= $i ?>=<?= $i * $j ?></td>
                        <?php } ?>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </body>
</html>