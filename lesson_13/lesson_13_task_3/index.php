<?php
/**
 * Розробити додаток “Калькулятор” у стилі ООП.
 * Калькулятор повинен робити базові підрахунки (+, -, *, /).
 * *Додати функції знаходження модулю числа,  остачі від ділення.
 */
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>
<body>

<div class="container">
    <div class="offset-md-2 w-50">
    <h1>Калькулятор</h1>


<form class="row g-3" action="res.php" method="post">

    <div class="col-md-4">
        <label for="inputCity" class="form-label">Первое число</label>
        <input name="firstNumber" type="number" class="form-control" value="<?=$_COOKIE['firstNumberCookie']; ?>" id="firstNumber">
    </div>
    <div class="col-md-4">
        <label  for="inputState" class="form-label">Оператор</label>
        <select name="operators" id="operators" class="form-select">
            <option ><?=$_COOKIE['operatorsCookie']; ?></option>
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
            <option value="%">%</option>
        </select>
    </div>
    <div class="col-md-4">
        <label for="inputZip" class="form-label">Втрое число</label>
        <input name="secondNumber"  type="number" class="form-control"  value="<?=$_COOKIE['secondNumber']; ?>" id="secondNumber">
    </div>

    <div class="col-12">
        <button type="submit" class="btn btn-primary">Посчитать</button>
    </div>

    <div class="col-md-12">
        <label name="firstNumber" for="inputCity" class="form-label">Результат</label>
        <input value="<?=$_COOKIE['resCookie']; ?>" type="text" class="form-control" id="firstNumber">
    </div>
</form>

</div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>

