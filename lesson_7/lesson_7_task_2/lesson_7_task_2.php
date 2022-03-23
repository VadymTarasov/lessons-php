<?php
/*Староста ведет учет оценок по всем студентам и по всем экзаменам в csv файле.

ФИО;Предмет;Оценка
Иванов;Химия;5
Петров;Математика;4
Сидоров;Физика;5
...

Написать функцию, которая создаст файлы Отличники.csv, Хорошисты.csv, Троешники.csv,
Пересдача.csv и запишет в следующие файлы соответсвующие названию данные.
Отличники - все 5

ФИО
Иванов
Сидоров
...

Хорошисты - есть хоть одна 4 (оценки 4 и 5 только). Файл отсортирован по фамилии
ФИО;Предмет;Оценка
Петров;Химия;5
Петров;Математика;4
...

Троешники - есть хоть одна 3 (3, 4, 5 оценки). Файл отсортирован по наименьшему колчеству 3
ФИО;Предмет;Оценка
Петров;Химия;5
Петров;Математика;4
Петров;Физика;3
...

Пересдача - есть 2. Файл отсортирован по предмету и содержит только оценки 2
Предмет;ФИО;Оценка
Химия;Петров;2
Химия;Иванов;2
Математика;Сидоров;2
...

Функция прнимает 2 аргумента - 1) путь к изначальному файлу с оценкам 2) директорию в которой будут созданы файлы результаты

PS. Аргументы скрипт должен принимать с CLI. Например:
php index.php '/var/www/data.csv' '/var/www/resultDir'
*/

echo '<pre>';

$path = "/var/www/lessons-php/lesson_7/lesson_7_task_2/students.csv";
$dir = "/var/www/lessons-php/lesson_7/lesson_7_task_2/results/";
function my_search($path, $dir)
{
    $students = [];
    if (($file = fopen($path, "r")) !== false) {
        while ($data = fgetcsv($file, 1000, ";")) {
            $students[] = $data;
        }
        fclose($file);
    }
    $four = fopen($dir . "Отличники.csv", "w");
    fclose($four);
    $four1 = fopen($dir . "Хорошисты.csv", "w");
    fclose($four1);
    $four2 = fopen($dir . "Троечники.csv", "w");
    fclose($four2);
    $four3 = fopen($dir . "Пересдача.csv", "w");
    fclose($four3);

    {
        $ivanov = '';
        $sidorov = '';
        $petrov = '';
        $kuznetsov = '';
        $sokolov = '';
        $usik = '';
        $popovich = '';
        $shevchenko = '';
        $one = '';
        $two = '';
        $three = '';

        foreach ($students as $k => $v) {
            foreach ($v as $val => $val2) {
                if ($val2 == "Иванов") $ivanov .= implode(";", $v) . "\n";
                if ($val2 == "Попович") $popovich .= implode(";", $v) . "\n";
                if ($val2 == "Шевченко") $shevchenko .= implode(";", $v) . "\n";
                if ($val2 == "Усик") $usik .= implode(";", $v) . "\n";
                if ($val2 == "Сидоров") $sidorov .= implode(";", $v) . "\n";
                if ($val2 == "Петров") $petrov .= implode(";", $v) . "\n";
                if ($val2 == "Кузнецов") $kuznetsov .= implode(";", $v) . "\n";
                if ($val2 == "Соколов") $sokolov .= implode(";", $v) . "\n";
            }
        }
    }
    $arr = compact('sidorov', 'petrov', 'kuznetsov', 'sokolov', 'usik', 'popovich', 'ivanov', 'shevchenko');
    foreach ($arr as $name => $str) {
        switch ($str) {
            case (str_contains($str, "5")) && (!str_contains($str, "4")) && (!str_contains($str, "3"))
                && (!str_contains($str, "2")):
                $four = fopen($dir . "Отличники.csv", "a");
                $word = preg_split("/[\s;]+/", "$str");
                $word[0] .= "\n";
                fwrite($four, $word[0]);
                break;
            case (!str_contains($str, "3")) && (!str_contains($str, "2")):
                $four1 = fopen($dir . "Хорошисты.csv", "a");
                fwrite($four1, $str);
                fclose($four1);
                break;
            case (str_contains($str, "3")) && (!str_contains($str, "2")):
                $four2 = fopen($dir . "Троечники.csv", "w");
                if (substr_count($str, '3') == 3 && $three !== $str) $three .= $str;
                if (substr_count($str, '3') == 2 && $two !== $str) $two .= $str;
                if (substr_count($str, '3') == 1 && $one !== $str) $one .= $str;
                fwrite($four2, $one);
                fwrite($four2, $two);
                fwrite($four2, $three);
                fclose($four2);
                break;
            case (str_contains($str, "2")):
                $four3 = fopen($dir . "Пересдача.csv", "w");
                $word = preg_split("/[\s ]+/", "$str");
                foreach ($word as $ww => $w)

                    if (str_contains($w, '2') && $twoSubject !== $w) {
                        $twoSubject .= $w . "\n";
                    }
                fwrite($four3, $twoSubject);
                fclose($four3);
                break;
        }
    }
}

my_search($path, $dir);

echo "<br><b>Отличники</b><br>";
if (($handle = fopen($dir . "Отличники.csv", "r")) !== FALSE) {
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
        $num = count($data);
        $row++;
        for ($c = 0; $c < $num; $c++) {
            echo $data[$c] . "<br />\n";
        }
    }
    fclose($handle);
}
echo "<br><b>Хорошисты</b><br>";
if (($handle = fopen($dir . "Хорошисты.csv", "r")) !== FALSE) {
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
        $num = count($data);
        $row++;
        for ($c = 0; $c < $num; $c++) {
            echo $data[$c] . "<br />\n";
        }
    }
    fclose($handle);
}
echo "<br><b>Троечники</b><br>";
if (($handle = fopen($dir . "Троечники.csv", "r")) !== FALSE) {
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
        $num = count($data);
        for ($c = 0; $c < $num; $c++) {
            echo $data[$c] . "<br />\n";
        }
    }
    fclose($handle);
}
echo "<br><b>Пересдача</b><br>";
if (($handle = fopen($dir . "Пересдача.csv", "r")) !== FALSE) {
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
        $num = count($data);
        for ($c = 0; $c < $num; $c++) {
            echo $data[$c] . "<br />\n";
        }
    }
    fclose($handle);
}




