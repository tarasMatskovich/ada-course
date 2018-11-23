<?php

namespace App\Http\Controllers;

use App\Test;
use App\TestVisit;
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
        dd($request->all());
    }
}
