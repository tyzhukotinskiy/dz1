<?php
	function action($n1, $action, $n2){
		$result;
		if($n1 == '' || $n2 == ''){trigger_error('Предупреждение: вы не ввели данные в поле!'); return 0;}
		if(!is_numeric($n1)||!is_numeric($n2)){ trigger_error('Предупреждение: вы ввели не число!'); return 0;}
		switch($action){
			case "plus":
				$result = $n1+$n2;
				break;
			case "diff":
				$result = $n1-$n2;
				break;
			case "mult":
				$result = $n1*$n2;
				break;
			case "div":
				if($n2 == 0){
					throw new Exception('Попытка разделить на ноль! Уничтожить!!!');
				}
				$result = $n1/$n2;
				break;
		}
		return $result;
	}
?>