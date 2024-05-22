@extends('website.index')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Dashboard</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard v1</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        @if (session('Success'))
                            <div class="alert alert-success">
                                {{ session('Success') }}
                            </div>
                        @endif
                        <div class="card">
                            <div class="card-header">
                                @if ($id != 'Pengguna')
                                    <a href="{{ url('Form', ['id' => $id]) }}">
                                        <button type="button" class="btn btn-primary btn-sm">
                                            <i class="fa-solid fa-plus" style="color: #ffffff;"></i>
                                            Tambah Data
                                        </button>
                                    </a>
                                @endif

                                <div class="card-tools">
                                    <div class="input-group input-group-sm" style="width: 150px;">
                                        <input type="text" name="table_search" class="form-control float-right"
                                            placeholder="Search">

                                        <div class="input-group-append">
                                            <button type="submit" class="btn btn-default">
                                                <i class="fas fa-search"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Username</th>
                                            <th>Password</th>
                                            <th>Role</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $no = 1;
                                        @endphp
                                        @foreach ($dataAkun as $item)
                                            <tr>
                                                <td>{{ $no++ }}</td>
                                                <td>{{ $item->username }}</td>
                                                <td>{{ $item->password }}</td>
                                                <td>{{ $item->Role }}</td>
                                                <td>
                                                    <form method="POST" action="{{ route('Hapus_Akun', ['id'=> $item->id]) }}">
                                                        @csrf
                                                        @method('DELETE')
                                                        <a class="btn btn-warning btn-sm" title="Edit Akun Bidan"
                                                            href="{{ route('Edit_Akun', ['id' => $item->id]) }}">
                                                            <i class="fa-solid fa-pencil"></i>
                                                        </a>
                                                        &nbsp;
                                                        <button type="submit" class="btn btn-danger btn-sm"
                                                            title="Hapus Pegawai"
                                                            onclick="return confirm('Anda Yakin Data akan diHapus?')">
                                                            <i class="fa-solid fa-trash"></i>
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
            </div>
        </section>


    </div>
@endsection
