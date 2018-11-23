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
                </div>
            </div>
        </div>
    </section>
@endsection