@extends('layouts.template')
@section('title')
Admin
@endsection

<!-- ini untuk isi home -->
@section('content')
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <h4 class="mb-sm-0">tambah Admin</h4>
                    </div>
                </div>
            </div>
        <div class="col-xl-8">
            <div class="card">
                <div class="card-body">
                @include('alert.error')

                                        <form class="custom-validation" method="POST" action="{{ route('user.store') }}" novalidate="">
                                            @csrf
                                            <div class="mb-3">
                                                <label>Name</label>
                                                <input type="text" name="name" class="form-control" required="" placeholder="Masukkan nama">
                                            </div>
                                            <div class="mb-3">
                                                <label>Email</label>
                                                <input type="text" name="email" class="form-control" required="" placeholder="Masukkan email">
                                            </div>

                                            <div class="mb-3">
                                                <label>Password</label>
                                                <div>
                                                    <input name="password" type="password" id="pass2" class="form-control" required="" placeholder="Masukkan Password">
                                                </div>
                                                <div class="mt-3">
                                                    <input name="password" type="password" id="pass2" class="form-control" required="" placeholder="Masukkan Confirm Password">
                                                </div>
                                            </div>
                                            <div>
                                                <div>
                                                    <button type="submit" class="btn btn-primary waves-effect waves-light me-1">
                                                        Submit
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
