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
                                        <h4 class="card-title">Edit Admin</h4>
                                        <form class="custom-validation" method="POST" action="{{ route('user.update',[$user->id]) }}" novalidate="">
                                            @csrf
                                            {{ method_field('PUT') }}
                                            <div class="mb-3">
                                                <label>Name</label>
                                                <input type="text" name="name" class="form-control" required=""value="{{ $user->name }}">
                                            </div>
                                            <div class="mb-3">
                                                <label>Email</label>
                                                <input type="text" name="email" class="form-control" required="" value="{{ $user->email }}">
                                            </div>

                                            <div class="mb-3">
                                                <label>Password</label>
                                                <div>
                                                    <input name="password" type="password" id="pass2" class="form-control" required="" value="" >
                                                </div>
                                            </div>
                                            <div>
                                                <div>
                                                    <button type="submit" class="btn btn-primary waves-effect waves-light me-1">
                                                        Edit
                                                    </button>
                                                    <a class="btn btn-secondary waves-effect waves-light" href="/user" role="button">Kembali</a>
                                                </div>
                                            </div>
                                        </form>

                </div>
            </div> <!-- container-fluid -->
        </div> <!-- page-content -->
    </div> <!-- main-content -->
    </div>
    </div>
 @endsection


