<?php

namespace App\Http\Controllers;

use App\Practic;
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

        return view('one_practic', [
            'practic' => $practic
        ]);
    }
}
