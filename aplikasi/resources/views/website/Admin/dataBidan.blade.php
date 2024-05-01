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
                            <div class="card-header">
                                <a href="{{ url('/FormBidan') }}">
                                    <button type="button" class="btn btn-primary btn-sm">
                                      <i class="fa-solid fa-plus" style="color: #ffffff;"></i>
                                      Tambah Data
                                    </button>
                                </a>


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
                                            <th>Nik</th>
                                            <th>Nama</th>
                                            <th>Alamat Tinggal</th>
                                            <th>Posisi Jabatan</th>
                                            <th>No Hp</th>
                                            <th>Nama Posyandu</th>
                                            <th>Kecamatan</th>
                                            <th>Desa</th>
                                            <th>Rt</th>
                                            <th>Rw</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>018282911</td>
                                            <td>Anton</td>
                                            <td>Dewi</td>
                                            <td>Sintia Rahmawati</td>
                                            <td>08133098822</td>
                                            <td>Ds. Tanjung Tani</td>
                                            <td>001</td>
                                            <td>004</td>
                                            <td>Kamboja</td>
                                            <td></td>
                                            <td>
                                                <form method="POST" action="">
                                                    @csrf
                                                    @method('DELETE')
                                                    <a href="" class="btn btn-info btn-sm">
                                                        <i class="fa-solid fa-eye"></i>
                                                    </a>
                                                    &nbsp;
                                                    <a class="btn btn-warning btn-sm" title="Ubah Pegawai" href="">
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
                                        <tr>
                                            <td>2</td>
                                            <td>9182828</td>
                                            <td>Rangga</td>
                                            <td>Dita</td>
                                            <td>nurul</td>
                                            <td>07192828</td>
                                            <td>Ds. tanjung Tani</td>
                                            <td>001</td>
                                            <td>004</td>
                                            <td>Kamboja</td>
                                            <td></td>
                                        </tr>
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
