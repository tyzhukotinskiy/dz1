<!DOCTYPE>
<html>
<head>
	<title>Shop</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="main.css">
</head>
<body>
<?php
	require_once "goods.php";
	require_once "header.php";
	echo "<h1>Shop</h1>";
	ob_start();
	foreach($goods as $key_array => $value_array){
		echo "<div class='good'>";
		foreach($value_array as $k => $v){
			if($k == "image") echo "<img src='$v' alt='product picture'>";
			if($k == "name") echo "<h4>$v</h4>";
			if($k == "price") echo "<p>Price: $v$</p>";
			if($k == "description"){
				$arr = explode("|", $v);
				echo "<ul>";
				for($i = 0; $i < count($arr); $i++){
					echo "<li>".$arr[$i]."</li>";
				}
				echo "</ul>";
			}
		}
		echo "</div>";
	}
	$content = ob_get_contents();
	ob_end_clean();
	echo $content;
	require_once "footer.php";
?>
</body>
</html>