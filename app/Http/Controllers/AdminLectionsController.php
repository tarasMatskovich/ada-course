<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lection;

class AdminLectionsController extends Controller
{
    public function index()
    {
        $lections = Lection::all();
        $lectionsArray = [];
        foreach ($lections as $lection) {
            $lectionsArray[] = [
                'actions' => '<a href="#" class="slick-link"><i class="fas fa-edit"></i></a>&nbsp;<a href="#" class="slick-link"><i class="fas fa-trash-alt"></i></a>',
                'title' => $lection->title
            ];
        }
        $columns = config('columns')['lections'];
        return view('admin.lections', [
            'columns' => $columns,
            'columnsJSON' => json_encode($columns),
            'data' => json_encode($lectionsArray),
        ]);
    }

    public function create()
    {
        return view('admin.lections_create');
    }
}
