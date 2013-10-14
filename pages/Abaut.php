<?php if (isset($_COOKIE['PHPSESSID'])) {session_start();
	require "../blocks/header.php";
	require "../blocks/left.php"; 
		echo '<div id="right">Про нас</div>';
	require "../blocks/footer.php"; 
}else{
	require "../blocks/header.php";
		echo '<div id="right">Про нас</div>';
	require "../blocks/footer.php"; }?>