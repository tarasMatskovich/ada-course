@extends('layouts.main')

@section('content')
    <section class="test-congratulation">
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
                    <h4 class="congrat-title">
                        Поздравляем, вы прошли тест, вот ваши результаты:
                    </h4>
                    <p class="slick-text">Правильных ответов: {{$correctAnswers}} из {{$total}}</p>
                    <div class="results test-questions">
                        @foreach($results as $result)
                            @if($result->correct)
                                <div class="test-question">
                                    <p class="question-title text-success">
                                        {{$result->question->question}}
                                    </p>
                                    <div class="test-question-answers">
                                        @if($result->question->answers && !$result->question->answers->isEmpty())
                                            @foreach($result->question->answers as $answer)
                                                <div class="answer">
                                                    <div class="form-check">
                                                        <input class="form-check-input" name="question-{{$result->question->id}}" type="radio" value="{{$answer->id}}" {{($answer->id == $result->user_answer_id) ? "checked" : ""}}>
                                                        <label class="form-check-label {{($answer->id == $result->user_answer_id) ? "text-success" : ""}}" >
                                                            {{$answer->answer}}
                                                        </label>
                                                    </div>
                                                </div>
                                            @endforeach
                                        @endif
                                    </div>
                                </div>
                            @else
                                <div class="test-question">
                                    <p class="question-title text-danger">
                                        {{$result->question->question}}
                                    </p>
                                    <div class="test-question-answers">
                                        @if($result->question->answers && !$result->question->answers->isEmpty())
                                            @foreach($result->question->answers as $answer)
                                                <div class="answer">
                                                    <div class="form-check">
                                                        <input class="form-check-input" name="question-{{$result->question->id}}" type="radio" value="{{$answer->id}}" {{($answer->id == $result->user_answer_id) ? "checked" : ""}}>
                                                        <label class="form-check-label {{($answer->id == $result->user_answer_id) ? "text-danger" : (($answer->id == $result->question->answers()->where(['correct' => true])->first()->id) ? "text-success" : "")}}" >
                                                            {{$answer->answer}}
                                                        </label>
                                                    </div>
                                                </div>
                                            @endforeach
                                        @endif
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                    <div class="estimation-wrapper">
                        <span>
                            Ваша оценка за тест становит:
                        </span>
                        <div class="estimation {{($estimation <= 3) ? "bad" : ($estimation <= 4) ? "norm" : ($estimation <= 5) ? "good" : ""}}">
                            {{$estimation}}
                        </div>
                    </div>
                    <div class="again">
                        <a href="{{route('test', ['id' => $test->id])}}" class="btn btn-outline-primary">Пройти тест еще раз</a>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection