@extends('layouts.template')
@section('title')
Perusahaan
@endsection

<!-- ini untuk isi home -->
@section('content')
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">

        <div class="col-xl-8">
            <div class="card">
                <div class="card-body">
                                        <h4 class="card-title">Edit perusahaan</h4>
                                        <form class="custom-validation" method="POST" action="{{ route('perusahaan.update',[$perusahaan->id]) }}" novalidate="">
                                            @csrf
                                            {{ method_field('PUT') }}
                                            <div class="mb-3">
                                                <label>Name</label>
                                                <input type="text" name="name" class="form-control" required=""value="{{ $perusahaan->name }}">
                                            </div>

                                            <div class="mb-3">
                                                <label>Address</label>
                                                <input type="text" name="address" class="form-control" required=""value="{{ $perusahaan->address }}">
                                            </div>
                                            <div class="mb-3">
                                                <label>No Telepon</label>
                                                <input type="text" name="telepon" class="form-control" required=""value="{{ $perusahaan->telepon }}">
                                            </div>

                                            <div>
                                                <div>
                                                    <button type="submit" class="btn btn-primary waves-effect waves-light me-1">
                                                        Edit
                                                    </button>
                                                    <a class="btn btn-secondary waves-effect waves-light" href="/perusahaan" role="button">Kembali</a>
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


