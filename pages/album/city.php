<?php if (isset($_COOKIE['PHPSESSID'])) {session_start();
	require "../../blocks/header.php"; 
	require "../../blocks/left.php"; 
	require "../libs.php";
	?>
<div id="right">Города
<?php if(isset($_COOKIE['PHPSESSID'])){
	echo "<div id='picture_border'>";
//вызываем функцию вывода изображений
 myView('../../img/city/','city');
	$str =   $str = $_SERVER['REQUEST_URI'];
	echo '<form class = "form_load" action="../load_images.php" method="post" enctype="multipart/form-data">
			<input type="file" name="picture" /><br />
			<input name ="str" type="hidden" value="' . $str . '">
			<input type="submit" value="Загрузить файл" />
		</form>';
echo "</div>";
}
require "../../blocks/footer.php"; 

}else{
	require "../ifDontLogin.php"; 

}
?>
