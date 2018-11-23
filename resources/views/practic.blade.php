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
                        @if($practics and !$practics->isEmpty())
                            <ol class="rounded">
                                @foreach($practics as $practic)
                                    <li><a href="{{route('practic', ['id' => $practic->id])}}">{{$practic->title}}</a></li>
                                @endforeach
                            </ol>
                        @else
                            <p>Практических заданий пока нет на сайте.</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection