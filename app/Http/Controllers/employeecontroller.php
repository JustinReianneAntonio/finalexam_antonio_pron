<?php

namespace App\Http\Controllers;
use Illuminate\Support\Fascades\DB;
use Response;
use Illuminate\Http\Request;
use App\Models\employee;

class employeecontroller extends Controller
/**
 * tin mga ineditq 
 * index blade hindi ko mapagana employees
 * migrations check mo comment don
 */
{
    public function index()
    {   
        return view ('employee.index');
    }


    public function create()
    {
        return view ('employee.create');
    }
        public function store(Request $request)
    {
        $employee = new employee;
        $employee->name = $request->name;
        $employee->email = $request->email;
        $employee->phone = $request->phone;
        $employee->save();
        return redirect()->route('employee.index');
    }

    public function edit( int $id)
    {
        $employee = employee::find($id);
        return view('employee.edit', compact('employee'));
    }

    public function update(Request $request, int $id) {
        $employee = employee::find($id);
        $employee->name = $request->name;
        $employee->email = $request->email;
        $employee->phone = $request->phone;
        $employee->save();
        return redirect()->route('employee.index');
    }

    public function destroy(int $id){  
        $employee = employee::find($id);
        $employee->delete();
        return redirect()->route('employee.index');
    }
}