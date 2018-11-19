@extends('layouts.main')

@section('content')
    <!-- CARUOSEL SECYTION -->
    <section class="main-slider">
        <div class="container">
            <div id="carouselExampleIndicators" class="carousel slide carousel-slick" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="{{asset('img/third.webp')}}" alt="First slide">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Язык Ada</h5>
                            <p>
                                Язык программирования, созданный в 1979—1980 годах в ходе проекта Министерством обороны США
                            </p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="{{asset('img/second.webp')}}" alt="Second slide">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Цель</h5>
                            <p>Был создан с целью  разработать единый язык программирования для встроенных систем</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="{{asset('img/first.webp')}}" alt="Third slide">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Язык Ada</h5>
                            <p>Был назван в честь Ады Лавлейс</p>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <i class="fas fa-chevron-circle-left prev-icon"></i>
                    <span class="sr-only">Предыдущий</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <i class="fas fa-chevron-circle-right next-icon"></i>
                    <span class="sr-only">Следуйщий</span>
                </a>
            </div>
        </div>
    </section>
    <!-- END OF CAROUSEL SECTION -->

    <!-- ABOUT ADA SECTION -->
    <section class="about-ada my-margin">
        <div class="container">
            <h3 class="title">Немного о Ada</h3>
            <hr class="deliver">
            <div class="cards">
                <div class="row">
                    <div class="col-md-4">
                        <div class="slick-card wow fadeInUp" data-wow-delay="0.1s" data-wow-offset="200">
                            <div class="icon">
                                <i class="fas fa-box-open"></i>
                            </div>
                            <div class="desc">
                                <p>
                                    В язык встроены конструкции поддержки параллельного программирования
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="slick-card wow fadeInUp" data-wow-delay="0.2s" data-wow-offset="200">
                            <div class="icon">
                                <i class="fas fa-check-square"></i>
                            </div>
                            <div class="desc">
                                <p>
                                    Ада — это структурный, модульный язык программирования, содержащий высокоуровневые средства программирования параллельных процессов
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="slick-card wow fadeInUp" data-wow-delay="0.3s" data-wow-offset="200">
                            <div class="icon">
                                <i class="fas fa-font"></i>
                            </div>
                            <div class="desc">
                                <p>
                                    Синтаксис — алголоподобный, в духе языков конца 1970-х годов
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text">
                <p>
                    Ада — мощный объектно‐ориентированный язык общего назначения ориентированный на разработку надежного программного обеспечения. В язык включены механизмы поддержки параллельного исполнения, обработки исключений, настраиваемых модулей, поддержки распределенных вычислений, стандартные интерфейсы с другими языками и библиотеками. Ада имеет компиляторы под практически любую операционную систему.
                </p>
            </div>
        </div>
    </section>
    <!-- END OF ABOUT ADA SECTION -->

    <!-- ABOUT COURSE SECTION -->
    <section class="about-course">
        <div class="container">
            <h3 class="title">Немного об этом курсе</h3>
            <hr class="deliver">
            <div class="text">
                <div class="video wow fadeInRight" data-wow-delay="0.3s">
                    <iframe width="660" height="415" src="https://www.youtube.com/embed/BDocp-VpCwY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <h5>Для чего этот курс?</h5>
                <p>
                    Этот курс предназначен для изучение языка программирования Ada.
                </p>
                <h5>Для кого этот курс?</h5>
                <p>
                    Этот курс расчитан на людей, которые хотят изучить теоретические основы языка Ada и закрепить их на практике.
                </p>
                <h5>Что из себя представляет этот курс?</h5>
                <p>
                    Данный курс представляет собой полное собрание теоретического материала по языку программирования Ada. Все теоретические материалы представлены в разделе "Лекции". Все лекции разбиты по конкретной тематике. Так же после ознакомления с теоретическими основами материала, вы можете проверить свои знания в разделе "Тесты". Так же здесь присутствует раздел "Практика", где вы сможете закрепить полученые знания на практике. Весь ваш прогресс будет сохраняться в личном кабинете, где вы всегда сможете посмотреть свои результаты и оценить качество своего обучения. Что бы начать пользоваться этим курсом пройдите регистрацию и курс станет вам доступны.
                </p>
                <div class="reg-block">
                    <a href="#" class="btn btn-outline-primary">
                        Зарегистрироваться
                    </a>
                    <a href="#">
                        У меня уже есть аккаунт
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- END OF ABOUT COURSE SECTION -->

    <!-- ABOUT DEVELOPERS SECTION -->
    <section class="about-devs">
        <div class="container">
            <h3 class="title">Немного об разработчиках</h3>
            <hr class="deliver">
            <div class="developers">
                <div class="developer wow fadeInRight" data-wow-delay="0.3s">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="image">
                                <img src="{{asset('img/taras.jpg')}}" alt="">
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="desc">
                                <h4>Тарас Мацькович</h4>
                                <p>
                                    Роли в проекте:
                                </p>
                                <div class="roles">
                    <span class="role">
                      Fron-end developer
                    </span>
                                    <span class="role">
                      Back-end developer
                    </span>
                                </div>
                                <div class="about">
                                    <p>
                                        Сверстал основные страницы сайта и сделал back-end логику сайта.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <hr class="big-deliver">

                <div class="developer wow fadeInLeft" data-wow-delay="0.3s">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="desc">
                                <h4>Маша Плаксина</h4>
                                <p>
                                    Роли в проекте:
                                </p>
                                <div class="roles">
                    <span class="role">
                      Создатель концепта
                    </span>
                                </div>
                                <div class="about">
                                    <p>
                                        Придумала идею и концепт основных частей проекта.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="image">
                                <img src="{{asset('img/masha.jpg')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>

                <hr class="big-deliver">

                <div class="developer wow fadeInRight" data-wow-delay="0.3s">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="image">
                                <img src="{{asset('img/dima.jpg')}}" alt="">
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="desc">
                                <h4>Дмитрий Шатилов</h4>
                                <p>
                                    Роли в проекте:
                                </p>
                                <div class="roles">
                    <span class="role">
                      Дизайнер
                    </span>
                                </div>
                                <div class="about">
                                    <p>
                                        Сделал дизайн и макеты основних страниц проекта.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <hr class="big-deliver">

                <div class="developer wow fadeInLeft" data-wow-delay="0.3s">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="desc">
                                <h4>Оля Кныш</h4>
                                <p>
                                    Роли в проекте:
                                </p>
                                <div class="roles">
                    <span class="role">
                      Создатель раздела "Тесты"
                    </span>
                                </div>
                                <div class="about">
                                    <p>
                                        Создала и наполнила контентом раздел проекта "Тесты".
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="image">
                                <img src="{{asset('img/olga.jpg')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>

                <hr class="big-deliver">

                <div class="developer wow fadeInRight" data-wow-delay="0.3s">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="image">
                                <img src="{{asset('img/jana.jpg')}}" alt="">
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="desc">
                                <h4>Яна Билоус</h4>
                                <p>
                                    Роли в проекте:
                                </p>
                                <div class="roles">
                    <span class="role">
                      Создала раздел "Лекции"
                    </span>
                                </div>
                                <div class="about">
                                    <p>
                                        Нашла основной теоретический материал для курса и наполнила контентом раздел "Лекции".
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <hr class="big-deliver">

                <div class="developer wow fadeInLeft" data-wow-delay="0.3s">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="desc">
                                <h4>Настя Македон</h4>
                                <p>
                                    Роли в проекте:
                                </p>
                                <div class="roles">
                    <span class="role">
                      Оформление
                    </span>
                                </div>
                                <div class="about">
                                    <p>
                                        Создала дизайн оформления раздела "Лекции"
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="image">
                                <img src="{{asset('img/nastia.jpg')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>

                <hr class="big-deliver">

                <div class="developer wow fadeInRight" data-wow-delay="0.3s">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="image">
                                <img src="{{asset('img/pasha.jpg')}}" alt="">
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="desc">
                                <h4>Павел Набоков</h4>
                                <p>
                                    Роли в проекте:
                                </p>
                                <div class="roles">
                    <span class="role">
                      Создатель раздела "Практика"
                    </span>
                                </div>
                                <div class="about">
                                    <p>
                                        Нашёл основной практический материал для курса и наполнил контентом раздел "Практика".
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END OF ABOUT DEEVLOPERS SECTION -->
@endsection