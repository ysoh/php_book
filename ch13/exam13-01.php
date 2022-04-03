<?php

// MySQL 서버 연결 및 데이터베이스 선택
$link = mysqli_connect("localhost", "dbuser", "dbpass", "webdb_book");
mysqli_set_charset($link, "utf8"); // DB 문자셋 설정

$sql = "INSERT INTO `book_members`
        (`userid`, `password`, `username`, `email`, `phone`)
        VALUES
        ('hong', md5('hong'), '홍길동', 'hong@test.com', '+821012345678');";
echo "$sql<br>";

mysqli_query($link, $sql); // SQL 실행
mysqli_close($link); // MySQL 연결 종료

?>
