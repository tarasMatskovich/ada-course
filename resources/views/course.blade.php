@extends('layouts.main')

@section('content')
    <section class="course">
        <div class="container">
            <div class="main-title">
                <h3 class="title">Обучающий курс по языку программирования Ada</h3>
                <hr class="deliver">
            </div>
            <div class="row">
                <div class="col-sm-3">
                    @include('left-menu')
                </div>
                <div class="col-sm-9">
                    <div class="main-description">
                        <p class="slick-text">
                            Этот обучающий курс разделён на 3 секции: <a href="{{route('lections.list')}}" class="slick-link">лекции</a>, <a href="{{route('practic.list')}}" class="slick-link">практика</a> и <a href="{{route('tests.list')}}" class="slick-link">тесты</a>. Советуем вам перед прохождением тестов или практики сначала ознакомиться с лекционным материалом так, как все тесты пострены на его базе. И так же без теории в лекциях вы не сможете выполнить практику.
                        </p>
                    </div>
                    <div class="block-description wow slideInRight">
                        <a href="{{route('lections.list')}}" class="section-title">Лекции</a>
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="image">
                                    <img src="{{asset('img/lections.jpg')}}" alt="">
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <p class="slick-text">
                                    Эта секция курса предназначена для первоначального ознакомления с таким теоретическими основами языка программирования Ada как: синтаксис языка, среда использование, нужная среда разработки, основные операторы языка и языковые конструкции и их использование в реальных примерах.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="block-description wow slideInLeft">
                        <a href="{{route('practic.list')}}" class="section-title">Практика</a>
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="image">
                                    <img src="{{asset('img/practic.jpg')}}" alt="">
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <p class="slick-text">
                                    Эта секция курса предназначена для закрепления теоретического материала, даного в лекциях на реальных задачах. К каждой теме лекции присутсвуют свою практические задания для лучшего освоения темы.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="block-description wow slideInRight">
                        <a href="{{route('tests.list')}}" class="section-title">Тесты</a>
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="image">
                                    <img src="{{asset('img/tests.jpg')}}" alt="">
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <p class="slick-text">
                                    Эта секция курса предназначена для проверки и оценки своих знаний. Для каждой темы лекции есть свои уникальные тесты, пройдя которых вы сможете оценить своё качество обучения. Так же весь ваш прогресс сохраняеться в Вашем личном кабинете, где вы в любой момент можете его посмотреть.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection