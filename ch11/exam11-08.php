<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>폼처리 GET</title>
    </head>
    <body>
        <form action="exam11-09.php" method="get">
            취미:<br>
            <select name="hobby">
                <option value="book">독서</option>
                <option value="movie" selected>영화감상</option>
                <option value="tour">여행</option>
            </select><br>
            소개:<br>
            <textarea rows="5" cols="50" name="intro"></textarea><br>
            <input type="button" value="버튼">
            <input type="reset" value="취소">
            <input type="submit" value="등록">
        </form>
    </body>
</html>
