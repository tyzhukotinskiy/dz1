<?php
	require_once 'logers.php';
	set_error_handler('myHandler');
	set_exception_handler('myException');
	trigger_error('Что то пошло не так', E_USER_NOTICE);

	throw new Exception('Неперехваченное исключение');
	echo "Не выполнено\n";
?>