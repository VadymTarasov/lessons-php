<?php
require_once 'connect_db.php';
$productId = $_GET['id'];
$product = mysqli_query($link, "SELECT * FROM `products` WHERE `id` = '$productId'", MYSQLI_USE_RESULT);
$product = mysqli_fetch_assoc($product);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Hello, world!</title>
</head>
<body>
<div class="container">
    <div class="offset-md-2 w-50">

        <form action="update_query.php" method="post">
            <h1>Обновить продукт</h1>
            <div class="mb-3">
                <input name="id" value="<?= $product['id'] ?>" type="hidden" class="form-control" id="id">
            </div>
            <div class="mb-3">
                <label for="name">название</label>
                <input name="name" value="<?= $product['name'] ?>" type="text" class="form-control" id="name">
            </div>
            <div class="mb-3">
                <label for="price">цена</label>
                <input name="price" value="<?= $product['price'] ?>" type="number" class="form-control" id="price">
            </div>
            <div class="mb-3">
                <label for="season">сезон</label>
                <input name="season" value="<?= $product['season'] ?>" type="text" class="form-control" id="season">
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


