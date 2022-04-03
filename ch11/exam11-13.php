<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>파일처리</title>
    </head>
    <body>
        아이디 : <?= $_POST["id"] ?>
        첨부사진 : <br>
        파일이름 : <?= $_FILES["photo"]["name"] ?><br>
        파일크기 : <?= $_FILES["photo"]["size"] ?><br>
        임시이름 : <?= $_FILES["photo"]["tmp_name"] ?><br>
        파일타입 : <?= $_FILES["photo"]["type"] ?><br>
        <?php
        move_uploaded_file($_FILES["photo"]["tmp_name"], "files/{$_FILES["photo"]["name"]}");
        ?>
        <img src="<?= "files/{$_FILES["photo"]["name"]}" ?>">
    </body>
</html>
