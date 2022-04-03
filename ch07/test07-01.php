<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>소수 구하기</title>
	</head>
	<body>
	<?php
	$n = rand(1,1000);
	
	echo "{$n}은 ";
	
	if($n != 1) {
		for($i = 2, $isPN = true; $i < $n; $i ++) {
			if ($n % $i == 0) {
				$isPN = false;
				break;
			}
		}
	}
	else {
		$isPN = false;
	}
	
	if($isPN == true) {
		echo "소수입니다.";
	}
	else {
		echo "소수가 아닙니다.";
	}
	?>
	</body>
</html>