<?php
session_start();
$_SESSION['name'] = $_POST['name'];
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Фамилия</title>
</head>
<body>

<div class="container">
    <div class="offset-md-2 w-50">
        <h1>Авторизуйтесь</h1>

        <form action="age.php" method="post">
            <div class="mb-3">
                <label for="surname">Фамилия</label>
                <input name="surname" type="text"  class="form-control" id="surname">
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


