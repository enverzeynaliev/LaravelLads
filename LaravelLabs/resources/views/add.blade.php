<!DOCTYPE html>
<html xmlns:th="http://www.thymeleaf.org">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="public/css/app.css">
    <title> Подача идеи </title>
    <link rel="icon" href="img/favicon.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maxim-scale=1.0, user-scalable=0 /">
</head>
<body>

@include('inc.header')

<form action="/add" method="post">
    @csrf
    <div class="form-group">
        <label for="name">Заголовок</label>
        <input type="text" name="name" placeholder="Заголовок" id="name" class="form-control  ">
    </div>

    <div class="form-group">







        <label for="genre">Жанр</label>
        <input type="text" name="genre" placeholder="Введите жанр" id="genre" class="form-control">
    </div>
    <div class="form-group">
        <label for="fullText">Отзыв</label>
        <textarea type="text" name="fullText" placeholder="Отзыв об игре" id="fullText" class="form-control"></textarea>
    </div>
    <button type="submit" class="btn btn-success">Supply</button>
</form>
<style>
    form {
        margin-left: 20%;
        margin-right: 20%;
    }
</style>

@include('inc.footer')

</body>
</html>
