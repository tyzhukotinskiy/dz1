<?php
	require_once 'logers.php';
	require_once 'action.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="css/main.css">
</head>
<body>
	<?php require_once 'component/header.php';?>
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
	<p>Ответ: <?php if(isset($_POST['submit'])){
		echo action($_POST['n1'], $_POST['action'], $_POST['n2']);
	}?></p>
	<?php require_once 'component/footer.php';?>
</body>
</html>