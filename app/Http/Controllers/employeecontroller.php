<?php

namespace App\Http\Controllers;
use Illuminate\Support\Fascades\DB;
use Response;
use Illuminate\Http\Request;
use App\Models\employee;

class employeecontroller extends Controller
/**
 * ano yung action sa may index blade?
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
            'dob' => 'required',
            'contact' => 'required',
        ]);

        employee::create($request->all());
        return redirect()->route('employee.index');
    }   
=======
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

>>>>>>> 56100b5a0ffb58d4a1ffff2252b72c7f01fec9d3
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