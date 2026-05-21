<?php

namespace App\Http\Controllers;
use Illuminate\Support\Fascades\DB;
use Response;
use Illuminate\Http\Request;
use App\Models\employee;

class employeecontroller extends Controller
/**
 * ano pa saken tin?
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

        
        return view('employee.create');

        return view ('employee.create');

    }
        public function store(Request $request)
    {
        $request->validate([
            'fname' => 'required',
            'lname' => 'required',
            'mname' => 'required',
            'address' => 'required',
            'dob' => 'required|date',
        ]);

        employee::create($request->all());

        return redirect()->route('employee.index')
                         ->with('success', 'Employee created successfully.');

=======
        return view ('employee.create');
    }
        public function store(Request $request)
    {
>>>>>>> 94919761d9c417a2dc9dcd3efb912c59f1c68d9b
        $employee = new employee;
        $employee->name = $request->name;
        $employee->email = $request->email;
        $employee->phone = $request->phone;
        $employee->save();
        return redirect()->route('employee.index');
<<<<<<< HEAD

=======
>>>>>>> 94919761d9c417a2dc9dcd3efb912c59f1c68d9b
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