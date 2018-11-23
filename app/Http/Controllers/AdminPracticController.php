<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePracticRequest;
use App\Http\Requests\UpdatePracticRequest;
use App\Lection;
use Illuminate\Http\Request;

use App\Practic;

class AdminPracticController extends Controller
{
    public function index()
    {
        $practics = Practic::all();
        $practicsArray = [];
        foreach ($practics as $practic) {
            $practicsArray[] = [
                'actions' => '<a href="' . route('admin.practics.update', ['id' => $practic->id]) . '" class="slick-link"><i class="fas fa-edit"></i></a>&nbsp;<a href="#" class="slick-link" onclick=" var id = ' . $practic->id . '; event.preventDefault(); document.getElementById(\'delete-form-\' + id).submit();"><i class="fas fa-trash-alt"></i></a><form id="delete-form-' . $practic->id . '" style="display: none;" action="' . route('admin.practics.delete', ['id' => $practic->id]) . '" method="POST">' . csrf_field() . '<input type="hidden" name="_method" value="DELETE"></form>',
                'title' => $practic->title
            ];
        }
        $columns = config('columns')['practics'];
        return view('admin.practics', [
            'columns' => $columns,
            'columnsJSON' => json_encode($columns),
            'data' => json_encode($practicsArray),
        ]);
    }

    public function create()
    {
        $lections = Lection::all();
        return view('admin.practics_create', [
            'lections' => $lections
        ]);
    }

    public function store(StorePracticRequest $request)
    {
        $data = $request->except('_token');

        $practic = new Practic($data);
        $practic->lection_id = $data['lection_id'];

        if ($practic->save()) {
            return redirect()->route('admin.practics')->with(['success' => 'Практика ' . $practic->title . ' была успешно добавлена']);
        } else {
            return redirect()->back()->withErrors(['При сохранении практики произошла ошибка']);
        }
    }

    public function edit(Request $request, $id)
    {
        $practic = Practic::findOrFail($id);
        $lections = Lection::all();

        return view('admin.practics_edit', [
            'practic' => $practic,
            'lections' => $lections
        ]);
    }

    public function update(UpdatePracticRequest $request, $id)
    {
        $practic = Practic::findOrFail($id);
        $practic->fill($request->except('_token'));
        $practic->lection_id = $request->lection_id;

        if ($practic->update()) {
            return redirect()->route('admin.practics')->with(['success' => 'Практика ' . $practic->title . ' была успешно редактирована']);
        } else {
            return redirect()->back()->withErrors(['При редактировании практики произошла ошибка']);
        }
    }

    public function delete(Request $request, $id)
    {
        $practic = Practic::findOrFail($id);
        if ($practic->delete()) {
            return redirect()->route('admin.practics')->with(['success' => 'Практика ' . $practic->title . ' была успешно удалена']);
        } else {
            return redirect()->back()->withErrors(['При удалении практики произошла ошибка']);
        }
    }
}
