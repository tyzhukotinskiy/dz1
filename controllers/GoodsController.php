<?php
	require_once ROOT.'/models/Product.php';
	class GoodsController{
		private $product;

		public static function actionIndex(){
			echo "Controller GoodsController | | Action acionIndex<br />";
			$product = new Product();
			$product->getGoods();
			return true;
		}

		public static function actionProduct($id){
			echo "Controller GoodsController | | Action acionProduct and product with id $id<br />";
			$product = new Product();
			$good = $product->getGood($id);
			print_r($good);
			return true;
		}

	}
?>