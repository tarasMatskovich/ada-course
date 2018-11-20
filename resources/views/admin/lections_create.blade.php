@extends('layouts.main')

@push('scripts')
    <script>
        CKEDITOR.replace('text');
    </script>
@endpush

@section('content')
<section class="create-lection">
    <div class="container">
        <h3 class="title">Добавление новой лекции</h3>
        <hr class="deliver">
        <form action="" method="POST" class="create-lection-form">
            <div class="form-group">
                <label for="lectionTitle">Введите название темы лекции</label>
                <input type="text" class="form-control" placeholder="Тема лекции" name="title" id="lectionTitle">
            </div>
            <div class="form-group">
                <label for="lectionText">Введите содержание лекции</label>
                <textarea name="text" id="lectionText" class="form-control"></textarea>
            </div>
            <button class="btn btn-success">Сохранить</button>
        </form>
    </div>
</section>
@endsection