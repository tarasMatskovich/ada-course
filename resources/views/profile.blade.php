@extends('layouts.main')

@section('content')
    <section class="profile">
        <div class="container">
            <div class="profile-title">
                <h3 class="title">Мой кабинет</h3>
                <hr class="deliver">
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            {{auth()->user()->name}}
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <p class="progress-text slick-text mini">
                                        Прогресс в процентах прохождения Лекций
                                    </p>
                                </div>
                                <div class="col-md-6">
                                    <div class="ldBar label-center" data-value="{{$lectionProgress}}" data-preset="circle" data-stroke="data:ldbar/res,gradient(0,1,#3E9DA6,#74C8D0)"></div>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-6">
                                    <p class="progress-text slick-text mini">
                                        Прогресс в процентах прохождения Практики
                                    </p>
                                </div>
                                <div class="col-md-6">
                                    <div class="ldBar label-center" data-value="{{$practicsProgress}}" data-preset="circle" data-stroke="data:ldbar/res,gradient(0,1,#3E9DA6,#74C8D0)"></div>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-6">
                                    <p class="progress-text slick-text mini">
                                        Прогресс в процентах прохождения Тестов
                                    </p>
                                </div>
                                <div class="col-md-6">
                                    <div class="ldBar label-center" data-value="{{$testsProgress}}" data-preset="circle" data-stroke="data:ldbar/res,gradient(0,1,#3E9DA6,#74C8D0)"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="test-progress">
                        <h3>Отслеживание прогресса в тестах</h3>
                        <div class="accordeon">
                            <div class="container-accordeon">
                                <div class="accordion">
                                    <dl>
                                        @foreach($tests as $test)
                                        <dt>
                                            <a href="#accordion1" aria-expanded="false" aria-controls="accordion1" class="accordion-title accordionTitle js-accordionTrigger {{($test['try']) ? "completed" : ""}}">{{$test['test']->title}}</a>
                                        </dt>
                                        <dd class="accordion-content accordionItem is-collapsed" id="accordion1" aria-hidden="true">
                                            @if ($test['try'])
                                                @if($test['test']->lection)
                                                    <p>Тема лекции: {{$test['test']->lection->title}}</p>
                                                @endif
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <p class="text">
                                                            Ваша общая оценка за этот тест:
                                                        </p>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <p class="estimation">
                                                      <span class="estimation-value">
                                                        {{$test['try']->estimation}}
                                                      </span>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <p class="text-danger">
                                                            В этом тесте вы ответили неправильно на такие вопросы:
                                                        </p>
                                                        <div class="answers">
                                                            @foreach($test['try']->history()->where(['correct' => false])->get() as $result)
                                                                <div class="answer">
                                                                    <p class="test-title text-danger">
                                                                        {{$result->question->question}}
                                                                    </p>
                                                                    <div class="test-content">
                                                                        @if($result->question->answers && !$result->question->answers->isEmpty())
                                                                            @foreach($result->question->answers as $answer)
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input" name="question-{{$result->question->id}}" type="radio" value="{{$answer->id}}" {{($answer->id == $result->user_answer_id) ? "checked" : ""}}>
                                                                                    <label class="form-check-label {{($answer->id == $result->user_answer_id) ? "text-danger" : (($answer->id == $result->question->answers()->where(['correct' => true])->first()->id) ? "text-success" : "")}}" >
                                                                                        {{$answer->answer}}
                                                                                    </label>
                                                                                </div>
                                                                            @endforeach
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                </div>
                                            @else
                                                <p>Вы ещё не проходили данный тест</p>
                                            @endif
                                        </dd>
                                        @endforeach
                                    </dl>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection