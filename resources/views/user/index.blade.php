@extends('layouts.template')
@section('title')
Admin
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
                                    <h4 class="mb-sm-0">Admin</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->
                        <div>
                        <a class="btn btn-primary waves-effect waves-light" href="{{ route('user.create')}}" role="button">Create</a>
                        </div>

                        <!-- fungsi cari -->

                        <form class="mt-3 mb-4" method="get" action="{{ route('user.index') }}">
                            <div class="form-group">
                                <table>
                                    <td>
                                        <div class="col-sm-16">
                                        <input type="text" class="form-control" id="keyword" placeholder="Cari nama" name="keyword" value="{{ Request::get('keyword') }}">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="col-sm-4">
                                            <button type="submit" class="btn btn-info">
                                                <span class="fa fa-search"></span>
                                            </button>
                                        </div>
                                    </td>
                                </table>
                            </div>
                        </form>
                        </p>

                        <div class="row">
                            <div class="col-12"></div>
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Tabel Admin</h4>
                                        <div class="table-responsive">
                                            <table class="table table-editable table-nowrap align-middle table-edits">
                                                <thead>
                                                    <tr style="cursor: pointer;">
                                                        <th>ID</th>
                                                        <th>Name</th>
                                                        <th>Email</th>
                                                        <th>Level</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                 @foreach($user as $row)
                    <tr>
                        <td>{{ $loop->iteration + ($user->perpage() *  ($user->currentPage() -1)) }}</td>
                        <td>{{ $row->name }}</td>
                        <td>{{ $row->email }}</td>
                        <td>{{ $row->level }}</td>
                        <td>
                        <form method="post" action="{{ route('user.destroy',[$row->id]) }}" onsubmit="return confirm('Apakah anda yakin akan menghapus, {{$row->name}}?')">
        @csrf
     {{ method_field('DELETE') }}
                            <a class="btn btn-outline-secondary btn-sm edit" href="{{route('user.edit',[$row->id])}}" title="Edit">
                             <i class="fas fa-pencil-alt"></i>
                             </a>
                             <button type="submit" class="btn btn-outline-secondary btn-sm edit">
                             <i class="fas fa-trash-alt"></i></button>
                            <a class="btn btn-outline-secondary btn-sm edit" href="{{ route('user.show',[$row->id]) }}" title="Lihat">
                            <i class="fas fa-eye"></i>
                             </a>
                        </td>
                    </tr>
                  @endforeach
                                                </tbody>
                                            </table>
                                            {{ $user->appends(Request::all())->links() }}
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->
                    </div> <!-- container-fluid -->
                </div>
</div>
@endsection
