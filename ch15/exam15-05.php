<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>exam13-05.php</title>
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

        $sql = "SELECT `userid`, `username`, `email`, `phone` FROM `book_members`";
        echo "$sql<br>";

        $result = $mysqli->query($sql); // SQL 실행
        if (!$result) { // SQL에 오류가 있는 경우
            echo "SQL에 오류가 있습니다.<br>";
            exit();     // 프로그램 종료
        }

        $num = $mysqli->num_rows; // 검색된 레코드 수
        echo "{$num}개의 결과가 검색됐습니다.<br>";

        $row = $mysqli->fetch_row(); // 검색된 결과셋에서 레코드 하나를 가져옴
        if ($row != null) { // 검색된 결과가 있으면
            echo "아이디 : {$row[0]}<br>"; // 필드명을 첨자로하여 원하는 데이터에 접근
            echo "회원명 : {$row[1]}<br>";
            echo "이메일 : {$row[2]}<br>";
            echo "연락처 : {$row[3]}<br>";
        }

        echo "<pre>";
        var_dump($row);
        echo "</pre>";

        $mysqli->close(); // MySQL 연결 종료
        ?>
    </body>
</html>
