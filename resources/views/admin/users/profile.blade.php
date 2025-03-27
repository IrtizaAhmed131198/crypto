@extends('admin.layout.layout')
@section('content')
@section('title', $title)
<!-- Main content -->

<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Profile</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">User Profile</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">

                <!-- Profile Image -->
                <div class="card card-primary card-outline">
                    <div class="card-body box-profile">
                        <div class="text-center">
                            <img class="profile-user-img img-fluid img-circle"
                                src="{{ $data->image ? asset('public/uploads/avatars/' . $data->image) : asset('public/assets/imgs/default.jpg') }}"
                                alt="User profile picture">

                        </div>

                        <h3 class="profile-username text-center">{{ Auth::user()->name }}</h3>

                        <ul class="list-group list-group-unbordered mb-3">
                            <li class="list-group-item">
                                <img src="{{ asset('public/assets/imgs/trx.png') }}" alt=""><b>TRX</b> <a class="float-right">0</a>
                            </li>
                            <li class="list-group-item">
                                <img src="{{ asset('public/assets/imgs/usdt.png') }}" alt=""><b>USDT</b> <a class="float-right">0</a>
                            </li>
                            <li class="list-group-item">
                                <a href="{{ route('team.qr') }}" class="float-left">My Team</a>
                            </li>
                            <li class="list-group-item">
                                <a href="{{ route('withdraw') }}" class="float-left">Withdraw</a>
                            </li>
                            <li class="list-group-item">
                                <a href="{{ route('deposit') }}" class="float-left">Deposit</a>
                            </li>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->

                <!-- About Me Box -->
                {{-- <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">About Me</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <strong><i class="fas fa-book mr-1"></i> Education</strong>

                        <p class="text-muted">
                            B.S. in Computer Science from the University of Tennessee at Knoxville
                        </p>

                        <hr>

                        <strong><i class="fas fa-map-marker-alt mr-1"></i> Location</strong>

                        <p class="text-muted">Malibu, California</p>

                        <hr>

                        <strong><i class="fas fa-pencil-alt mr-1"></i> Skills</strong>

                        <p class="text-muted">
                            <span class="tag tag-danger">UI Design</span>
                            <span class="tag tag-success">Coding</span>
                            <span class="tag tag-info">Javascript</span>
                            <span class="tag tag-warning">PHP</span>
                            <span class="tag tag-primary">Node.js</span>
                        </p>

                        <hr>

                        <strong><i class="far fa-file-alt mr-1"></i> Notes</strong>

                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum
                            enim neque.</p>
                    </div>
                    <!-- /.card-body -->
                </div> --}}
                <!-- /.card -->
            </div>
            <!-- /.col -->
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header p-2">
                        <ul class="nav nav-pills">
                            <li class="nav-item"><a class="nav-link active" href="#settings"
                                    data-toggle="tab">Settings</a></li>
                        </ul>
                    </div><!-- /.card-header -->
                    <div class="card-body">
                        <div class="tab-content">

                            <div class="tab-pane active" id="settings">
                                <form action="{{ route('profile.update') }}" id="updateProfileForm" method="POST" class="form-horizontal" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $data->id }}">

                                    <div class="form-group row">
                                        <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="name" class="form-control" id="inputName"
                                                value="{{ $data->name ?? '' }}" placeholder="Enter name" required>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                                        <div class="col-sm-10">
                                            <input type="email" name="email" class="form-control" id="inputEmail"
                                                value="{{ $data->email ?? '' }}" placeholder="Enter email" required>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                                        <div class="col-sm-10">
                                            <input type="password" name="password" class="form-control" id="inputPassword"
                                                value="" autocomplete="new-password" placeholder="Enter password">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="exampleInputPhoneNumber" class="col-sm-2 col-form-label">Mobile Number</label>
                                        <div class="col-sm-10">
                                            <input type="number" name="mobile" class="form-control" id="exampleInputPhoneNumber"
                                                value="{{ $data->mobile ?? '' }}" placeholder="Enter phone number" required>
                                        </div>
                                    </div>

                                    <!-- Avatar Upload -->
                                    <div class="form-group row">
                                        <label for="inputAvatar" class="col-sm-2 col-form-label">Avatar</label>
                                        <div class="col-sm-10">
                                            <input type="file" name="avatar" class="form-control" id="inputAvatar" accept="image/*">
                                            @if($data->image)
                                                <img src="{{ asset('public/uploads/avatars/' . $data->image) }}" alt="Avatar" class="mt-2" width="100">
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="offset-sm-2 col-sm-10">
                                            <button type="submit" class="btn btn-primary">Update Profile</button>
                                        </div>
                                    </div>
                                </form>
                            </div>

                            <!-- /.tab-pane -->
                        </div>
                        <!-- /.tab-content -->
                    </div><!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</section>

{{-- <section class="content">
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
                        <input type="hidden" name="id" value="{{ $data->id }}">
                        <div class="card-body row">
                            <div class="form-group col-md-6">
                                <label for="exampleInputName">Name</label>
                                <input type="text" name="name" class="form-control" id="exampleInputName"
                                    value="{{ $data->name ?? '' }}" placeholder="Enter first name" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="exampleInputEmail">Email address</label>
                                <input type="email" name="email" class="form-control" id="exampleInputEmail"
                                    placeholder="Enter email" required value="{{ $data->email ?? '' }}">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="exampleInputPassword">Password</label>
                                <input type="password" name="password" class="form-control"
                                    autocomplete="new-password" id="exampleInputPassword" placeholder="New password">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="exampleInputPhoneNumber">Mobile Number</label>
                                <input type="number" name="mobile" class="form-control"
                                    id="exampleInputPhoneNumber" placeholder="Enter phone number" required
                                    value="{{ $data->mobile ?? '' }}">
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
</section> --}}
<!-- /.content -->

@endsection
@section('script')
@endsection
