<?php
/**
 * 2. Створити базу міст.
 * Далі беруть участь людина та комп'ютер.
 * Людина називає місто, далі отримує відповідь від комп'ютера,
 * де назва міста починається на останню літеру названого гравцем міста.
 * Далі ситуація повторюється, гравець має назвати місто,
 * у якого назва починається з останньої літери названим оппонентом міста.
 * Імена не можуть повторюватися.
 *
 */
session_start();
if (iconv_strlen($_SESSION['allGameCity']) > 150) {

    $_SESSION['allGameCity'] = 'Победила дружба!';
}
if ($_SESSION['copyCity']) echo $_SESSION['copyCity'];

?>
    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
              integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
              crossorigin="anonymous">

        <title>Игра в города</title>
    </head>
    <body>

    <div class="container">
        <div class="offset-md-2 w-50">
            <h1>Игра в города</h1>

            <form class="row g-3" action="result.php" method="post">

                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" id="userCity">Введите город</span>
                    <input type="text" name="userCity" class="form-control" aria-label="Sizing example input"
                           aria-describedby="inputGroup-sizing-sm">
                </div>

                <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                    <button type="submit" class="btn btn-success">Отправить</button>
                    <button type="submit" id="giveUp" name="giveUp" value="Ничья. " class="btn btn-warning">Предложить
                        ничью
                    </button>
                </div>
                <div class="mb-6">
                    <label for="gameCity">Ответ компьютера</label>
                    <input name="gameCity" value="<?= $_SESSION['gameCity']; ?>" type="text" class="form-control"
                           id="gameCity">
                </div>
                <div class="mb-3">
                    <label for="gameCity">Результат игры</label>
                    <textarea name="gameCity" class="form-control" id="gameCity"><?php

                        if ($_COOKIE['giveUp']) {
                            echo $_COOKIE['giveUp'];
                        }
                        if ($_SESSION['allGameCity']) {
                            echo $_SESSION['allGameCity'];
                        } else echo "Начните игру!"
                        ?>
                    </textarea>
                </div>

            </form>

        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
            crossorigin="anonymous"></script>
    </body>
    </html>

<?php
if ($_SESSION['allGameCity'] == 'Победила дружба!') {
    session_unset();
    session_destroy();
}
if (iconv_strlen($_SESSION['copyCity']) > 1) {
    session_unset();
    session_destroy();
}
?>