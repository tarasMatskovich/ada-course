<?php

namespace App\Http\Controllers;

use App\Answer;
use App\Lection;
use App\Question;
use App\Test;
use Illuminate\Http\Request;

class AdminTestsController extends Controller
{
    public function index()
    {
        $tests = Test::with('questions')->with('questions.answers')->get();

        $testsArray = [];
        foreach ($tests as $test) {
            $testsArray[] = [
                'actions' => '<a href="#" class="slick-link" onclick=" var id = ' . $test->id . '; event.preventDefault(); document.getElementById(\'delete-form-\' + id).submit();"><i class="fas fa-trash-alt"></i></a><form id="delete-form-' . $test->id . '" style="display: none;" action="' . route('admin.tests.delete', ['id' => $test->id]) . '" method="POST">' . csrf_field() . '<input type="hidden" name="_method" value="DELETE"></form>',
                'title' => $test->title
            ];
        }
        $columns = config('columns')['tests'];
        return view('admin.tests', [
            'columns' => $columns,
            'columnsJSON' => json_encode($columns),
            'data' => json_encode($testsArray),
        ]);
    }

    public function create()
    {
        $lections = Lection::all();
        return view('admin.tests_create', [
            'getQuestionTemplateRoute' => route('admin.tests.getQuestionTemplate'),
            'getAnswerTemplateRoute' => route('admin.tests.getAnswerTemplate'),
            'redirectRoute' => route('admin.tests'),
            'createTestRoute' => route('admin.tests.store'),
            'lections' => $lections
        ]);
    }

    public function store(Request $request)
    {
        $testData = $request->params['test'];
        $test = new Test();
        $test->title = $testData['title'];
        $test->lection_id = $testData['lection_id'];
        $test->save();
        foreach ($testData['questions'] as $question) {
            $quest = new Question();
            $quest->question = $question['title'];
            $test->questions()->save($quest);
            foreach ($question['answers'] as $answer) {
                $ans = new Answer();
                $ans->answer = $answer['answer'];
                $ans->correct = $answer['correct'];
                $quest->answers()->save($ans);
            }

        }

        return response([
            'stutus' => 'success'
        ]);
    }

    public function delete(Request $request, $id)
    {
        $test = Test::with("questions")->with('questions.answers')->findOrFail($id);

        if ($test->questions && !$test->questions->isEmpty()) {
            foreach ($test->questions as $question) {
                if ($question->answers && !$question->answers->isEmpty()) {
                    foreach ($question->answers as $answer) {
                        $answer->delete();
                    }
                }
                $question->delete();
            }
        }
        $test->delete();
        // TODO Сделать удаление пользовательской статистики при удалени теста

        return redirect()->route('admin.tests')->with([
            'success' => "Тест " . $test->title . " был успешно удален"
        ]);
    }


    public function getQuestionTemplate()
    {
        $questionTemplate = view('admin.question_template')->render();
        return response([
            'data' => $questionTemplate
        ]);
    }

    public function getAnswerTemplate(Request $request)
    {
        $answerTemplate = view('admin.answer_template', [
            'answer' => $request->answer
        ])->render();
        return response([
            'data' => $answerTemplate
        ]);
    }
}
