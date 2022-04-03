<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>쿠키삭제</title>
    </head>
    <body>
        쿠키설정시각 : <?= date("Y-m-d H:i:s") ?><br/>
        <?php
        setcookie("cookie1", null, time() - 3600, "/"); // 1시간 전까지 유지
        setcookie("cookie2", null, time() - 3600, "/"); // 1시간 전은 과거시간이므로 
        setcookie("cookie3", null, time() - 3600, "/"); // 이미 쿠키가 유지되지 않음
        ?>
        <a href="./exam10-01.php">쿠키설정</a><br/>
        <a href="./exam10-02.php">쿠키확인</a><br/>
    </body>
</html>
