<?php
	require_once ROOT.'/models/Product.php';
	class GoodsController{
		private $product;

		public static function actionIndex(){
			$product = new Product();
			$goods = $product->getGoods();
			require_once ROOT.'/views/goods.php';
			return true;
		}

		public static function actionProduct($id){
			$product = new Product();
			$good = $product->getGood($id);
			require_once ROOT.'/views/product.php';
			return true;
		}

		public static function actionToGoods(){
			header("Location: /dz1/goods/");
			exit;
			return true;
		}

	}
?>