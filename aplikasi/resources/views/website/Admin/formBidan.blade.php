@extends('website.index')
@section('content')
    <div class="content-wrapper">
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

        <section class="content">
            <div class="container-fluid">
                <form action="" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card card-danger">
                                <div class="card-header">
                                    <h3 class="card-title">Input Data Diri</h3>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Nik</label>
                                            <input type="email" class="form-control" id="exampleInputEmail1"
                                                aria-describedby="emailHelp"
                                                placeholder="Input Nik sesuai dengan nomor KTP.">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Nama</label>
                                            <input type="email" class="form-control" id="exampleInputEmail1"
                                                aria-describedby="emailHelp" placeholder="Masukan Nama">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Alamat</label>
                                            <input type="email" class="form-control" id="exampleInputEmail1"
                                                aria-describedby="emailHelp" placeholder="Alamat tempat tinggal saat ini">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Posisi / Jabatan</label>
                                            <input type="email" class="form-control" id="exampleInputEmail1"
                                                aria-describedby="emailHelp" placeholder="Masukan posisi saat ini">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Nomor Hp</label>
                                            <input type="email" class="form-control" id="exampleInputEmail1"
                                                aria-describedby="emailHelp" placeholder="Masukan nomor Hp">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Email</label>
                                            <input type="email" class="form-control" id="exampleInputEmail1"
                                                aria-describedby="emailHelp" placeholder="Masukan alamat Gmail">
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Data Penempatan Tugas</h3>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Nama Posyandu</label>
                                            <input type="email" class="form-control" id="exampleInputEmail1"
                                                aria-describedby="emailHelp"
                                                placeholder="Input Nama posyandu sesuai penempatan.">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Kecamatan</label>
                                            <input type="email" class="form-control" id="exampleInputEmail1"
                                                aria-describedby="emailHelp" placeholder="Masukan Kecamatan.">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Desa</label>
                                            <input type="email" class="form-control" id="exampleInputEmail1"
                                                aria-describedby="emailHelp" placeholder="Masukan Desa.">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Rt</label>
                                            <input type="email" class="form-control" id="exampleInputEmail1"
                                                aria-describedby="emailHelp" placeholder="Masukan Rt.">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Rw</label>
                                            <input type="email" class="form-control" id="exampleInputEmail1"
                                                aria-describedby="emailHelp" placeholder="Masukan Rw.">
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    Apakah data yang dimasukan sudah sesuai? <br> jika sudah sesuai silahkan klik kirim
                                    <div class="d-grid gap-2">
                                        <button class="btn btn-success" type="button">Kirim</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </section>


    </div>
@endsection
