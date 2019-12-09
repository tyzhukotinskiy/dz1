<?php
class Auth{
	private $login;
	private $password;
	public function isAuth(){
		return session_status() === PHP_SESSION_ACTIVE ? TRUE : FALSE;
	}
	public function authUser($login, $password){
		$flag = false;
		$users = file_get_contents('users.json');
		$users = json_decode( $users, true);
		foreach($users as $k => $v){
			if($login == $v['name'] && $password == $v['password']){ 
				session_start();
				$this->login = $login;
				$this->password = $password;
				$_SESSION['name'] = $this->login;
				$_SESSION['password'] = $this->password;
				echo "Привет, ".$_SESSION['name'];
				$flag = true;
				break;
			}
		}
		if(!$flag) echo "Данные не совпадают!";
	}
	public function setLogin($login){
		if($this->isAuth()){
			$users = file_get_contents('users.json');
			$users = json_decode( $users, true);
			foreach($users as $k => $v){
				if($this->login == $v['name']){ $users[$k]['name'] = $login; $this->login; break;}
			}
			print_r($users);
			$str = json_encode($users);
			file_put_contents('users.json', $str);
		}
		else {
			echo "Авторизуйтесь!";
		}
	}
	public function logOut(){
		if($this->isAuth()){
			session_destroy();
		}
		echo "Куда уж выходить, если еще и не зашли!";

	}
}
$user = new Auth();
//$user->authUser("Href", "qwe");
$user->setLogin("Dog");
?>