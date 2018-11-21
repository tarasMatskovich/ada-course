@extends('layouts.main')

@section('content')
<section class="admin">
    <div class="container">
        <h3 class="title">Администраторская панель</h3>
        <hr class="deliver">
        <p class="slick-text text-center">
            Здесь вы можете управлять контентом и содержанием курса. Можете добавить/удалить/редактировать лекции, практики и тесты.
        </p>
        <ul class="components-list">
            <li class="list-group-item">
                <a href="{{route('admin.lections')}}" class="slick-link">Лекции</a>
            </li>
            <li class="list-group-item">
                <a href="{{route('admin.practics')}}" class="slick-link">Практика</a>
            </li>
            <li class="list-group-item">
                <a href="{{route('admin.tests')}}" class="slick-link">Тесты</a>
            </li>
        </ul>
    </div>
</section>
@endsection