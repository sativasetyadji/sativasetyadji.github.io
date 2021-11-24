@extends('admin.main')
@section('title1', ' Data Nomor |')

@section('breadcrumbs')
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Pengunjung</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li class="active"><i class="fa fa-dashboard"></i></li>
                </ol>
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="content mt-3">

    <div class="animated fadeIn">
        @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
        @endif
        
        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Data Pengunjung</strong>
                        </div>
                
                    <div class="card-body table-responsive">
                        <div class="my-2">
                            <form action="pengunjungs" method="GET">
                                <div class="input-group mb-3">
                                    <input type="date" class="form-control" name="start_date">
                                    <button class="btn btn-primary" type="submit">GET</button>
                                </div>
                            </form>
                        </div>
                  <table id="bootstrap-data-table" class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th>Id</th>
                        <th>NIK</th>
                        <th>Nama</th>
                        <th>Status</th>
                        <th>Email</th>
                        <th>No Telp</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        {{-- @foreach ($pengunjungs as $item) 
                    <tr>
                        <td >{{$loop->iteration}}</td>
                        <td>{{ $item ->nik }}</td>
                        <td>{{ $item ->nama }}</td>
                        <td>{{ $item ->status }}</td>
                        <td>{{ $item ->email }}</td>
                        <td>{{ $item ->notelp }}</td>
                        <td class="text-center">
                            <form action="{{ url('pengunjungs/'.$item->id) }}" method="post" class="d-inline" onsubmit="return confirm('Yakin Hapus Data?')">
                            @method('delete')
                            @csrf
                            <button class="btn btn-danger btn-sm">
                                <i class="fa fa-trash"></i> Hapus
                            </button>
                        </form>
                        </td>
                    </tr>
                    @endforeach --}}
                        @foreach ($pengunjungs as $key=> $pengunjungs) 
                    <tr>
                        <th scope="row">{{ ++$key }}</th>
                        <td>{{ $pengunjungs ->nik }}</td>
                        <td>{{ $pengunjungs ->nama }}</td>
                        <td>{{ $pengunjungs ->status }}</td>
                        <td>{{ $pengunjungs ->email }}</td>
                        <td>{{ $pengunjungs ->notelp }}</td>
                        <td class="text-center">
                            <form action="{{ url('pengunjungs/'.$pengunjungs->id) }}" method="post" class="d-inline" onsubmit="return confirm('Yakin Hapus Data?')">
                            @method('delete')
                            @csrf
                            <button class="btn btn-danger btn-sm">
                                <i class="fa fa-trash"></i> Hapus
                            </button>
                        </form>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                  </table>
                  <div class="pull-right">
                    {{ $paginate->links('pagination::bootstrap-4') }}
                  </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection