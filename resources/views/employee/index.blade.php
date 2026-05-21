@extends('layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ __('Employee Management') }}</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <a href="#" class="btn btn-info">Add New Employee</a> <br> <br>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body p-0">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Middle Name</th>
                                            <th>Address</th>
                                            <th>Date of Birth</th>
                                            <th>Contact</th>
                                        </tr>
                                    </thead>
                                    <tbody  >
                                        @forelse ($employees as $employee)
                                        <tr>
                                            <td>{{ $employee->id }}</td>
                                            <td>{{ $employee->fname }}</td>
                                            <td>{{ $employee->lname }}</td>
                                            <td>{{ $employee->mname }}</td>
                                            <td>{{ $employee->address }}</td>
                                            <td>{{ $employee->dob }}</td>
                                            <td>{{ $employee->contact }}</td>
<<<<<<< HEAD
=======
                                            <td> 
>>>>>>> 8cdd85cd2be25ecceea4d4632fd4e486c6589b60
                                                <a href="{{ route('employee.edit', $employee->id) }}" class="btn btn-primary">Edit</a>
                                        <form action="{{ route('employee.destroy', $employee->id) }}" method="POST" style="display: inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this employee?')">Delete</button>
                                        </form>
                                            </td>
                                        </tr>
                                        @empty
                                            <tr>
                                                <td colspan="7" class="text-center">No employees found.</td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
@endsection