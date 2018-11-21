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
        <h3 class="title">Добавление новой лекции</h3>
        <hr class="deliver">
        <form action="{{route('admin.lections.store')}}" method="POST" class="create-lection-form" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="lectionTitle">Введите название темы лекции</label>
                <input type="text" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" value="{{old('title')}}" placeholder="Тема лекции" name="title" id="lectionTitle">
            </div>
            <div class="form-group">
                <label for="lectionText">Введите содержание лекции</label>
                <textarea name="text" id="lectionText" rows="50" class="form-control{{ $errors->has('text') ? ' is-invalid' : '' }}">{{old('text')}}</textarea>
            </div>
            <button class="btn btn-success">Сохранить</button>
        </form>
    </div>
</section>
@endsection