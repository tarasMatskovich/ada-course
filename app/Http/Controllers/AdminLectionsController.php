<?php

namespace App\Http\Controllers;

use App\Http\Requests\SaveLectionRequest;
use App\Http\Requests\UpdateLectionRequest;
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
                'actions' => '<a href="' . route('admin.lections.update', ['id' => $lection->id]) . '" class="slick-link"><i class="fas fa-edit"></i></a>&nbsp;<a href="#" class="slick-link" onclick=" var id = ' . $lection->id . '; event.preventDefault(); document.getElementById(\'delete-form-\' + id).submit();"><i class="fas fa-trash-alt"></i></a><form id="delete-form-' . $lection->id . '" style="display: none;" action="' . route('admin.lections.delete', ['id' => $lection->id]) . '" method="POST">' . csrf_field() . '<input type="hidden" name="_method" value="DELETE"></form>',
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

    public function store(SaveLectionRequest $request)
    {
        $data = $request->except('_token');

        $lection = new Lection($data);

        if ($lection->save()) {
            return redirect()->route('admin.lections')->with(['success' => 'Лекция ' . $lection->title . ' была успешно добавлена']);
        } else {
            return redirect()->back()->withErrors(['При сохранении лекции произошла ошибка']);
        }
    }

    public function edit(Request $request, $id)
    {
        $lection = Lection::findOrFail($id);

        return view('admin.lections_edit', ['lection' => $lection]);
    }

    public function update(UpdateLectionRequest $request, $id)
    {
        $lection = Lection::findOrFail($id);
        $lection->fill($request->except('_token'));

        if ($lection->update()) {
            return redirect()->route('admin.lections')->with(['success' => 'Лекция ' . $lection->title . ' была успешно редактирована']);
        } else {
            return redirect()->back()->withErrors(['При редактировании лекции произошла ошибка']);
        }
    }

    public function delete(Request $request, $id)
    {
        $lection = Lection::findOrFail($id);
        if ($lection->delete()) {
            return redirect()->route('admin.lections')->with(['success' => 'Лекция ' . $lection->title . ' была успешно удалена']);
        } else {
            return redirect()->back()->withErrors(['При удалении лекции произошла ошибка']);
        }
    }
}
