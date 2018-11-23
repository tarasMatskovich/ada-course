<?php

namespace App\Http\Controllers;

use App\Lection;
use App\Practic;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $query = $request->input('query');
        $lections = Lection::where('title', 'like', "%$query%")->orWhere('text', 'like', "%$query%")->get();
        $practics = Practic::where('title', 'like', "%$query%")->orWhere('text', 'like', "%$query%")->get();

        return view('search', [
            'lections' => $lections,
            'practics' => $practics,
            'query' => $query
        ]);
    }
}
