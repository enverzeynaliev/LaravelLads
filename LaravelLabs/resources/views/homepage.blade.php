<!DOCTYPE html>
<html xmlns:th="http://www.thymeleaf.org">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../../public/css/app.css">
    <title>GameReview</title>
    <link rel="icon" href="img/favicon.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maxim-scale=1.0, user-scalable=0 /">

</head>
<body>

@include('inc.header')


<div class="content">
    <div class="conteiner">
        <img class="content_img" src="img/background.png" alt="ИТ для людей">
        <p class="content_p">«IT для людей» - проект, направленный на упрощение IT процедур <br>
            – сделать все процедуры максимально прозрачными, <br>
            интуитивными и быстрыми для конечного пользователя. <br>
            Активное обучение сотрудников, повышение их общей грамотности в <br>
            плане софта, включая не только тот,<br>
            который необходим им в работе, но и вообще <br>
            любой привычный для человека софт. Улучшение условий работы, отношение к клиентам.<br>
            «IT для людей» видится как платформа по сбору <br>
            полезных идей для реализации внутри компаний и обмену опытом.</p>

        <a href="/add" class="wave-btn">
            <span class="wave-btn_text">Подать предложение</span>
            <span class="wave-btn_waves"></span>
        </a>
    </div>
    <div class="flex-center position-ref full-height">
        @if (Route::has('login'))
            <div class="top-right links">
                @auth
                    <a href="{{ route('/home') }}">Ukfdyfz</a>
                @else
                    <a href="{{ route('login') }}">Login</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}">Register</a>
                    @endif
                @endauth
            </div>
        @endif</div>
</div>
</body>

@include('inc.footer')

</html>
