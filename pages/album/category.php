<?php if (isset($_COOKIE['PHPSESSID'])) {session_start();
	require "../../blocks/header.php"; 
		require "../../blocks/left.php"; ?>
<div id="right">Фотоальбомы

<?php if(isset($_COOKIE['PHPSESSID'])){
	echo "<div id='picture_border'>";
	$img_root='../../img/category/';
	$file = scandir($img_root); //вытаскиваем из директории в массив
	if(isset($file)){
		foreach($file as $img)
		{
			if($img!='.' && $img!='..'){
                //присваеваем ссылки
				switch($img){
					case 'natural.jpg': $link = "<a class = 'link' title='Фотографии природы' href='".ROOT."pages/album/natural.php'></a>";
					break;
					case 'face.jpg': $link = "<a  class = 'link' title='Портреты' href='".ROOT."pages/album/face.php'></a>";
					break;
					case 'sport.jpg': $link = "<a class = 'link' title='Фотографии спорт' href='".ROOT."pages/album/sport.php'></a>";
					break;
					case 'city.jpg': $link = "<a class = 'link'  title='Фотографии городов' href='".ROOT."pages/album/city.php'></a>";
					break;
				}
				//выводи категории со ссылкай на нее
				echo "<div id='picture'><img id='imge' src='".$img_root.$img."'/>".$link."</div>";
			}
		}
	}	
}
echo "</div>";
require "../../blocks/footer.php"; 

}else{
	require "../ifDontLogin.php"; 

}?>
