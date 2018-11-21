@extends('layouts.main')

@push('scripts')
    <script>
        var editor = CKEDITOR.replace( 'text',{
            filebrowserBrowseUrl : '/elfinder/ckeditor'
        } );
    </script>
@endpush

@section('content')
    @include('messages')
    <section class="create-lection">
        <div class="container">
            <h3 class="title">Редактирование лекции</h3>
            <hr class="deliver">
            <form action="{{route('admin.lections.update', ['id' => $lection->id])}}" method="POST" class="create-lection-form" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="lectionTitle">Введите название темы лекции</label>
                    <input type="text" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" value="{{old('title') ? old('title') : $lection->title}}" placeholder="Тема лекции" name="title" id="lectionTitle">
                </div>
                <div class="form-group">
                    <label for="lectionText">Введите содержание лекции</label>
                    <textarea name="text" id="lectionText" rows="70" class="form-control{{ $errors->has('text') ? ' is-invalid' : '' }}">{{old('text') ? old('text') : $lection->text}}</textarea>
                </div>
                <button class="btn btn-success">Редактировать</button>
            </form>
        </div>
    </section>
@endsection