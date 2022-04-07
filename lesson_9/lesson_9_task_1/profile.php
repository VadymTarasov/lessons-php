<?php
require_once 'data.php';
require_once 'functions.php';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>profile</title>
</head>
<body>
<div class="container">
    <div class="w-75">
        <div class="text-center">
            <img src="<?php echo $_FILES['filename']['name']; ?>" class="rounded" width="400" height="400">
        </div>
        <table class="table table-hover text-nowrap">
            <tbody>
            <tr>
                <td>Имя</td>
                <td><?php echo $_POST['name']; ?></td>
            </tr>
            <tr>
                <td>Возраст</td>
                <td><?php echo $_POST['age']; ?></td>
            </tr>
            <tr>
                <td>Адрес электронной почты</td>
                <td><?php echo $_POST['email']; ?></td>
            </tr>
            <tr>
                <td>Адрес</td>
                <td><?php echo $_POST['address']; ?></td>
            </tr>
            <tr>
                <td>Телефон</td>
                <td><?php echo $_POST['phone']; ?></td>
            </tr>
            <tr>
                <td>Комментарий</td>
                <td><?php echo $_POST['comment']; ?></td>

            </tbody>
        </table>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>

</body>
</html>
