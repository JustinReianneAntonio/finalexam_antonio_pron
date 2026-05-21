<?php

namespace App\Http\Controllers;
use Illuminate\Support\Fascades\DB;
use Response;
use Illuminate\Http\Request;
use App\Models\employee;

class employeecontroller extends Controller
{
    public function index()
    {   
        $employees = employee::all();
        return view ('employee.index', compact('employees'));
    }


    public function create()
    {
        $employees = employee::all();
        return view('employee.create', compact('employees'));
    }


    public function store(Request $request)
    {
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
    }

    public function edit( int $id)
    {
        //
    }

    public function update(Request $request, int $id) {
        //
    }

    public function destroy(int $id){
      //
    }
}
