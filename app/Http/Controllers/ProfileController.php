<?php

namespace App\Http\Controllers;

use App\Lection;
use App\Practic;
use App\Test;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        $lectionProgress = 0;
        if (!auth()->user()->visitedLections->isEmpty()) {
            $totalLections = Lection::get(['id'])->count();
            if ($totalLections > 0) {
                $lectionProgress = round((auth()->user()->visitedLections->count() / $totalLections) * 100, 2);
            }
        }

        $practicsProgress = 0;
        if (!auth()->user()->visitedPractics->isEmpty()) {
            $totalPractics = Practic::get(['id'])->count();
            if ($totalPractics > 0) {
                $practicsProgress = round((auth()->user()->visitedPractics->count() / $totalPractics) * 100, 2);
            }
        }

        $testsProgress = 0;
        if (!auth()->user()->visitedTests->isEmpty()) {
            $totalTests = Test::get(['id'])->count();
            if ($totalTests > 0) {
                $testsProgress = round((auth()->user()->visitedTests->count() / $totalTests) * 100, 2);
            }
        }

        $testsCollection = Test::all();
        $tests = array();

        foreach($testsCollection as $test) {
            $try = $test->try()->where(['user_id' => auth()->id()])->orderBy('created_at','desc')->first();
            $tests[] = [
                'test' => $test,
                'try' => $try
            ];
        }

        return view('profile', [
            'lectionProgress' => $lectionProgress,
            'practicsProgress' => $practicsProgress,
            'testsProgress' => $testsProgress,
            'tests' => $tests
        ]);
    }
}
