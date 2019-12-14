<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="../../css/main.css">
</head>
<body>
	<?php require_once 'header.php'; ?>
	<section id="goods">
		<div class="container">
				<div class="item_good">
					<h2><?=$good['name'];?></h2>
					<p><?=$good['description'];?></p>
					<img src="<?='../../'.$good['image']?>" alt="<?=$good['image']?>">
					<p>Price: <?=$good['price'];?>$</p>
					<p>Количество: <?=$product->getQuantity();?></p>
					<a href="#">Добавить в корзину</a>
				</div>
		</div>
	</section>
	<?php require_once 'footer.php'; ?>
</body>
</html>