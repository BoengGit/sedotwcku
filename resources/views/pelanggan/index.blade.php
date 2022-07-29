@extends('layouts.template')
@section('title')
Pelanggan
@endsection

<!-- ini untuk isi home -->
@section('content')
<div class="main-content">
<div class="page-content">
                    <div class="container-fluid">
                    @include('alert.success')
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0">Pelanggan</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->
                        <div>
                        <a class="btn btn-primary waves-effect waves-light" href="{{ route('pelanggan.create')}}" role="button"> Create</a>
                        </p>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Tabel Pelanggan</h4>

                                        <div class="table-responsive">
                                            <table class="table table-editable table-nowrap align-middle table-edits">
                                                <thead>
                                                    <tr style="cursor: pointer;">
                                                        <th>ID</th>
                                                        <th>Nama</th>
                                                        <th>Email</th>
                                                        <th>Alamat</th>
                                                        <th>No Telepon</th>
                                                        <th>Edit</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                 @foreach($pelanggan as $row)
                    <tr>
                        <td>{{ $loop->iteration + ($pelanggan->perpage() *  ($pelanggan->currentPage() -1)) }}</td>
                        <td>{{ $row->name }}</td>
                        <td>{{ $row->email }}</td>
                        <td>{{ $row->address }}</td>
                        <td>{{ $row->telepon }}</td>
                        <form method="post" action="{{ route('pelanggan.destroy',[$row->id]) }}" onsubmit="return confirm('Apakah anda yakin akan menghapus, {{$row->name}}?')">
                        @csrf
                            <td>
                            {{ method_field('DELETE') }}
                            <a class="btn btn-outline-secondary btn-sm edit" href="{{route('pelanggan.edit',[$row->id])}}" title="Edit">
                             <i class="fas fa-pencil-alt"></i>
                             </a>
                             <button type="submit" class="btn btn-outline-secondary btn-sm edit">
                             <i class="fas fa-trash-alt"></i></button>
                            <a class="btn btn-outline-secondary btn-sm edit" href="{{ route('pelanggan.show',[$row->id]) }}" title="Lihat">
                            <i class="fas fa-eye"></i>
                             </a>
                        </td>
                    </tr>
                  @endforeach
                                                </tbody>
                                            </table>
                                            {{ $pelanggan->appends(Request::all())->links() }}
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->
                    </div> <!-- container-fluid -->
                </div>
</div>
@endsection
