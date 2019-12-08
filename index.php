<?php
	require_once 'logers.php';
	require_once 'action.php';
	if(isset($_POST['submit'])){
		echo action($_POST['n1'], $_POST['action'], $_POST['n2']);
	}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="index.php" method="POST">
		<input type="text" name='n1'>
		<select name="action">
			<option value="plus">+</option>
			<option value="diff">-</option>
			<option value="mult">*</option>
			<option value="div">/</option>
		</select>
		<input type="text" name='n2'>
		<input type="submit" name='submit' value='Посчитать'>
	</form>
</body>
</html>