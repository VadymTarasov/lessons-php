

<?php

setcookie("phoneCookie", "{$_POST['phone']}", time() + 10, '/');

if ($_COOKIE['phoneCookie'] == false) {
    header('Location: /lesson_10/lesson_10_task_1/index.php');
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Авторизация</title>
</head>
<body>

<div class="container">
    <div class="offset-md-2 w-50">
        <h1>Авторизуйтесь</h1>

        <form action="#" method="post">
            <div class="mb-3">
                <label for="name">Имя</label>
                <input name="name" type="text" class="form-control" id="name">
            </div>
            <div class="mb-3">
                <label for="surname">Фамилия</label>
                <input name="surname" type="text" class="form-control" id="surname">
            </div>
            <div class="mb-3">
                <label for="phone">Проверьте номер телефона</label>
                <input name="phone" type="text" value="<?=$_COOKIE['phoneCookie']; ?>" class="form-control" id="phone">
            </div>

            <button type="submit" class="btn btn-primary">Отправить</button>
        </form>

    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>
</html>


