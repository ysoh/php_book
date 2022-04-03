<?php
require_once 'lib.php';

if ($_SESSION["login_user_no"] <> $_GET["no"]) {
    err_message("다른 회원의 정보는 삭제(탈퇴)할 수 없습니다.");
}

// MySQL 서버 연결 및 데이터베이스 선택
$link = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME);
if (!$link) { // DB연결에 실패한 경우
    err_message("DB 연결에 실패했습니다.");
}

$char = mysqli_set_charset($link, "utf8"); // DB 문자셋 설정
if (!$char) { // 문자셋 설정에 실패한 경우
    err_message("UTF-8 문자셋을 설정하지 못했습니다.");
}

(!empty($_GET["no"])) ? $no = mysqli_real_escape_string($link, trim($_GET["no"])) : err_message("회원 번호를 입력하세요.");

$sql = "SELECT `no`, `userid`, `username`, `email`, `phone`, `photo`
        FROM `book_members`
        WHERE `no` = $no";

$result = mysqli_query($link, $sql); // SQL 실행
if (!$result) { // SQL에 오류가 있는 경우
    err_message("SQL에 오류가 있습니다.");
}

$row = mysqli_fetch_assoc($result);
mysqli_close($link);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>정보수정폼</title>
        <link href="style.css" rel="stylesheet" type="text/css">
        <script>
            function check_data() {
                var email = /[0-9a-zA-Z][_0-9a-zA-Z-.]*@[_0-9a-zA-Z-]+(\.[_0-9a-zA-Z-]+){1,2}$/;
                var userid = /^[a-zA-Z]+[0-9A-Za-z]{3,15}$/;

                if (document.getElementById("password").value == "") {
                    alert("정보를 수정하시려면 기존 비밀번호를 입력해야 합니다.");
                    document.getElementById("password").focus();
                    return false;
                }

                if (document.getElementById("username").value == "") {
                    alert("사용자 이름을 입력하세요.");
                    document.getElementById("username").focus();
                    return false;
                }

                if (document.getElementById("email").value == "") {
                    alert("사용자 이메일 주소를 입력하세요.");
                    document.getElementById("email").focus();
                    return false;
                }

                if (document.getElementById("phone").value == "") {
                    alert("사용자 연락처를 입력하세요.");
                    document.getElementById("phone").focus();
                    return false;
                }

                if (!document.getElementById("email").value.match(email)) {
                    alert("이메일 주소형식에 맞지 않습니다.");
                    document.getElementById("email").focus();
                    return false;
                }

                return true;
            }
        </script>
    </head>
    <body>
        <div>
            <h1>정보수정폼</h1>
        </div>
        <nav>
            <span><a href="members-list.php">회원목록</a></span>
            <span><a href="register-form.php">회원가입</a></span>
            <span><a href="login-form.php">로그인</a></span>
            <span><a href="logout.php">로그아웃</a></span>
        </nav>
        <div>
            <form action="update.php?no=<?= $no ?>" method="post" enctype="multipart/form-data" onsubmit="return check_data();">
                <table>
                    <tr>
                        <td class="form-label">
                            <label>아이디</label>
                        </td>
                        <td class="form-data">
                            <input class="input-text" value="<?= $row["userid"] ?>" disabled>
                            <input type="hidden" name="userid" id="userid" value="<?= $row["userid"] ?>">
                        </td>
                    </tr>
                    <tr>
                        <td class="form-label">
                            <label>비밀번호</label>
                        </td>
                        <td class="form-data">
                            <input type="password" name="password" id="password" class="input-text" placeholder="정보 변경 시 암호를 입력하세요.">
                        </td>
                    </tr>
                    <tr>
                        <td class="form-label"><label>성명</label></td>
                        <td class="form-data">
                            <input type="text" name="username" id="username" class="input-text" value="<?= $row["username"] ?>" placeholder="예)홍길동">
                        </td>
                    </tr>
                    <tr>
                        <td class="form-label">
                            <label>이메일</label>
                        </td>
                        <td class="form-data">
                            <input type="text" name="email" id="email" class="input-text" value="<?= $row["email"] ?>" placeholder="예)hong1234@test.co.kr">
                        </td>
                    </tr>
                    <tr>
                        <td class="form-label">
                            <label>연락처</label>
                        </td>
                        <td class="form-data">
                            <input type="text" name="phone" id="phone" class="input-text" value="<?= $row["phone"] ?>" placeholder="예)+82101234-5678">
                        </td>
                    </tr>
                    <tr>
                        <td class="form-label"><label>사진</label></td>
                        <td class="form-data">
                            <span>
                                <?php
                                if ($row["photo"] <> null) {
                                    ?>
                                    <div class="form-photo">
                                        <img src="<?= "photo/{$row["photo"]}" ?>">
                                    </div>
                                    <input type="checkbox" name="rmphoto" value="1">사진삭제
                                    <?php
                                }
                                ?>
                                <input type="file" name="photo" id="photo" style="display: block">
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td class="form-data">
                            <input type = "reset" value = "초기화" class="form-button" id = "reset">
                            <input type = "submit" value = "정보수정" class="form-button" id = "submit">
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </body>
</html>
