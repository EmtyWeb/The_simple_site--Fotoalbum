<?php if (isset($_COOKIE['PHPSESSID'])) {session_start();
	//делаем проверку существует ли кука
	require "blocks/header.php";
	require "blocks/left.php"; 
		echo <<<LABEL
		<div id="right">
			<div>Добро пожаловать на наш сайт!</div>
			<div>Теперь вы можете просматривать и добавлять ваши фотографии!</div>
		</div>
LABEL;
	require "blocks/footer.php"; 
}else{
	require "blocks/header.php";
		echo '<div id="right">Добро пожаловать на наш сайт</div>';
	require "blocks/footer.php"; }?>