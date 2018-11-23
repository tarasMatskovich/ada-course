<?php

namespace App\Http\Controllers;

use App\Practic;
use App\PracticVisit;
use Illuminate\Http\Request;

class PracticController extends Controller
{
    public function index()
    {
        $practics = Practic::get();
        return view('practic', [
            'practics' => $practics
        ]);
    }

    public function show(Request $request, $id)
    {
        $practic = Practic::findOrFail($id);

        if (!auth()->user()->visitedPractics()->where(['practic_id' => $practic->id])->first()) {
            $practicVisit = new PracticVisit();
            $practicVisit->practic_id = $practic->id;
            auth()->user()->visitedPractics()->save($practicVisit);
        }

        return view('one_practic', [
            'practic' => $practic
        ]);
    }
}
