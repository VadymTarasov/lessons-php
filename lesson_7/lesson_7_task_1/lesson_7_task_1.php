<?php
/*
Написать функцию, которая рекурсивно выведет на экран содержимое каталога.
Функция принимает аргументом строку абсолютный путь к каталогу,
который необходимо просканировать.

d - директория
f - файл

отсупы необходимо сохранить, чтобы при отображении было понятно структуру вложенности
/var/www/data
--------------
d public
  d assets
    f style.css
    f script.js
d templates
  f index.html
f index.php
f composer.json
f composer.lock
* Дополнительная задача со звездочкой. Используя табуляцию (отступы) отобразить права файла (в формате 644) и занимаемый размер на диске по файлу/каталогу (байты/килобайты)
PS. Аргументы скрипт должен принимать с CLI. Например:

php index.php '/var/www/data'*/

$dir = '/var/www/lessons-php/lesson_7/lesson_7_task_1';

function viewDir($dir, $space)
{
    $files = scandir($dir);
    foreach ($files as $file) {
        if (($file == '.') || ($file == '..')) continue;
        $path = $dir . '/' . $file;
        if (is_dir($path)) {
            echo '<b>' . $space . "d " . $file . "&nbsp;&nbsp;&nbsp;&nbsp; права -" . substr(sprintf('%o', fileperms($path)), -3). '&nbsp;&nbsp;&nbsp;&nbsp;размер - '  . filesize($path) . ' байтов' ."</b><br />";

            viewDir($path, $space . '&nbsp;&nbsp;');
        } else {
            echo $space . "f " . $file . "&nbsp;&nbsp;&nbsp;&nbsp; права -" . substr(sprintf('%o', fileperms($path)), -3) .'&nbsp;&nbsp;&nbsp;&nbsp;размер - '  . filesize($path) . ' байтов'."<br />";
        }
    }
}

viewDir($dir, '');








