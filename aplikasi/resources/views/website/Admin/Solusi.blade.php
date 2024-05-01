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
                        <div class="card">
                            <!-- /.card-header -->
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Faktor Penyebab</th>
                                            <th>Nama File</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $no = 1;
                                        @endphp
                                        @foreach ($query as $item)
                                            <tr>
                                                <th scope="row">{{ $no++ }}</th>
                                                <td>{{ $item->Faktor_penyebab }}</td>
                                                <td>
                                                    {{ isset($item->Nama_file) ? $item->Nama_file : '-' }}
                                                </td>
                                                <td>
                                                    <form method="POST" action="">
                                                        @csrf
                                                        @method('DELETE')
                                                        <a href="{{ route('Solusi.show', ['id' => $item->Faktor_penyebab]) }}" class="btn btn-info btn-sm">
                                                            <i class="fa-solid fa-eye"></i>
                                                        </a>
                                                        &nbsp;
                                                        <a class="btn btn-warning btn-sm" title="Ubah Pegawai"
                                                            href="">
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
