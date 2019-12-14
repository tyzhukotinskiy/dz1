<?php
	require_once ROOT.'/components/Storage.php';

	class Product{
		private $id;
		private $name;
		private $description;
		private $image;
		private $price;
		private $quantity = 10;
		private $storage;

		public function __construct(){
			$this->storage = new Storage();
		}

		public function getGoods(){
			$goods = $this->storage->getGoods();
			return $goods;
		}

		public function getGood($id){
			$good = $this->storage->getGoodById($id);
			return $good;
		}

		public function getQuantity(){
			return $this->quantity;
		}
	}
?>