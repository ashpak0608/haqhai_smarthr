<?php

namespace App\Http\Controllers;

use App\Models\State;
use Illuminate\Http\Request;

class StateController extends Controller
{
    public function index(Request $request)
    {
        $params = [
            'search' => $request->search,
            'limit' => 10
        ];
        $data['lists'] = State::getList($params);
        $data['title'] = "States List";
        
        if ($request->ajax()) {
            return view('state.list_partial', $data)->render();
        }
        return view('state.index', $data);
    }

    public function add($id = null)
    {
        $data['singleData'] = $id ? State::find($id) : null;
        $data['id'] = $id;
        return view('state.add', $data);
    }

    public function save(Request $request)
    {
        $request->validate(['state_name' => 'required|max:255']);
        $obj = new State();
        $result = $obj->saveData($request->all());
        return response()->json($result);
    }

    public function view($id)
    {
        $data['viewData'] = State::findOrFail($id);
        return view('state.view', $data);
    }

    public function destroy($id)
    {
        State::find($id)->delete(); // Soft Delete
        return response()->json(['status' => 'success', 'message' => 'State moved to trash!']);
    }
}