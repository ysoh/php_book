<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>쿠키설정</title>
    </head>
    <body>
        쿠키설정시각 : <?= date("Y-m-d H:i:s") ?><br>
        <?php
        setcookie("cookie1", "쿠키#1", 0, "/"); // 브라우저 종료 전까지 유지
        setcookie("cookie2", "쿠키#2", time() + 60, "/"); // 1분 동안 유지
        setcookie("cookie3", "쿠키#3", mktime(16, 15, 00, 5, 2, 2019), "/"); // 2018년12월28일 오전 10시30분00초 까지 유지
        ?>
        <a href="./exam10-02.php">쿠키확인</a><br>
        <a href="./exam10-03.php">쿠키삭제</a><br>
    </body>
</html>
