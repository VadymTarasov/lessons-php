
[![Typing SVG](https://readme-typing-svg.herokuapp.com?color=%2336BCF7&lines=Привет!)](https://git.io/typing-svg)

![](https://github.com/blackcater/blackcater/raw/main/images/Hi.gif)

Функция, которая создаст файлы Отличники.csv, Хорошисты.csv, Троечники.csv, Пересдача.csv и запишет в следующие файлы соответсвующее названию данные.
====
Описание работы функции
----

1. Функция прнимает 2 аргумента - 1) путь к изначальному файлу с оценкам 2) директорию в которой будут созданы файлы результаты
2. В переменную ```$students``` добавляем данные с файла с оценками в виде массива. 
3. [fopen() mode 'w' ](https://www.php.net/manual/ru/control-structures.switch.php) обрезает файл до нулевой длины, для избежания дублирования.
4. Используя фамилию студента сделал переменную с данными о нем.
5. [compact](https://www.php.net/manual/ru/function.compact.php) — Создаёт массив, содержащий названия переменных и их значения.
6. Используя  [foreach](https://www.php.net/manual/ru/control-structures.foreach.php),  [switch](https://www.php.net/manual/ru/control-structures.switch.php) и [функции для работы со строками](https://www.php.net/manual/ru/ref.strings.php) сортируем студентов соответственно заданию в файлы.

