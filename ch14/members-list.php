<?php
require_once 'lib.php';

// MySQL 서버 연결 및 데이터베이스 선택
$link = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME);
if (!$link) { // DB연결에 실패한 경우
    err_message("DB 연결에 실패했습니다.");
}

$char = mysqli_set_charset($link, "utf8"); // DB 문자셋 설정
if (!$char) { // 문자셋 설정에 실패한 경우
    err_message("UTF-8 문자셋을 설정하지 못했습니다.");
}

$sql = "SELECT `no`, `userid`, `username`, `email`, `phone`, `photo`
        FROM `book_members`
        ORDER BY `no`";

$result = mysqli_query($link, $sql); // SQL 실행
if (!$result) { // SQL에 오류가 있는 경우
    err_message("SQL에 오류가 있습니다.");
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>회원목록</title>
        <link href="style.css" rel="stylesheet" type="text/css">
        <script>
        </script>
    </head>
    <body>
        <div>
            <h1>회원목록</h1>
        </div>
        <nav>
            <span class="active"><a href="members-list.php">회원목록</a></span>
            <span><a href="register-form.php">회원가입</a></span>
            <span><a href="login-form.php">로그인</a></span>
            <span><a href="logout.php">로그아웃</a></span>
        </nav>
        <div>
            <table id="mlist-table">
                <thead>
                    <tr>
                        <th class="mlist-no">번호</th>
                        <th class="mlist-userid">아이디</th>
                        <th class="mlist-username">성명</th>
                        <th class="mlist-email">이메일</th>
                        <th class="mlist-phone">연락처</th>
                        <th class="mlist-photo">사진</th>
                        <th class="mlist-action">액션</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                    <tr>
                        <td class="mlist-no"><?= $row["no"] ?></td>
                        <td class="mlist-userid">
                            <?= $row["userid"] ?>
                        </td>
                        <td class="mlist-username">
                            <?= $row["username"] ?>
                        </td>
                        <td class="mlist-email">
                            <?= $row["email"] ?>
                        </td>
                        <td class="mlist-phone">
                            <?= $row["phone"] ?>
                        </td>
                        <td class="mlist-photo">
                            <?= ($row["photo"]) ? "있음" : "없음" ?>
                        </td>
                        <td class="mlist-action">
                            <?php
                            if (isset($_SESSION["login_user_no"]) && $_SESSION["login_user_no"] == $row["no"]) {
                                echo "<a class='active' href='unregister.php?no={$row["no"]}' onclick='return confirm(\"탈퇴 하시겠습니까?\");'>탈퇴</a>";
                                echo " ";
                                echo "<a class='active' href='update-form.php?no={$row["no"]}' onclick='return confirm(\"수정 하시겠습니까?\");'>수정</a>";
                            } else {
                                echo "탈퇴 수정";
                            }
                            ?>
                        </td>
                    </tr>
                    <?php
                }
                mysqli_close($link);
                ?>
                </tbody>
            </table>
        </div>
    </body>
</html>
