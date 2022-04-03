<?php

require_once 'lib.php';

if ($_SESSION["login_user_no"] <> $_GET["no"]) {
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

(!empty($_POST["userid"])) ? $userid = mysqli_real_escape_string($link, trim($_POST["userid"])) : err_message("회원 아이디를 입력하세요.");
(!empty($_POST["password"])) ? $password = mysqli_real_escape_string($link, trim($_POST["password"])) : err_message("비밀번호를 입력하세요.");
(!empty($_POST["username"])) ? $username = mysqli_real_escape_string($link, trim($_POST["username"])) : err_message("회원 이름을 입력하세요.");
(!empty($_POST["email"])) ? $email = mysqli_real_escape_string($link, trim($_POST["email"])) : err_message("이메일 주소를 입력하세요.");
(!empty($_POST["phone"])) ? $phone = mysqli_real_escape_string($link, trim($_POST["phone"])) : err_message("연락처를 입력하세요.");
(!empty($_POST["rmphoto"])) ? $rmphoto = mysqli_real_escape_string($link, trim($_POST["rmphoto"])) : $rmphoto = 0;
echo $rmphoto;
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    err_message("이메일 형식이 일치하지 않습니다.");
}

$photo = null;
if ($_FILES["photo"]["size"] != 0) {
    if (!preg_match("/jpeg$/", $_FILES["photo"]["type"])) {
        err_message("사진은 JPEG 이미지만 업로드가 가능합니다.");
    }

    $photo = "{$userid}.jpg";
    move_uploaded_file($_FILES["photo"]["tmp_name"], "photo/{$photo}");

    $sql = "UPDATE `book_members`
            SET `username` = '{$username}', `email` = '{$email}', `phone` = '{$phone}', `photo` = '{$photo}'
            WHERE `no` = $no AND `password` = md5('{$password}')";
} else {
    if ($rmphoto == 1) {
        $photo = "{$userid}.jpg";
        unlink("photo/$photo");

        $sql = "UPDATE `book_members`
                SET `username` = '{$username}', `email` = '{$email}', `phone` = '{$phone}', `photo` = null
                WHERE `no` = $no AND `password` = md5('{$password}')";
    }
    else {
        $sql = "UPDATE `book_members`
                SET `username` = '{$username}', `email` = '{$email}', `phone` = '{$phone}'
                WHERE `no` = $no AND `password` = md5('{$password}')";
    }
}

$result = mysqli_query($link, $sql); // SQL 실행
if (!$result) { // SQL에 오류가 있는 경우
    err_message("SQL에 오류가 있습니다.");
}

mysqli_close($link); // MySQL 연결 종료
err_message("정보 수정에 성공했습니다.", "members-list.php");
?>
