<?php header("Content-type: text/html; charset=utf-8"); 
require $_SERVER['DOCUMENT_ROOT']."/fotoalbum/libs/Constant.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <link rel="stylesheet" href="/fotoalbum/css/index.css" type="text/css">
        <script src="/fotoalbum/js/jquery-1.10.1.min.js"  type="text/javascript"></script>
        <script>
            $(document).ready(function(){
                /**
                * если клик то добавляем блок после div=container
                * отключаем обычное поведение (так как в div ссылка если вдруг у пользователя откл js)
                * затем клонируем фотографию в переменную
                * вставляем в наш новый блок
                * с помошью анимаци увеличиваем фотографию
                * при повторном клике на любой обласи удаляем на создааны div
                */
                $(" div img").click(function(eventObject){
                    $('#container').after('<div id="modal"><div id = "my_foto"></div></div>');
                     var a = $(this).clone();
                    $('#my_foto').html(a)
                    $('#my_foto img').animate({'width':'35%','height':'10%','margin':'30px auto'});
                    $(" #modal").click(function(){
                        $('#modal').remove();
                    });
                eventObject.preventDefault();
                });
            });
        </script>
    </head>
    <body>
        <div id="container">
            <!--Наша верхняя часть сайта-->
            <div id="header">
                <div id="emblem"></div>
                <!--Начало блока меню-->
                <div id="menu_header">
                    <ul id="menu">
                        <li id="home"><a href="<?=ROOT;?>index.php">Главная</a></li>
                        <li id="foto"><a href="<?=ROOT;?>pages/album/category.php">Галерея</a></li>
                        <li id="abaut"><a href="<?=ROOT;?>pages/abaut.php">О нас</a>
                    </ul>
                </div>

        <?php $a = ROOT;
		if($_SESSION['name']){
                //если есть имя сессия то
                echo <<<LABEL
                <div id="enter">
                    <a class='enter1' href="$a/pages/logoff.php">Выход</a>
                </div>
                <div id='enter'>Привет, {$_SESSION['name']}</div>
LABEL;
                    }else{
                echo <<<LABEL
                <div id="enter">
                    <a class='enter1' href="$a/pages/login.php">Вход</a>
                    <a class='enter1' href="$a/pages/regestration.php">Регистрация</a>
                </div>

LABEL;
                echo "<div id='enter'>Привет, гость</div>";
        } ?>
            <div id='reklama'></div>
            </div>
            <!--Наша основная часть сайта-->
            <div id="main">
