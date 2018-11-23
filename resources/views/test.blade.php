@extends('layouts.main')

@push('scripts')
    <script>
        $("#check-test-form").on('submit', function (e) {
            var questions = $(".test-question");
            questions.each(function (i, question) {
               var correctAnswer = $(question).find("input[type='checkbox']:checked");
               if (!correctAnswer.length) {
                   alert('Выберите правильный ответ в одном з вопросов!');
                   e.preventDefault();
               }
            });
        });
    </script>
@endpush

@section('content')
    <section class="p-test">
        <div class="container">
            <div class="main-title">
                <h3 class="title">{{$test->title}}</h3>
                <hr class="deliver">
            </div>
            <div class="row">
                <div class="col-sm-3">
                    @include('left-menu')
                </div>
                <div class="col-sm-9">
                    <div class="p-test-content">
                        <form action="{{route('test.check', ['id' => $test->id])}}" method="POST" id="check-test-form">
                            @csrf
                            <div class="test-questions">
                                @if($test->questions && !$test->questions->isEmpty())
                                    @foreach($test->questions as $question)
                                        <div class="test-question">
                                            <p class="question-title">
                                                {{$question->question}}
                                            </p>
                                            <div class="test-question-answers">
                                                @if($question->answers && !$question->answers->isEmpty())
                                                    @foreach($question->answers as $answer)
                                                        <div class="answer">
                                                            <div class="form-check">
                                                                <input class="form-check-input" name="question-{{$question->id}}" type="checkbox" value="{{$answer->id}}">
                                                                <label class="form-check-label" >
                                                                    {{$answer->answer}}
                                                                </label>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                @else
                                                    <p>Вопрос пока не имеет ответов.</p>
                                                @endif
                                            </div>
                                        </div>
                                    @endforeach
                                @else
                                    <p>У теста пока нет вопросов.</p>
                                @endif
                            </div>
                            <button class="btn btn-success check" >Отправить тест на проверку</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection