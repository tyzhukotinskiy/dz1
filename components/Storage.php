<?php
	
	class Storage{
		public function getGoods(){
			$path = ROOT.'/data/goods.json';
			$goods = file_get_contents($path);
			$goods = json_decode($goods, true);
			return $goods;
		}

		public function getGoodById($id){
			$path = ROOT.'/data/goods.json';
			$goods = file_get_contents($path);
			$goods = json_decode($goods, true);
			foreach($goods as $k => $v){
				if($k == $id){
					$goods = $v;
				}
			}
			if($goods['name'])return $goods;
			else return "Продукта не существует!";
		}
	}

?>