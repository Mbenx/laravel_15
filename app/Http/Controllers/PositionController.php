<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;
use App\Models\Position;

class PositionController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $position = Position::all();
        return view('position.home',[
            'data' => $position
        ]);
    }

    public function create()
    {
        $department = Department::all();
        return view('position.create',[
            'department' => $department
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:50|min:5|unique:positions,name',
            'code' => 'required|max:10|min:2',
        ]);

        Position::create([
            'name' => $request->name,
            'code' => $request->code,
            'department_id' => $request->department_id,
        ]);
        return redirect('/position');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $position = Position::find($id);
        $department = Department::all();
        return view('position.edit',[
            'data' => $position,
            'department' => $department
        ]);
    }

    public function update(Request $request)
    {
        Position::where('id', '=',$request->id)
            ->update([
                'name' => $request->name,
                'code' => $request->code,
                'department_id' => $request->department_id,
            ]);
        return redirect('/position');
    }

    public function destroy($id)
    {
        $data = Position::find($id);
        $data->delete();

        return redirect('/position');
    }
}
