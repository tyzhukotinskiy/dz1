<?php
	require_once "goods.php";
	foreach($goods as $key_array => $value_array){
		echo $key_array.': ';
		echo "<div class='good'>";
		foreach($value_array as $k => $v){
			if($k == "image") echo "<img src='$v' alt='product picture'>";
			if($k == "name") echo "<h4>$v</h4>";
			if($k == "price") echo "<p>Price: $v</p>";
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
?>