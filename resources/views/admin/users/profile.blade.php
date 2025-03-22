@extends('admin.layout.layout')
@section('content')
@section('title' , $title)
<!-- Main content -->
<section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- jquery validation -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Update User Details</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{ route('profile.update') }}" id="createProfileForm" method="POST">
                @csrf
                <input type="hidden" name="id" value="{{$data->id}}">
                <div class="card-body row">
                  <div class="form-group col-md-6">
                    <label for="exampleInputName">Name</label>
                    <input type="text" name="name" class="form-control" id="exampleInputName" value="{{$data->name ?? ''}}" placeholder="Enter first name" required>
                  </div>
                  <div class="form-group col-md-6">
                    <label for="exampleInputEmail">Email address</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail" placeholder="Enter email" required value="{{$data->email ?? ''}}">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="exampleInputPassword">Password</label>
                    <input type="password" name="password" class="form-control" autocomplete="new-password" id="exampleInputPassword" placeholder="New password">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="exampleInputPhoneNumber">Mobile Number</label>
                    <input type="number" name="mobile" class="form-control" id="exampleInputPhoneNumber" placeholder="Enter phone number" required value="{{$data->mobile ?? ''}}">
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary btn-custom">Update</button>
                </div>
            </form>

          </div>
          <!-- /.card -->
          </div>
        <!--/.col (left) -->
        <!-- right column -->
        <div class="col-md-6">

        </div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->

  @endsection
  @section('script')
  @endsection
