<!DOCTYPE html>
<html>
    <head>
        <meta charset = "UTF-8">
        <title>회원수정폼</title>
    </head>
    <body>
        <?php
        // MySQL 서버 연결 및 데이터베이스 선택
        $mysqli = new mysqli("localhost", "dbuser", "dbpass", "webdb_book");
        if (!$link) { // DB연결에 실패한 경우
            echo "DB 연결에 실패했습니다.<br>";
            exit();   // 프로그램 종료
        }

        $char = $mysqli->set_charset("utf8"); // DB 문자셋 설정
        if (!$char) { // 문자셋 설정에 실패한 경우
            echo "UTF-8 문자셋을 설정하지 못했습니다.<br>";
            exit();   // 프로그램 종료
        }

        $sql = "SELECT `userid`, `username`, `email`, `phone`
                FROM `book_members`
                WHERE `userid`='{$_GET["userid"]}'";

        echo "$sql<br>";

        $result = $mysqli->query($sql); // SQL 실행
        if (!$result) { // SQL에 오류가 있는 경우
            echo "SQL에 오류가 있습니다.<br>";
            exit();     // 프로그램 종료
        }

        $row = $mysqli->fetch_assoc(); // 검색된 결과에서 레코드 하나를 가져옴
        ?>
        <form action = "exam13-09.php" method = "post">
            아이디 : <?= $row["userid"] ?><br>
            <input type="hidden" name="userid"
             value="<?= $row["userid"] ?>">
            비밀번호 : <br>
            <input type = "password" name = "password"><br>
            성명 : <br>
            <input type = "text" name = "username"
             value="<?= $row["username"] ?>"><br>
            이메일 : <br>
            <input type = "text" name = "email"
             value="<?= $row["email"] ?>"><br>
            연락처 : <br>
            <input type = "text" name = "phone"
             value="<?= $row["phone"] ?>"><br>
            <input type = "submit" value = "정보수정">
        </form>
    </body>
</html>
