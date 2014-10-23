<?php
	include_once("lib/AppData.php");

	$data = new AppData();
	$len = sizeof($data->assocArr);
?>

<!doctype html>
<html>

	<head>
		<meta charset="utf-8">
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>PHP Technincal test</title>
		<link rel="stylesheet" href="assets/style.css">
		<link rel="author" href="humans.txt">
	</head>

	<body>
		<div class="tble">
			<div class="thead">
				<div class="tr">
					<div class="td color1">Name</div>
					<div class="td color2">Color</div>
					<div class="td color3">Element</div>
					<div class="td color4">Likes</div>
                    <div class="clearFix"></div>
				</div>
			</div>

			<div class="tbody">
			<?php 			
				for ($i=0; $i<$len; $i++){
					$arr = $data->assocArr[$i];
				?>
				<div class="tr">
					<div class="td color1"><?= $arr["Name"] ?></div>
					<div class="td color2"><?= $arr["Color"] ?></div>
					<div class="td color3"><?= $arr["Element"] ?></div>
					<div class="td color4"><?= $arr["Likes"] ?></div>
                    <div class="clearFix"></div>
				</div>
			<?php
				}
				?>
			</div>
		</div>
		
	</body>

</html>
