<?php

require_once 'lib.php';

if($_SESSION["login_user_no"] <> $_GET["no"]) {
    err_message("다른 회원의 정보는 삭제(탈퇴)할 수 없습니다.");
}

// MySQL 서버 연결 및 데이터베이스 선택
$link = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME);
if (!$link) { // DB연결에 실패한 경우
    err_message("DB 연결에 실패했습니다.<br>");
}

$char = mysqli_set_charset($link, "utf8"); // DB 문자셋 설정
if (!$char) { // 문자셋 설정에 실패한 경우
    err_message("UTF-8 문자셋을 설정하지 못했습니다.<br>");
}

(!empty($_GET["no"])) ? $no = mysqli_real_escape_string($link, trim($_GET["no"])) : err_message("회원 번호를 입력하세요.");

$sql = "DELETE FROM `book_members` WHERE `no`=$no";

$result = mysqli_query($link, $sql); // SQL 실행
if (!$result) { // SQL에 오류가 있는 경우
    err_message("SQL에 오류가 있습니다.<br>");
}

if (mysqli_affected_rows($link) == 0) {
    err_message("회원 탈퇴에 실패했습니다.");
}

mysqli_close($link); // MySQL 연결 종료
err_message("회원 탈퇴에 성공했습니다.", "members-list.php");
?>
