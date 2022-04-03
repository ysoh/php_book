<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>연습문제 1</title>
    </head>
    <body>
        <?php
        $jumin = $_GET["jumin"];
		$y = substr($jumin,0,2);
		$m = substr($jumin,2,2);
		$d = substr($jumin,4,2);
		$s = substr($jumin,6,1);
		
		if ($s == 1 || $s ==2) {
			$y += 1900;
		}
		else {
			$y += 2000;
		}
        echo "당신의 생년월일은 {$y}년 {$m}월 {$d}일 입니다. ";
		
		$age = date("Y") - $y;
		echo "당신의 나이는 ($age}세 입니다.";
		
		
        ?>
    </body>
</html>
