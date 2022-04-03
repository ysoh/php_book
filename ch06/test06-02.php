<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>윤년 계산</title>
	</head>
	<body>
	<?php
	$year = $_GET["year"];
	
	echo "$year : ";
	
	if($year % 4 == 0) {
		// 윤년 후보
		if($year % 100 == 0) {
		    // 윤년 후보
			if($year % 400 == 0) {
			    echo "윤년";
			}
			else {
				echo "윤년아님";
			}
		}
		else {
			echo "윤년";
		}
	}
	else {
		echo "윤년아님";
	}
	?>
	</body>
</html>