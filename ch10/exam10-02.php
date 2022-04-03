<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>쿠키확인</title>
    </head>
    <body>
        현재시각 : <?= date("Y-m-d H:i:s") ?><br/>
        cookie1 : <?= $_COOKIE["cookie1"] ?><br/>
        cookie2 : <?= $_COOKIE["cookie2"] ?><br/>
        cookie3 : <?= $_COOKIE["cookie3"] ?><br/>
        <a href="./exam10-01.php">쿠키설정</a><br/>
        <a href="./exam10-03.php">쿠키삭제</a><br/>
    </body>
</html>
