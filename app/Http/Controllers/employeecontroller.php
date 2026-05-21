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
        $employees = employee::all();
        return view ('employee.index', compact('employees'));
    }


    public function create()
    {
<<<<<<< HEAD
        $employees = employee::all();
        return view('employee.create', compact('employees'));
=======
        return view ('employee.create');
>>>>>>> 1a0f9ecf28b5b082dd28967d62bca9575d315c08
    }
        public function store(Request $request)
    {
<<<<<<< HEAD
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'middle_name' => 'required',
            'address' => 'required',
            'date_of_birth' => 'required|date',
        ]);

        employee::create($request->all());

        return redirect()->route('employee.index')
                         ->with('success', 'Employee created successfully.');
=======
        $employee = new employee;
        $employee->name = $request->name;
        $employee->email = $request->email;
        $employee->phone = $request->phone;
        $employee->save();
        return redirect()->route('employee.index');
>>>>>>> 1a0f9ecf28b5b082dd28967d62bca9575d315c08
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