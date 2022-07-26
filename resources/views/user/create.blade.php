@extends('layouts.template')
@section('title')
Admin
@endsection

<!-- ini untuk isi home -->
@section('content')
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">

        <div class="col-xl-8">
            <div class="card">
                <div class="card-body">
                                        <h4 class="card-title">Create Admin</h4>
                                        <form class="custom-validation" method="POST" action="{{ route('user.store') }}" novalidate="">
                                            <div class="mb-3">
                                                <label>Email</label>
                                                <input type="text" class="form-control" required="" placeholder="Type something">
                                            </div>

                                            <div class="mb-3">
                                                <label>Password</label>
                                                <div>
                                                    <input name="name" type="password" id="pass2" class="form-control" required="" placeholder="Password">
                                                </div>
                                                <div class="mt-2">
                                                    <input type="password" class="form-control" required="" data-parsley-equalto="#pass2" placeholder="Confirm Password">
                                                </div>
                                            </div>
                                                <div>
                                                    <button type="submit" class="btn btn-primary waves-effect waves-light me-1">
                                                        Submit
                                                    </button>
                                                </div>
                                            </div>
                                        </form>

                                    </div>
                                    </div> <!-- container-fluid -->
    </div> <!-- page-content -->
    </div> <!-- main-content -->
 @endsection
