@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0">{{ __('Employee Update') }}</h1> 
                    @if (session('status'))
                      <div class="alert alert-success">{{session('status')}}</div>
                  @endif
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-6 m-auto">
            <div class="card card-secondary">
              <div class="card-header">
                <h3 class="card-title">Edit Employee Information</h3>
              </div>
              <form>
                <div class="row card-body col-12">
                  <div class="form-group col-12">
                    <label
                        for="exampleInputEmail1">First Name
                    </label>
                        <input type="text" class="form-control g-2" id="first_name" name="first_name" placeholder="Enter your Firstname" require value="{{ $employees->fname}}">
                  </div>                  
                <div class="form-group col-12">
                  <label for="exampleInputPassword1">Last Name</label>
                  <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Enter your Last Name"
                  value="{{ $employees->lname}}">
                </div>
                <div class="form-group col-12">
                    <label for="exampleInputFile">Middle Name</label>
                  <input type="text" class="form-control" id="middle_name" name="middle_name" placeholder="Enter your Middle Name"
                  value="{{ $employees->midname}}">
                </div>
                <div class="form-group col-12">
                  <label for="exampleInputEmail1">Address</label>
                  <input type="text" class="form-control" id="address" name="address" placeholder="Enter Address" value="{{ $employees->address}}">
                </div> 
                <div class="form-group col-12">
                  <label for="exampleInputEmail1">Date of Birth</label>
                  <input type="date" class="form-control" id="date_of_birth" name="date_of_birth" placeholder="Enter Date of Birth" value="{{ $employees->dateofbirth}}">
                </div>
                  <div class="form-group col-12">
                    <label for="exampleInputEmail1">Contact</label>
                    <input type="number" class="form-control" id="contact" name="contact" placeholder="Enter Contact Number" value="{{ $employees->contact}}">
                  </div>
                <div class="form-group col-6">
                  <button type="submit" class="btn btn-success col-12">Update Employee Record</button>
                </div>
              </form>
      
@endsection