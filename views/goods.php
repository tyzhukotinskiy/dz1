<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="../css/main.css">
</head>
<body>
	<?php require_once 'header.php'; ?>
	<section id="goods">
		<div class="container">
			<? foreach($goods as $key_product=>$value_product) {?>
				<div class="item_good">
					<h2><?=$value_product['name'];?></h2>
					<p><?=$value_product['description'];?></p>
					<img src="<?='../'.$value_product['image']?>" alt="<?=$value_product['image']?>">
					<p>Price: <?=$value_product['price'];?>$</p>
					<p>Количество: <?=$product->getQuantity();?></p>
					<a href="product/<?=$key_product;?>">Перейти к продукту</a>
				</div>
			<?}?>
		</div>
	</section>
	<?php require_once 'footer.php'; ?>
</body>
</html>