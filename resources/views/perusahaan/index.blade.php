@extends('layouts.template')
@section('title')
Perusahaan
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
                                    <h4 class="mb-sm-0">Perusahaan</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->
                        <div>
                        <a class="btn btn-primary waves-effect waves-light" href="{{ route('perusahaan.create')}}" role="button"> Create</a>
                        </p>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Tabel perusahaan</h4>

                                        <div class="table-responsive">
                                            <table class="table table-editable table-nowrap align-middle table-edits">
                                                <thead>
                                                    <tr style="cursor: pointer;">
                                                        <th>ID</th>
                                                        <th>Nama Perusahaan</th>
                                                        <th>Alamat</th>
                                                        <th>No Telepon</th>
                                                        <th>Edit</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                 @foreach($perusahaan as $row)
                    <tr>
                        <td>{{ $loop->iteration + ($perusahaan->perpage() *  ($perusahaan->currentPage() -1)) }}</td>
                        <td>{{ $row->name }}</td>
                        <td>{{ $row->address }}</td>
                        <td>{{ $row->telepon }}</td>
                        <form method="post" action="{{ route('perusahaan.destroy',[$row->id]) }}" onsubmit="return confirm('Apakah anda yakin akan menghapus, {{$row->name}}?')">
                        @csrf
                            <td>
                                <button href="{{ route('logout') }}" class="btn btn-outline-secondary btn-sm edit">
                             <i class="fas fa-trash-alt"></i></button>

                            {{ method_field('DELETE') }}
                            </form>
                            <a class="btn btn-outline-secondary btn-sm edit" href="{{route('perusahaan.edit',[$row->id])}}" title="Edit">
                             <i class="fas fa-pencil-alt"></i>
                             </a>
                            <a class="btn btn-outline-secondary btn-sm edit" href="{{ route('perusahaan.show',[$row->id]) }}" title="Lihat">
                            <i class="fas fa-eye"></i>
                             </a>
                        </td>
                    </tr>
                  @endforeach
                                                </tbody>
                                            </table>
                                            {{ $perusahaan->appends(Request::all())->links() }}
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->
                    </div> <!-- container-fluid -->
                </div>
</div>
@endsection
