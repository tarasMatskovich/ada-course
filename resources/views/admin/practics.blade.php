@extends('layouts.main')

@push('scripts')
    <script>
        var columns = {!! $columnsJSON !!};
        var data = {!! $data !!};
        $('.lections-table').DataTable({
            columns:columns,
            data:data,
            "oLanguage": {
                "sProcessing":   "Подождите...",
                "sLengthMenu":   "Показать _MENU_ записей",
                "sZeroRecords":  "Записи отсутствуют.",
                "sInfo":         "Записи с _START_ до _END_ из _TOTAL_ записей",
                "sInfoEmpty":    "Записи с 0 до 0 из 0 записей",
                "sInfoFiltered": "(отфильтровано из _MAX_ записей)",
                "sInfoPostFix":  "",
                "sSearch":       "Поиск:",
                "sUrl":          "",
                "oPaginate": {
                    "sFirst": "Первая",
                    "sPrevious": "Предыдущая",
                    "sNext": "Следующая",
                    "sLast": "Последняя"
                }
            }
        });
    </script>
@endpush


@section('content')
    @include('messages')
    <section class="admin-lections">
        <div class="container">
            <h3 class="title">
                Практические задания
            </h3>
            <hr class="deliver">
            <a href="{{route('admin.practics.create')}}" class="add-lection btn btn-outline-primary">Добавить практическое задание</a>
            <table class="table table-striped table-bordered lections-table">
                <thead>
                <tr>
                    @foreach($columns as $column)
                        <th scope="col">{{$column['title']}}</th>
                    @endforeach
                </tr>
                </thead>
            </table>
        </div>
    </section>
@endsection