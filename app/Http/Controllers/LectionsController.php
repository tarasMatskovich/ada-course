<?php

namespace App\Http\Controllers;

use App\Lection;
use App\LectionVisit;
use Illuminate\Http\Request;

class LectionsController extends Controller
{
    public function index()
    {
        $lections = Lection::get();
        return view('lections', [
            'lections' => $lections
        ]);
    }

    public function show(Request $request, $id)
    {
        $lection = Lection::findOrFail($id);

        if (!auth()->user()->visitedLections()->where(['lection_id' => $lection->id])->first()) {
            $lectionVisit = new LectionVisit();
            $lectionVisit->lection_id = $lection->id;
            auth()->user()->visitedLections()->save($lectionVisit);
        }

        return view('lection', [
            'lection' => $lection
        ]);
    }
}
