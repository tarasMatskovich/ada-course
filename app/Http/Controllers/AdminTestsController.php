<?php

namespace App\Http\Controllers;

use App\Test;
use Illuminate\Http\Request;

class AdminTestsController extends Controller
{
    public function index()
    {
        $tests = Test::all();

        foreach ($tests as $test) {
            foreach ($test->questions as $question) {
                dump($question->answers);
            }
        }
        dd(1);
    }
}
