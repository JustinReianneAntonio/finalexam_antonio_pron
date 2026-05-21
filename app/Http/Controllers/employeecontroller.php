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

        public function show(int $id)
        {
            $employee = employee::find($id);
            return view('employee.show', compact('employee'));
        }

    public function edit( int $id)
    {
        $employee = employee::find($id);
        return view('employee.edit', compact('employee'));
    }

    public function update(Request $request, int $id) {
        $employee = employee::find($id);
        $employee->fname = $request->fname;
        $employee->lname = $request->lname;
        $employee->mname = $request->mname;
        $employee->address = $request->address;
        $employee->dob = $request->dob;
        $employee->contact = $request->contact;
        $employee->save();
        return redirect()->route('employee.index');
    }

    public function destroy(int $id){  
        $employee = employee::find($id);
        $employee->delete();
        return redirect()->route('employee.index');
    }
}