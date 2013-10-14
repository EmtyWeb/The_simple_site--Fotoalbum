<?php 
define ("Users", "config.log");
/* Если отправленна методом пост то*/
if($_SERVER["REQUEST_METHOD"] == "POST"){
/* Делаем проверки данных которые принимаем*/
        $login = trim(stripslashes(htmlspecialchars($_POST['login'])));
		$password = trim(stripslashes(htmlspecialchars(md5($_POST['password']))));
        $first_name = trim(stripslashes(htmlspecialchars($_POST['first_name'])));
        $last_name = trim(stripslashes(htmlspecialchars($_POST['last_name'])));
        $email = trim(stripslashes(htmlspecialchars($_POST['email'])));
        $phone = trim(stripslashes(htmlspecialchars($_POST['phone'])));
/*Если существует то сравниваем логин, чтоб не было такого же у нас в файле*/			
		if(file_exists(Users)){
			$users = file(Users);
			foreach ($users as $your_login){
				$my_log = explode(" ", $your_login);
				$n_login = trim($my_log [0]);
			}
		}			
		if($login == $n_login) {
			echo "Login is bizy";
		}else{
		/*Регестрируем пользователя и записываем в файл*/	
			$full = "$login $password $first_name $last_name $email $phone \n";
			file_put_contents(Users,$full,FILE_APPEND);
			header ("Location:login.php");
		}
}
?>