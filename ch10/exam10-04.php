<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>세션설정</title>
    </head>
    <body>
        세션ID : <?= session_id() ?><br>
        <?php
        $_SESSION["session1"] = "세션1";
        $_SESSION["session2"] = "세션2";
        $_SESSION["session3"] = "세션3";
        ?>
        <a href="./exam10-05.php">세션확인</a><br>
        <a href="./exam10-06.php">세션변수 session1 삭제</a><br>
        <a href="./exam10-07.php">모든세션변수삭제</a><br>
        <a href="./exam10-08.php">세션삭제</a><br>
    </body>
</html>
