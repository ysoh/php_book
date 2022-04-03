<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?=$_GET["num1"]?>
        <?=$_GET["op"]?>
        <?=$_GET["num2"]?>
        =
        <?php
        switch ($_GET["op"]) {
            case "+" : echo $_GET["num1"] + $_GET["num2"];
                       break;
            case "-" : echo $_GET["num1"] - $_GET["num2"];
                       break;
            case "*" : echo $_GET["num1"] * $_GET["num2"];
                       break;
            case "/" : echo $_GET["num1"] / $_GET["num2"];
                       break;
            case "%" : echo $_GET["num1"] % $_GET["num2"];
                       break;
        }
        ?>
    </body>
</html>
