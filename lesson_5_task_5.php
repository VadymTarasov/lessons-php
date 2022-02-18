<?php


/*
Написать функцию которая на вход получает строку(пароль) 
и проверяет сложность пароля по шкале Простой, Нормальный, Сложный
*/
$pass = '123dfd!@#$';
 
function password($pass)
{

 switch ($pass) {
   
    case (preg_match("/([aA-zZ]+)/", $pass)) && (preg_match("/([0-9]+)/", $pass)) 
    && (preg_match("/[!@#$%^&*]/", $pass))&&(strlen($pass) > 9):
        echo 'Сложный';
        break;
    case (preg_match("/([aA-zZ]+)/", $pass)) && (preg_match("/([0-9]+)/", $pass)) 
    && (strlen($pass) > 7):
        echo 'Нормальный';
        break;
        case (strlen($pass) > 5):
            echo'Простой';
          break;
    default:
        echo "Пароль не надежный";
}
}

password($pass);

