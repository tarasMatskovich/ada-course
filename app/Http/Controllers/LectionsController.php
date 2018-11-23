<?php

namespace App\Http\Controllers;

use App\Lection;
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

        return view('lection', [
            'lection' => $lection
        ]);
    }
}
