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
                        @if($tests and !$tests->isEmpty())
                            <ol class="rounded">
                                @foreach($tests as $test)
                                    <li><a href="{{route('test', ['id' => $test->id])}}">{{$test->title}}</a></li>
                                @endforeach
                            </ol>
                        @else
                            <p>Тестов пока нет на сайте.</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection