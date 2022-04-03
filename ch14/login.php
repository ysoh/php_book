<?php
require_once 'lib.php';

// MySQL 서버 연결 및 데이터베이스 선택
$link = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME);
if (!$link) { // DB연결에 실패한 경우
    err_message("DB 연결에 실패했습니다.<br>");
}

$char = mysqli_set_charset($link, "utf8"); // DB 문자셋 설정
if (!$char) { // 문자셋 설정에 실패한 경우
    err_message("UTF-8 문자셋을 설정하지 못했습니다.<br>");
}

(!empty($_POST["userid"])) ? $userid = mysqli_real_escape_string($link, trim($_POST["userid"])) : err_message("회원 아이디를 입력하세요.");
(!empty($_POST["password"])) ? $password = mysqli_real_escape_string($link, trim($_POST["password"])) : err_message("비밀번호를 입력하세요.");

$sql = "SELECT `no`
        FROM `book_members`
        WHERE `userid` = '$userid'
        AND `password` = md5('$password')";

$result = mysqli_query($link, $sql); // SQL 실행
if (!$result) { // SQL에 오류가 있는 경우
    err_message("SQL에 오류가 있습니다.<br>");
}

if (mysqli_num_rows($result) == 1) {
    $userno = mysqli_fetch_assoc($result);
    $_SESSION["login_user_no"] = $userno["no"];
    err_message("로그인에 성공했습니다.", "members-list.php");
} else {
    $_SESSION["login_user_no"] = 0;
    err_message("로그인할 수 없습니다.");
}
mysqli_close();
?>
