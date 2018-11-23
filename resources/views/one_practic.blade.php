@extends('layouts.main')

@section('content')
    <section class="p-practic">
        <div class="container">
            <div class="main-title">
                <h3 class="title">{{$practic->title}}</h3>
                <hr class="deliver">
            </div>
            <div class="row">
                <div class="col-sm-3">
                    @include('left-menu')
                </div>
                <div class="col-sm-9">
                    <div class="p-practic-content">
                        {!! $practic->text !!}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection