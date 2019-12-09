<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h1>Авторизация пользователя</h1>
	<form action="cabinet.php" method="post">
		Логин: <input type="text" name="login"><br />
		Пароль: <input type="text" name="password"><br />
		<input type="submit" value="Авторизация" name="auth">
	</form>
	<?php if(isset($_POST['auth'])) if($user->isAuth()){ ?>
	<p>
		Привет, <?=$user->login;?>
	</p>
	<p>Можешь перейти в свой кабинет, чтобы поменять имя: <a href="cabinet.php">Кабинет</a></p>
	
	<form method="post" action="user.php"><input type="submit" name="logOut" value="Выход"></form>
<?php } ?>
</body>
</html>