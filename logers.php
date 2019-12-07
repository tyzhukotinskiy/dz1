<?php
	require_once 'handlerErrors.php';
	function myHandler($errno, $errstr, $errfile, $errline){
		Loger::myHandler($errno, $errstr, $errfile, $errline);
		return true;
	}
	function myException($exception){
		Loger::myException($exception);
	}
?>