
[![Typing SVG](https://readme-typing-svg.herokuapp.com?color=%2336BCF7&lines=Привет!)](https://git.io/typing-svg)

![](https://github.com/blackcater/blackcater/raw/main/images/Hi.gif)

Функция выведет на экран содержимое каталога
====
Описание работы функции
----

1. Переменная $dir принимает аргументом строку абсолютный путь к каталогу, который необходимо просканировать.
2. Получаем полный список файлов и каталогов [scandir($dir)](https://www.php.net/manual/ru/function.scandir.php)
3. В переменной $path получаем полный путь к файлу.

```php
 $path = $dir.'/'.$file;
```

4. Определяем, является ли имя файла директорией [is_dir($path)](https://www.php.net/manual/ru/function.is-dir.php)
5. Если это директория, выводим название директории, делая заданный отступ $space.
6. С помощью рекурсии выводим содержание полученной директории.
7. Если это файл, то просто выводим название файла. 
8. Функции  [fileperms](https://www.php.net/manual/ru/function.fileperms.php) и [filesize](https://www.php.net/manual/ru/function.filesize.php) отображают информацию о правах на файл и размер файла.

