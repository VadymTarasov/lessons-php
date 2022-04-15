/*
 Створену на останньому занятті таблицю заповнити даними.
 Написати запит, що дістане усю інформацію з трьох таблиць.
 Результатом роботи є дамп бази та написаний запит.
*/

select actors.*, films.*, filmmaker.*
from actors
         join actor_film
              on actors.id = actor_film.actor_id
         join films
              on films.id = actor_film.film_id

         join film_filmmaker
              on films.id = film_filmmaker.film_id
         join filmmaker
              on filmmaker.id = film_filmmaker.filmmaker_id;

mysqldump -u root -p cinema > /var/www/lessons.loc/lesson_12/lesson_12_task_1/cinema_dump20220416.sql




