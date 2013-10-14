<?php
//Функция вывода файлов
function myView($img_root,$n){
$id = $_GET["id"];
   function getExt($filename) { 
    return end(explode(".", $filename)); 
  } 
  $count = 4; // Количество изображений на странице 
  if(!$id) $id = 1; //если нет, то присваеваем 1
  $start = $count * ($id - 1); 
  $finish = $start + $count; 
  $files = scandir($img_root,1); //в массив с конца
  //выволим изображения
    for ($i = $start; $i < $finish; $i++) {
      if (($files[$i] != ".") || ($files[$i] != "..")) {
          // проверка чтоб файл заканчивался на:
        if((getExt($files[$i]) == "png") || (getExt($files[$i]) == "jpeg") || (getExt($files[$i]) == "jpg") || (getExt($files[$i]) == "gif"))     {
		     $path = $img_root.$files[$i];
             echo "<div id='picture'><a href='".$path."'><img id='imge'  src = '$path' alt = 'Изображение'/></a></div>";
        }
      }
    }
    //выводим нумерацию
    $count_files = count($files);//всего файлов
    $count_pages = ceil($count_files / $count);  //всего страниц
        echo "<div id='num'>";
    //первая страница
			$first =  $count_pages-($count_pages-1);
			echo "<a id='num' href = '".$n.".php?id=".$first."'>&lt&lt</a>";
    //выводим нумерацию всех страниц
		   for($i = 0; $i < $count_pages; $i++) { 
                $s = $i + 1; 
                    echo "<a id='num' href = '".$n.".php?id=".$s."' title = '".$s."'>".$s."</a>"; 
			}
    //последняя страница
			echo "<a id='num' href = '".$n.".php?id=".$count_pages."' title = 'последняя страница'>&gt&gt</a>";
		echo "</div>";
}
?>