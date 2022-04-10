<?php
session_start();
$_SESSION['age'] = $_POST['age'];
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Профиль</title>
</head>
<body>
<div class="container">
    <div class="offset-md-2 w-50">
        <h1>Профиль</h1>
        <table class="table table-hover text-nowrap">
            <tbody>
            <tr>
                <td>Имя</td>
                <td><?php echo $_SESSION['name']; ?></td>
            </tr>
            <tr>
                <td>Фамилия</td>
                <td><?= $_SESSION['surname']; ?></td>
            </tr>
            <tr>
                <td>Возраст</td>
                <td><?php echo $_SESSION['age']; ?></td>
            </tr>
            </tbody>
        </table>

    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>
</html>

<?php
session_unset();
session_destroy();
?>



