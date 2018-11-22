@extends('layouts.main')

@push('scripts')
    <script>
        var totalCount = 0;
        var testData = {};
        var getQuestionTemplateRoute = "{!! $getQuestionTemplateRoute !!}";
        var getAnswerTemplateRoute = "{!! $getAnswerTemplateRoute !!}";
        var redirectRoute =  "{!! $redirectRoute !!}";
        var createTestRoute = "{!! $createTestRoute !!}";
        $("#add-question").on('click', function () {
            axios.get(getQuestionTemplateRoute).then(function (res) {
                $(".questions").append(res.data.data);
                totalCount++;
                $("#counter").html(totalCount);
            });
        });

        $(document).on('click', ".add-answer", function () {
            var parent = ($(this).parent());
            var answer = parent.find(".answer-input");
            if (answer.val()) {
                axios.get(getAnswerTemplateRoute, {
                    params: {
                        answer: answer.val()
                    }
                }).then(function (res) {
                    parent.prepend(res.data.data);
                    answer.val("");
                });
            } else {
                alert("Заполните поле Текст Ответа");
            }
        });

        function getTestData()
        {
            var errors = [];
            if (totalCount > 0) {
                var testTitle = ($("#lectionTitle"));
                var test = {};
                if (testTitle.val()) {
                    test.title = testTitle.val();
                    test.questions = [];
                    var questions = $(".questions .question");
                    questions.each(function (i, question) {
                        var questionTitle = $(question).find("input[name='questions[]']");
                        var answersJQ = $(question).find(".answer input[type='checkbox']");
                        var correctAnswer = $(question).find(".answer input[type='checkbox']:checked");
                        var correctAnswerIsExist = correctAnswer.length;
                        if (questionTitle.val()) {
                            // checking for existing a correct answer in question
                            if (correctAnswerIsExist) {
                                var answers = [];
                                answersJQ.each(function (i, answer) {
                                    answers.unshift({
                                        answer: $(answer).val(),
                                        correct: $(answer).prop('checked')
                                    });
                                });
                                // new qestion in test
                                test.questions.push({
                                    title: questionTitle.val(),
                                    answers: answers
                                });
                            } else {
                                var error ="Выберите правильный ответ";
                                errors.push(error);
                                alert(error);
                            }
                        } else {
                            var error ="Заполните поле Текст вопроса";
                            errors.push(error);
                            alert(error);
                        }
                    });
                    if (errors.length === 0) {
                        // test is completed
                        console.log(test);
                        console.log("AJAX");
                        axios.post(createTestRoute, {params: {test:test}}).then(function (res) {
                            location=redirectRoute;
                        });
                    }
                } else {
                    var error = 'Заполните поле Название Теста';
                    errors.push(error);
                    alert(error);
                }
            } else {
                var error = "Добавте в тест хотя бы один вопрос";
                errors.push(error);
                alert(error);
            }
        }


        // TODO Сделать нормальное отображение ошибок
        $(document).on('click', "#add-test", function (e) {
            getTestData();
        });

        $(document).on('click', ".delete-question", function () {
            var question = $(this).parent().parent().parent();
            $(question).fadeOut(300, function () {
                $(question).remove();
                totalCount--;
                $("#counter").html(totalCount);
            });
        });

    </script>
@endpush

@section('content')
    @include('messages')
    <section class="create-lection">
        <div class="container">
            <h3 class="title">Добавление нового теста</h3>
            <hr class="deliver">
            <form action="{{route('admin.tests.store')}}" method="POST" class="create-lection-form" enctype="multipart/form-data" id="test-form">
                @csrf
                <div class="form-group">
                    <label for="lectionTitle">Введите название теста</label>
                    <input required type="text" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" value="{{old('title')}}" placeholder="Название теста" name="title" id="lectionTitle">
                </div>
                <p>
                    Вопросов: <span class="slick-text" id="counter">0</span>
                </p>
                <div class="questions">

                </div>
                <button id="add-question" type="button" class="btn btn-outline-primary">Добавить вопрос</button>

                <div class="row">
                    <div class="col">
                        <button type="button" class="btn btn-success" id="add-test">Додати тест</button>
                    </div>
                </div>
            </form>
        </div>
    </section>
@endsection