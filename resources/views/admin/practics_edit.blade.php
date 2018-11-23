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
            <h3 class="title">Редактирование практического задания</h3>
            <hr class="deliver">
            <form action="{{route('admin.practics.update', ['id' => $practic->id])}}" method="POST" class="create-lection-form" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="lectionTitle">Введите название практического задания</label>
                    <input type="text" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" value="{{old('title') ? old('title') : $practic->title}}" placeholder="Тема практического задания" name="title" id="lectionTitle">
                </div>
                <div class="form-group">
                    <label for="lectionSelect">Выберите лекцию, для которй будет создано даное практическое задание:</label>
                    <select name="lection_id" id="lection" class="form-control">
                        <option value=""></option>
                        @foreach($lections as $lection)
                            <option value="{{$lection->id}}" {{$lection->id == $practic->lection_id ? "selected" : ""}}>{{$lection->title}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="lectionText">Введите содержание практического задания</label>
                    <textarea name="text" id="lectionText" rows="70" class="form-control{{ $errors->has('text') ? ' is-invalid' : '' }}">{{old('text') ? old('text') : $practic->text}}</textarea>
                </div>
                <button class="btn btn-success">Редактировать</button>
            </form>
        </div>
    </section>
@endsection