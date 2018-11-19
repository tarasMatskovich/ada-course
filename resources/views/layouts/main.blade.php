<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700|Open+Sans:400,600,700|Oswald:400,500,600,700|Roboto:300,400,500,700&amp;subset=cyrillic,cyrillic-ext" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">

    <title>Язык Ада - обучающий курс</title>
</head>
<body>
<!-- NAVBAR SECTION -->
<secion class="main-menu">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light bg-customize bg-slick">
            <a class="navbar-brand" href="#">Ada</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Главная <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Перейти к курсу</a>
                    </li>
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="#">Войти</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Зарегистрироваться</a>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link" href="#">Мой кабинет</a>
                        </li>
                    @endguest
                </ul>
                <form class="form-inline my-2 my-lg-0 search-form">
                    <i class="fas fa-search"></i>
                    <input class="form-control mr-sm-2" type="search" placeholder="Поиск" aria-label="Поиск">
                </form>
            </div>
        </nav>
    </div>
</secion>
<!-- END OF NAVBER SECTION -->

@yield('content')

<footer>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light bg-customize bg-slick">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent2" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent2">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Главная <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Перейти к курсу</a>
                    </li>
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="#">Войти</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Зарегистрироваться</a>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link" href="#">Мой кабинет</a>
                        </li>
                    @endguest
                </ul>
            </div>
        </nav>
    </div>
</footer>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="{{asset('js/wow.min.js')}}"></script>
<script src="{{asset('js/common.js')}}"></script>
</body>
</html>