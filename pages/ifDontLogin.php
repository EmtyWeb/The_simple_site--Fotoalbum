<?php	
	require "../../blocks/header.php"; 
	echo <<<LABEL
	<div id='right'>Извините, но для просмотра альбомов вам нужно авторизироваться
	<div><a class = 'enter1' href='../login.php'>Вход</a></div>
	<div><a class = 'enter1' href='../regestration.php'>Регистрация</a></div>
	</div>
LABEL;
	require "../../blocks/footer.php"; 
?>