<?php
/* Если отправленна методом пост то*/
if($_SERVER["REQUEST_METHOD"] == "POST"){
/* Делаем проверки данных которые принимаем*/
    $login = trim(stripslashes(htmlspecialchars($_POST['login'])));
	$password = trim(stripslashes(htmlspecialchars($_POST['password'])));
/*Если существует то сравниваем логин и пароль*/	
	if(file_exists("config.log")){
        //делаем массив
		$users = file("config.log");
		if(is_array($users)){
			foreach ($users as $your_login){
				$my_log = explode(" ", $your_login);
                //выбираем логин и пароль
					$n_login = trim($my_log [0]);
					$n_password = trim($my_log [1]);
                //если совпадают запускаем сессию
				if($n_login == $login AND $n_password == md5($password)){
					Session_start();
					$_SESSION['name'] = $login;
					header ("Location:album/category.php");
					break;
				 }else{
					header ("Location:login.php");
				 }
			}
		}
	}
}




?>