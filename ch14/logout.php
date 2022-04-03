<?php
require_once 'lib.php';

$_SESSION["login_user_no"] = 0;
unset($_SESSION["login_user_no"]);
session_destroy();

err_message("로그아웃 되었습니다.", "login-form.php");
?>