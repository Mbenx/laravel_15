<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Position;
use App\Models\Employee;

class EmployeeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        // $employee = Employee::all();
        $employee = Employee::paginate(4);

        return view('employee.home',[
            'data' => $employee
        ]);
    }

    public function create()
    {
        $position = Position::all();
        return view('employee.create',[
            'position' => $position
        ]);
    }

    public function store(Request $request)
    {
        Employee::create([
            'name' => $request->name,
            'alamat' => $request->alamat,
            'email' => $request->email,
            'phone' => $request->phone,
            'position_id' => $request->position_id,
        ]);
        return redirect('/employee');
    }

    public function show($id)
    {
        $employee = Employee::find($id);
        return view('employee.show',[
            'data' => $employee
        ]);
    }

    public function edit($id)
    {
        $employee = Employee::find($id);
        $position = Position::all();
        return view('employee.edit',[
            'data' => $employee,
            'position' => $position
        ]);
    }

    public function update(Request $request)
    {
        Employee::where('id', '=',$request->id)
            ->update([
                'name' => $request->name,
                'alamat' => $request->alamat,
                'email' => $request->email,
                'phone' => $request->phone,
                'position_id' => $request->position_id,
            ]);
        return redirect('/employee');
    }

    public function destroy($id)
    {
        $data = Employee::find($id);
        $data->delete();
        return redirect('/employee');
    }
}
