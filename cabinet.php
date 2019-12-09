<?php
	require_once 'auth.php';
	session_start();
	if(isset($_POST['auth'])){
		$user = new Auth();
		$user->authUser($_POST['login'], $_POST['password']);
	}
	if(isset($_POST['submit'])){
		$user = new Auth();
		$user->setLogin($_POST['newName']);
	}
	if(isset($_POST['logOut'])){
		$user = new Auth();
		$user->logOut();
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php if($_SESSION['name']) echo "Привет, ".$_SESSION['name'];?>
	<?if($_SESSION['name']){ ?>
	<form action="cabinet.php" method="post">Новое имя: <input type="text" name='newName'><input type="submit" name="submit" value="Изменить имя"></form>
	<form method="post" action="cabinet.php"><input type="submit" name="logOut" value="Выход"></form>
	<?php } ?>
</body>
</html>