<?php
	Class Storage{
		private $goods;
		public function __construct(){
			$g = file_get_contents('component/data.json');
			$this->goods = json_decode($g, true);
		}
		public function showAll(){
			return $this->goods;
		}
		public function getGood($id){
			$flag = false;
			foreach($this->goods as $k => $v){
				if($id == $k){
					return $v;
				}
			}
			if(!$flag) throw new Exception("Такого продукта($id) не существует!");
		}
	}
?>