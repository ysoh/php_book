<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>구구단</title>
	</head>
    <body>
		<table style="border:1px black solid">
		<caption style="font-size:20pt">구구단</caption>
			<?php
				for($i=1; $i <= $_GET["i"]; $i++) {
				?>
				<tr>
					<?php
						for($j=1; $j <= $_GET["j"]; $j++) {
							$m = $i * $j;
							echo "<td  style='border:1px black dotted'>$i x $j = $m</td>\n";
						}
					?>
				</tr>
				<?php
				}
			?>
		</table>
	</body>
</html>
