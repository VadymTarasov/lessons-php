#!/bin/bash

#1. Змінити розширення файлу. Скрипт приймає як параметри ім'я файлу та нове розширення.
# Відобразити старе і нове ім’я файлів.

echo "Введите имя файла"
read Nane
echo "Введите новое расширение"
read Format

myFunction() {
  a=$1
  echo "Старое имя $1"
  b=`echo $a | cut -d. -f 1`
  c=$2
  d="."
  e="$b$d$c"
  echo "Новое имя $e"
  mv $a $e

}
myFunction "$Nane" "$Format"
