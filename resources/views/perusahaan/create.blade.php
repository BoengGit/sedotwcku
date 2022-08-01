@extends('layouts.template')
@section('title')
Perusahaan
@endsection

<!-- ini untuk isi home -->
@section('content')
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <h4 class="mb-sm-0">Tambah perusahaan</h4>
                    </div>
                </div>
            </div>
        <div class="col-xl-8">
            <div class="card">
                <div class="card-body">
                @include('alert.error')

                                        <form class="custom-validation" method="POST" action="{{ route('perusahaan.store') }}" novalidate="">
                                            @csrf
                                            <div class="mb-3">
                                                <label>Nama Perusahaan</label>
                                                <input type="text" name="name" class="form-control" required="" placeholder="Masukkan nama">
                                            </div>

                                            <div class="mb-3">
                                                <label>Address</label>
                                                <input type="text" name="address" class="form-control" required="" placeholder="Masukkan alamat">
                                            </div>
                                           <div class="mb-3">
                                                <label>No Telepon</label>
                                                <input type="text" name="telepon" class="form-control" required="" placeholder="Masukkan no telepon">
                                            </div>
                                            <div>
                                                <div>
                                                    <button type="submit" class="btn btn-primary waves-effect waves-light me-1">
                                                        Submit
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
