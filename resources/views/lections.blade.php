@extends('layouts.main')

@section('content')
    <section class="course">
        <div class="container">
            <div class="main-title">
                <h3 class="title">Лекции</h3>
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
                                    <img src="{{asset('img/lections2.jpg')}}" alt="">
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <p class="slick-text">
                                    Эта секция курса предназначена для первоначального ознакомления с таким теоретическими основами языка программирования Ada как: синтаксис языка, среда использование, нужная среда разработки, основные операторы языка и языковые конструкции и их использование в реальных примерах.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="lections wow zoomInLeft">
                        <h3>Список всех лекций</h3>
                        <ol class="rounded">
                            <li><a href="#">Лекция 1</a></li>
                            <li><a href="#">Лекция 2</a></li>
                            <li><a href="#">Лекция 3</a></li>
                            <li><a href="#">Лекция 4</a></li>
                            <li><a href="#">Лекция 5</a></li>
                            <li><a href="#">Лекция 6</a></li>
                            <li><a href="#">Лекция 7</a></li>
                            <li><a href="#">Лекция 8</a></li>
                            <li><a href="#">Лекция 9</a></li>
                            <li><a href="#">Лекция 10</a></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection