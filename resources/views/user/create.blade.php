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
                                                <label>Name</label>
                                                <div>
                                                    <input name="name" type="password" id="pass2" class="form-control" required="" placeholder="Password">
                                                </div>
                                                <div class="mt-2">
                                                    <input type="password" class="form-control" required="" data-parsley-equalto="#pass2" placeholder="Re-Type Password">
                                                </div>
                                            </div>

                                            <div class="mb-3">
                                                <label>Password</label>
                                                <div>
                                                    <input type="email" class="form-control" required="" parsley-type="email" placeholder="Enter a valid e-mail">
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label>URL</label>
                                                <div>
                                                    <input parsley-type="url" type="url" class="form-control" required="" placeholder="URL">
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label>Digits</label>
                                                <div>
                                                    <input data-parsley-type="digits" type="text" class="form-control" required="" placeholder="Enter only digits">
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label>Number</label>
                                                <div>
                                                    <input data-parsley-type="number" type="text" class="form-control" required="" placeholder="Enter only numbers">
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label>Alphanumeric</label>
                                                <div>
                                                    <input data-parsley-type="alphanum" type="text" class="form-control" required="" placeholder="Enter alphanumeric value">
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label>Textarea</label>
                                                <div>
                                                    <textarea required="" class="form-control" rows="5"></textarea>
                                                </div>
                                            </div>
                                            <div class="mb-0">
                                                <div>
                                                    <button type="submit" class="btn btn-primary waves-effect waves-light me-1">
                                                        Submit
                                                    </button>
                                                    <button type="reset" class="btn btn-secondary waves-effect">
                                                        Cancel
                                                    </button>
                                                </div>
                                            </div>
                                        </form>

                                    </div>
                                    </div> <!-- container-fluid -->
    </div> <!-- page-content -->
    </div> <!-- main-content -->
 @endsection
