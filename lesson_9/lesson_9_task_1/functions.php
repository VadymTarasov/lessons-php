<?php
require_once 'data.php';

function debug($data)
{
//    echo '<pre>' . print_r($data,1) . '</pre>';
}

function load($data)
{
    foreach ($_POST as $k => $v) {
        if (array_key_exists($k, $data)) {
            $data[$k]['value'] = trim($v);
        }
    }
    return $data;
}

function validate($data)
{
    $errors = '';
    foreach ($data as $k => $v) {
        if ($data[$k]['required'] && empty($data[$k]['value'])) {
            $errors .= " <li> Вы не заполнили поле {$data[$k]['field_name']}</li>";
        }
    }
    return $errors;
}

//echo 'имя - ' . $_FILES['filename']['name'] . '<br>';
//echo 'размер - ' . $_FILES['filename']['size'] . '<br>';
//echo 'тип - ' . $_FILES['filename']['type'] . '<br>';
//echo 'временный файл, в котором сохранен загруженый файл - ' . $_FILES['filename']['tmp_name'] . '<br>';*/
if (move_uploaded_file($_FILES['filename']['tmp_name'], $_FILES['filename']['name'])) {
    echo '<br>';
} else {
    echo "<li> Загрузите фото</li>";;
}


if (!empty($_POST)) {
    debug($_POST);
    $fields = load($fields);
    debug($fields);
    if ($errors = validate($fields)) {
//        debug($errors);
        echo $errors;
    }
}




