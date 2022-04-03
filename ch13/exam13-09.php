<?php

// MySQL 서버 연결 및 데이터베이스 선택
$link = mysqli_connect("localhost", "dbuser", "dbpass", "webdb_book");
if (!$link) { // DB연결에 실패한 경우
    echo "DB 연결에 실패했습니다.<br>";
    exit();   // 프로그램 종료
}

$char = mysqli_set_charset($link, "utf8"); // DB 문자셋 설정
if (!$char) { // 문자셋 설정에 실패한 경우
    echo "UTF-8 문자셋을 설정하지 못했습니다.<br>";
    exit();   // 프로그램 종료
}

$sql = "UPDATE `book_members`
        SET `password` = md5('{$_POST["password"]}'),
            `username` = '{$_POST["username"]}',
            `email` = '{$_POST["email"]}',
            `phone` = '{$_POST["phone"]}'
        WHERE `userid`='{$_POST["userid"]}'";
echo "$sql<br>";

$result = mysqli_query($link, $sql); // SQL 실행
if (!$result) { // SQL에 오류가 있는 경우
    echo "SQL에 오류가 있습니다.<br>";
    exit();     // 프로그램 종료
}

mysqli_close($link); // MySQL 연결 종료
?>
