<?php if (isset($_COOKIE['PHPSESSID'])) session_start();
    //удаляем сессию
    session_unset();
    session_destroy();
    //удаляем куку
	setcookie('PHPSESSID', '', 0, '/'); 
	header ("Location:login.php");

?>