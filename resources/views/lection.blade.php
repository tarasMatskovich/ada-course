@extends('layouts.main')

@section('content')
    <section class="p-lection">
        <div class="container">
            <div class="main-title">
                <h3 class="title">{{$lection->title}}</h3>
                <hr class="deliver">
            </div>
            <div class="row">
                <div class="col-sm-3">
                    @include('left-menu')
                </div>
                <div class="col-sm-9">
                    <div class="p-lection-content">
                        {!! $lection->text !!}
                    </div>
                    <div class="related">
                        <hr>
                        <h5 class="slick-text">Доступные практические задание к данной лекции:</h5>
                        <div class="practics">
                            @if($lection->practics && !$lection->practics->isEmpty())
                                @foreach($lection->practics as $practic)
                                    <a href="{{route('practic', ['id'=>$practic->id])}}" class="btn btn-outline-primary">{{$practic->title}}</a>
                                @endforeach
                            @else
                                <p>Практических заданий к этой лекции нет.</p>
                            @endif
                        </div>
                        <h5 class="slick-text">Доступные тесты к данной лекции:</h5>
                        <div class="practics">
                            @if($lection->tests && !$lection->tests->isEmpty())
                                @foreach($lection->tests as $test)
                                    <a href="{{route('test', ['id'=>$test->id])}}" class="btn btn-outline-primary">{{$test->title}}</a>
                                @endforeach
                            @else
                                <p>Тестов к этой лекции нет.</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection