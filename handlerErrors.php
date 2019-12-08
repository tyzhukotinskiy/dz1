<?php
	class Loger{
		public static function myHandler($errno, $errstr, $errfile, $errline){
			switch($errno){
			case E_USER_ERROR:
				$date = date("F j, Y, g:i a");
				$str =  "[$date] = <b>Пользовательская ОШИБКА</b> [$errno] $errstr<br />";
				$str1 = "Фатальная ошибка в строке $errline файла $errfile";
				$str2 = "Завершение работы...";
				error_log($str.$str1.$str2, 3, 'errors.txt');
				echo $str.$str1.$str2;
				exit(1);
				break;
			case E_USER_WARNING:
				$date = date("F j, Y, g:i a");
				$str =  "[$date] = <b>Пользовательская ОШИБКА</b> [$errno] $errstr<br />";
				echo "Пользовательское предупреждение [$errno] $errstr";
				error_log("[$date] = Пользовательское предупреждение errno = $errno; errstr = $errstr; errfile = $errfile; errline = $errline",3,'errors.txt');
				break;
			case E_USER_NOTICE:
				$date = date("F j, Y, g:i a");
				$str =  "[$date] = <b>Пользовательская ОШИБКА</b> [$errno] $errstr<br />";
				echo "Пользовательское уведомление [$errno] $errstr";
				error_log("[$date] = Пользовательское уведомление errno = $errno; errstr = $errstr; errfile = $errfile; errline = $errline",3,'errors.txt');
				break;
			default: 
				echo "Неизвестная ошибка: [$errno] $errstr";
				$date = date("F j, Y, g:i a");
				error_log("[$date] = Что то страшное errno = $errno; errstr = $errstr; errfile = $errfile; errline = $errline",3,'errors.txt');
		}
		}
		public static function myException($exception){
			$date = date("F j, Y, g:i a");
			echo "Преподобное исключение: ".$exception->getMessage().'<br />';
			error_log("[$date] = Преподобное исключение: ".$exception->getMessage(), 3, 'erros.txt');
		}
	}
?>