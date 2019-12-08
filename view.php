<?php
	require_once 'logers.php';
	require_once 'storage.php';
	if(isset($_POST['GetGood']) || isset($_POST['showAll'])){
		$shop = new Storage();
		$g;
		if(isset($_POST['GetGood']))$g = $shop->GetGood($_POST['idGood']);
		else $g = $shop->showAll();;
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="main.css">
</head>
<body>
	<h1>Товары</h1>
	<form action="view.php" method="post"><input type="submit" value="Получить все Товары" name="showAll"></form>
	<form action="view.php" method="post">Номер товара<input type="text" name="idGood"><br /><input type="submit" name="GetGood" value="Посмотреть товар"></form>
	<?php 
		if(isset($_POST['showAll']))for($i = 0; $i < count($g); $i++){
	?>
		<h3><?=$g[$i+1]["name"]; ?></h3>
		<img src="images/<?=$g[$i+1]['image'];?>"/>
		<p>price = <?=$g[$i+1]['price'];?></p>
		<p><?=$g[$i+1]['description'];?></p>
	<?php		
		}
		else if(isset($_POST['GetGood'])){
	?>
		<h3><?=$g["name"]; ?></h3>
		<img src="images/<?=$g['image'];?>"/>
		<p>price = <?=$g['price'];?></p>
		<p><?=$g['description'];?></p>
	<?php		
		}
	?>
</body>
</html>