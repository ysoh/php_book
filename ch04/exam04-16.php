<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>특수배열</title>
    </head>
    <body>
        웹서버이름 : <?= $_SERVER["HTTP_HOST"] ?><br>
        웹서버포트 : <?= $_SERVER["SERVER_PORT"] ?><br>
        클라이언트주소 : <?= $_SERVER["REMOTE_ADDR"] ?><br>
        요청URI : <?= $_SERVER["REQUEST_URI"] ?><br>
        실행프로그램 : <?= $_SERVER["PHP_SELF"] ?><br>
        쿼리스트링 : <?= $_SERVER["QUERY_STRING"] ?><br>
    </body>
</html>
