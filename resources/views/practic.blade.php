@extends('layouts.main')

@section('content')
    <section class="course">
        <div class="container">
            <div class="main-title">
                <h3 class="title">Практические задания</h3>
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
                                    <img src="{{asset('img/practic2.jpg')}}" alt="">
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <p class="slick-text">
                                    Эта секция курса предназначена для закрепления теоретического материала, даного в лекциях на реальных задачах. К каждой теме лекции присутсвуют свою практические задания для лучшего освоения темы.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="lections wow zoomInLeft">
                        <h3>Список всех практических заданий</h3>
                        <ol class="rounded">
                            <li><a href="#">Практическое задание к лекции 1</a></li>
                            <li><a href="#">Практическое задание к лекции 2</a></li>
                            <li><a href="#">Практическое задание к лекции 3</a></li>
                            <li><a href="#">Практическое задание к лекции 4</a></li>
                            <li><a href="#">Практическое задание к лекции 5</a></li>
                            <li><a href="#">Практическое задание к лекции 6</a></li>
                            <li><a href="#">Практическое задание к лекции 7</a></li>
                            <li><a href="#">Практическое задание к лекции 8</a></li>
                            <li><a href="#">Практическое задание к лекции 9</a></li>
                            <li><a href="#">Практическое задание к лекции 10</a></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection