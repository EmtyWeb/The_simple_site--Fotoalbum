<?php
	/*Если 0 то ошибок при загрузке нет*/
	if($_FILES["picture"]["error"] == 0){
//Делаем счетчик! Чтоб к файлам приписывать значеня! Для того чтобы файлы шли по порядку
//Файл где счетчик
    $file_counter = "count.log";
// Читаем текущее значение счетчика
if (file_exists($file_counter)) {
    $fp = fopen($file_counter, "r");
    $counter = fread($fp, filesize($file_counter));
    fclose($fp);
} else {
    $counter = 0;
}
// Увеличиваем счетчик на единицу
$counter++;
// Сохраняем обновленное значение счетчика
$fp = fopen($file_counter, "w");
fwrite($fp, $counter);
fclose($fp);

//принимаес значение откуда пришел пользователь
$str = trim(stripslashes(htmlspecialchars($_POST['str'])));
//проверяем с помощью регулярных выражений, откуда пришел пользователь,для записи в нужную папку
		if(preg_match("/(\/fotoalbum\/pages\/album\/natural.php)(\?id=[0-9]{1,5})?$/",$str)){
			$img_root = '../img/natural/'; 
		}else if(preg_match("/(\/fotoalbum\/pages\/album\/face.php)(\?id=[0-9]{1,5})?$/",$str)){
			$img_root = '../img/face/';
		}else if(preg_match("/(\/fotoalbum\/pages\/album\/sport.php)(\?id=[0-9]{1,5})?$/",$str)){
			$img_root = '../img/sport/';
		}else if(preg_match("/(\/fotoalbum\/pages\/album\/city.php)(\?id=[0-9]{1,5})?$/",$str)){
			$img_root = '../img/city/';
		}

		$tmp_name = $_FILES["picture"]["tmp_name"];
        $name = $_FILES["picture"]["name"];
		$name = $counter.$name;
		/*Записываем файл*/
			move_uploaded_file($tmp_name, $img_root.$name);
			header ("Location:$str");
		}else{
			echo "Error";
		}
?>