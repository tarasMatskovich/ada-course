<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PracticController extends Controller
{
    public function index()
    {
        return view('practic');
    }
}
