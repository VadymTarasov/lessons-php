#!/bin/bash

 #2. Записати дані в файл. Скрипт приймає рядок і назву файлу.
 # У кінець файлу з абзацу дописує рядок, що був переданий.

echo "Введите имя файла"
read Nane
echo "Введите текст"
read Text


myFunction() {
  echo "$2" >> "$1"
  cat "$1"
}
myFunction "$Nane" "$Text"