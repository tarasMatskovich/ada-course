@extends('layouts.main')

@section('content')
    <section class="search">
        <div class="container">
            <div class="main-title">
                <h3 class="title">Результаты поиска для запроса: {{$query}}</h3>
                <hr class="deliver">
            </div>
            <div class="search-results">
               <div class="link">
                   <a href="{{route('lections.list')}}" class="slick-link">Лекции:</a>
               </div>
               <div class="results">
                   <ul class="list-group">
                       @if(!$lections->isEmpty())
                           @foreach($lections as $lection)
                               <li class="list-group-item">
                                   <a href="{{route('lection', ['id' => $lection->id])}}" class="slick-link">{{$lection->title}}</a>
                                   <p class="desc">
                                       {!!  str_limit($lection->text, 500)!!}
                                   </p>
                               </li>
                           @endforeach
                       @else
                            <p>Посик не дал результатов</p>
                       @endif
                   </ul>
               </div>

                <div class="link">
                    <a href="{{route('practic.list')}}" class="slick-link">Практические задания:</a>
                </div>
                <div class="results">
                    <ul class="list-group">
                        @if(!$practics->isEmpty())
                            @foreach($practics as $practic)
                                <li class="list-group-item">
                                    <a href="{{route('practic', ['id' => $practic->id])}}" class="slick-link">{{$practic->title}}</a>
                                    <p class="desc">
                                        {!!  str_limit($practic->text, 500)!!}
                                    </p>
                                </li>
                            @endforeach
                        @else
                            <p>Посик не дал результатов</p>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </section>
@endsection