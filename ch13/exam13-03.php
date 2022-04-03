<?php

// MySQL 서버 연결 및 데이터베이스 선택
$link = mysqli_connect("localhost", "dbuser", "dbpass", "webdb_book");
mysqli_set_charset($link, "utf8"); // DB 문자셋 설정

$sql = "INSERT INTO `book_members`
        (`userid`, `password`, `username`, `email`, `phone`)
        VALUES
        ('{$_POST["userid"]}', md5('{$_POST["password"]}'),
        '{$_POST["username"]}', '{$_POST["email"]}',
        '{$_POST["phone"]}');";
echo "$sql<br>";

mysqli_query($link, $sql); // SQL 실행
mysqli_close($link); // MySQL 연결 종료
?>
