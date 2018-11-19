<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LectionsController extends Controller
{
    public function index()
    {
        return view('lections');
    }
}
