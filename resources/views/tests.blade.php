@extends('layouts.main')

@section('content')
    <section class="course">
        <div class="container">
            <div class="main-title">
                <h3 class="title">Тесты</h3>
                <hr class="deliver">
            </div>
            <div class="row">
                <div class="col-sm-3">
                    @include('left-menu')
                </div>
                <div class="col-sm-9">
                    <div class="block-description wow zoomInRight">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="image">
                                    <img src="{{asset('img/tests2.jpg')}}" alt="">
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <p class="slick-text">
                                    Эта секция курса предназначена для проверки и оценки своих знаний. Для каждой темы лекции есть свои уникальные тесты, пройдя которых вы сможете оценить своё качество обучения. Так же весь ваш прогресс сохраняеться в Вашем личном кабинете, где вы в любой момент можете его посмотреть.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="lections wow zoomInLeft">
                        <h3>Список всех тестов</h3>
                        <ol class="rounded">
                            <li><a href="#">Тесты к лекции 1</a></li>
                            <li><a href="#">Тесты к лекции 2</a></li>
                            <li><a href="#">Тесты к лекции 3</a></li>
                            <li><a href="#">Тесты к лекции 4</a></li>
                            <li><a href="#">Тесты к лекции 5</a></li>
                            <li><a href="#">Тесты к лекции 6</a></li>
                            <li><a href="#">Тесты к лекции 7</a></li>
                            <li><a href="#">Тесты к лекции 8</a></li>
                            <li><a href="#">Тесты к лекции 9</a></li>
                            <li><a href="#">Тесты к лекции 10</a></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection