<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>폼처리 GET</title>
    </head>
    <body>
        <form action="exam11-07.php" method="get">
            아이디:<br>
            <input type="text" name="id"><br>
            비밀번호:<br>
            <input type="password" name="pass"><br>
            성별:<br>
            <input type="radio" name="gender" value="male" checked>남
            <input type="radio" name="gender" value="female">여<br>
            취미:<br>
            <input type="checkbox" name="hobby" value="book" checked>독서
            <input type="checkbox" name="hobby" value="movie">영화감상
            <input type="checkbox" name="hobby" value="tour">여행<br>
            <input type="button" value="버튼">
            <input type="reset" value="취소">
            <input type="submit" value="등록">
        </form>
    </body>
</html>
