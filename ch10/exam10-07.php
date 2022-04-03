<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>모든세션변수삭제</title>
    </head>
    <body>
        세션ID : <?= session_id() ?><br>
        <?php
        session_unset();
        ?>
        session1 : <?= $_SESSION["session1"] ?><br>
        session2 : <?= $_SESSION["session2"] ?><br>
        session3 : <?= $_SESSION["session3"] ?><br>
        <a href="./exam10-04.php">세션설정</a><br>
        <a href="./exam10-05.php">세션확인</a><br>
        <a href="./exam10-06.php">세션변수 session1 삭제</a><br>
        <a href="./exam10-08.php">세션삭제</a><br>
    </body>
</html>
