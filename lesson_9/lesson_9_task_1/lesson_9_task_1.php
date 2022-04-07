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
        <form action="profile.php" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="formFileMultiple" class="form-label">Загрузите фото</label>
                <input name="filename" class="form-control" type="file" id="filename" multiple>
            </div>
            <div class="mb-3">
                <label for="name">Имя*</label>
                <input name="name" type="text" class="form-control" id="name">
            </div>
            <div class="mb-3">
                <label for="age">Возраст*</label>
                <input name="age" type="number" class="form-control" id="age">
            </div>

            <div class="mb-3">
                <label for="email">Адрес электронной почты*</label>
                <input name="email" type="email" class="form-control" id="email">
            </div>
            <div class="mb-3">
                <label for="address">Адрес</label>
                <input name="address" type="text" class="form-control" id="address">
            </div>
            <div class="mb-3">
                <label for="phone">Телефон</label>
                <input name="phone" type="text" class="form-control" id="phone">
            </div>
            <div class="mb-3">
                <label for="comment">Комментарий</label>
                <textarea name="comment" class="form-control" id="comment"></textarea>
            </div>

            <div class="mb-3 form-check">
                <input name="check" type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Я соглашаюсь на обработку данных*</label>
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





