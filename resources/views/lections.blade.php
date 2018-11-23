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
                        @if($lections and !$lections->isEmpty())
                            <ol class="rounded">
                                @foreach($lections as $lection)
                                    <li><a href="{{route('lection', ['id' => $lection->id])}}">{{$lection->title}}</a></li>
                                @endforeach
                            </ol>
                        @else
                            <p>Лекций пока нет на сайте.</p>
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection