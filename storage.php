<?php
	require_once 'logers.php';
	Class storage{
		private $goods;
		public function __construct(){
			$g = file_get_contents('data.json');
			$this->goods = json_decode($g, true);
		}
		public function showAll(){
			return $this->goods;
		}
		public function getGood($id){
			$flag = false;
			foreach($this->goods as $k => $v){
				if($id == $k){
					$flag = true;
					print_r($v);
				}
			}
			if($flag) return $flag;
			else{
				throw new Exception("Такого продукта($id) не существует!");
				return $flag;
			}
		}
	}
	$r = new storage();
	$goods = $r->showAll();
	foreach($goods as $k => $v){
		print_r($v);
	}
	$id = "3";
	echo "Выберем товар: $id";
	$r->getGood($id);
?>