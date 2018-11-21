@extends('layouts.main')

@push('scripts')
    <script>
        var editor = CKEDITOR.replace( 'text',{
            filebrowserBrowseUrl : '/elfinder/ckeditor',
            height: '700px'
        } );
    </script>
@endpush

@section('content')
    @include('messages')
    <section class="create-lection">
        <div class="container">
            <h3 class="title">Добавление нового практического задания</h3>
            <hr class="deliver">
            <form action="{{route('admin.practics.store')}}" method="POST" class="create-lection-form" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="lectionTitle">Введите название темы практического задания</label>
                    <input type="text" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" value="{{old('title')}}" placeholder="Тема практического задания" name="title" id="lectionTitle">
                </div>
                <div class="form-group">
                    <label for="lectionText">Введите содержание практического задания</label>
                    <textarea name="text" id="lectionText" rows="50" class="form-control{{ $errors->has('text') ? ' is-invalid' : '' }}">{{old('text')}}</textarea>
                </div>
                <button class="btn btn-success">Сохранить</button>
            </form>
        </div>
    </section>
@endsection