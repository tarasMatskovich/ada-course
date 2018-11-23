<?php

namespace App\Http\Controllers;

use App\Role;
use App\Test;
use App\TestTry;
use App\TestVisit;
use App\TryHistory;
use Illuminate\Http\Request;

class TestsController extends Controller
{
    public function index()
    {
        $tests = Test::get();
        return view('tests', [
            'tests' => $tests
        ]);
    }

    public function show(Request $request, $id)
    {
        $test = Test::with('questions')->with('questions.answers')->findOrFail($id);

        return view('test', [
            'test' => $test
        ]);
    }

    public function check(Request $request, $id)
    {
        $test = Test::with('questions')->with('questions.answers')->findOrFail($id);


        if (!auth()->user()->visitedTests()->where(['test_id' => $test->id])->first()) {
            $testVisit = new TestVisit();
            $testVisit->test_id = $test->id;
            auth()->user()->visitedTests()->save($testVisit);
        }

        // проверяем правильность теста
        $data = $request->except('_token');
        $countOfCorrectAnswers = 0;
        $totalCountOfQuestions = $test->questions->count();
        $answersArray = array();
        foreach ($data as $questionFromRequest => $answer_id) {
            $question_id = explode('-', $questionFromRequest)[1];
            $correctAnswer = $test->questions()->find($question_id)->answers()->where(['correct' => true])->first();
            $correct = false;
            if ($correctAnswer->id == $answer_id) {
                $countOfCorrectAnswers++;
                $correct = true;
            }
            $answer = new TryHistory();
            $answer->question_id = $question_id;
            $answer->user_answer_id = $answer_id;
            $answer->correct = $correct;
            $answersArray[] = $answer;
        }
        $estimation = 0;

        if ($totalCountOfQuestions) {
            $estimation = ($countOfCorrectAnswers / $totalCountOfQuestions) * Test::MAX_ESTIMATION;
        }

        $testTry = new TestTry();
        $testTry->test_id = $test->id;
        $testTry->estimation = $estimation;
        $userTry = auth()->user()->testTries()->save($testTry);
        $userHistory = $userTry->history()->saveMany($answersArray);

        return view('test_congratulation', [
            'test' => $test,
            'estimation' => $estimation,
            'results' => $userHistory,
            'correctAnswers' => $countOfCorrectAnswers,
            'total' => $totalCountOfQuestions
        ]);
    }
}
