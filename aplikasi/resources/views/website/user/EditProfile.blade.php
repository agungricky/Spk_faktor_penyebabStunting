@extends('website.index')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Edit Profile</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Edit Profile</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">

                    <form
                        action="{{ route('updateProfile', ['iddataPengguna' => $query->iddataPengguna, 'Akun_idAkun' => $query->Akun_idAkun]) }}"
                        method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card card-danger">
                                    <div class="card-header">
                                        <h3 class="card-title">Data Anak</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="container-fluid">
                                            <div class="row justify-content-center align-items-center mb-3">
                                                <div class="col-md-6">
                                                    <img src="{{ asset('public/Register_image/' . $query->Foto) }}"
                                                        alt="Beautiful Image" class="img-fluid max-width rounded">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Foto Profile</label>
                                            <div class="input-group">
                                                <input type="file" class="form-control" id="inputGroupFile04"
                                                    aria-describedby="inputGroupFileAddon04" aria-label="Upload" name="foto">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label>Nama Anak</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
                                                </div>
                                                <input type="text" class="form-control" name="nama_anak"
                                                    value="{{ $query->Nama_anak }}">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label>Usia Anak</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fa-solid fa-pager"></i></span>
                                                </div>
                                                <input type="text" name="usia" class="form-control" value="{{ $query->Usia }}">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card card-info">
                                    <div class="card-header">
                                        <h3 class="card-title">DATA AKUN</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label>Username</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
                                                </div>
                                                <input type="text" name="username" class="form-control" value="{{ $akun->username }}">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label>Password</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
                                                </div>
                                                <input type="text" name="password" class="form-control" value="{{ $akun->password}}">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label>Email</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
                                                </div>
                                                <input type="email" name="email" class="form-control" value="{{ $akun->email }}">
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="card card-primary">
                                    <div class="card-header">
                                        <h3 class="card-title">DATA DIRI ORANGTUA</h3>
                                    </div>
                                    <div class="card-body">

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>NIK</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i
                                                                    class="fa-regular fa-address-card"></i></span>
                                                        </div>
                                                        <input type="text" name="nik" class="form-control"
                                                            value="{{ $query->Nik }}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>NAMA IBU</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i
                                                                    class="fa-solid fa-user-group"></i></span>
                                                        </div>
                                                        <input type="text" name="nama_ibu" class="form-control"
                                                            value="{{ $query->Nama_ibu }}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>ALAMAT</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i
                                                                    class="fa-solid fa-city"></i></span>
                                                        </div>
                                                        <input type="text" class="form-control" name="alamat"
                                                            value="{{ $query->Alamat }}">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-5">
                                                <div class="form-group">
                                                    <label>DESA</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i
                                                                    class="fa-solid fa-shop"></i></span>
                                                        </div>
                                                        <input type="text" class="form-control" name="desa"
                                                            value="{{ $query->Desa }}">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-7">
                                                <div class="form-group">
                                                    <label>KECAMATAN</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i
                                                                    class="fa-solid fa-flag"></i></span>
                                                        </div>
                                                        <input type="text" class="form-control" name="kecamatan"
                                                            value="{{ $query->Kecamatan }}">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>Rt</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i
                                                                    class="fa-solid fa-user-tie"></i></span>
                                                        </div>
                                                        <input type="text" class="form-control" name="rt"
                                                            value="{{ $query->Rt }}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>Rw</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i
                                                                    class="fa-solid fa-user-tie"></i></span>
                                                        </div>
                                                        <input type="text" class="form-control" name="rw"
                                                            value="{{ $query->Rw }}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>No Hp</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i
                                                                    class="fa-solid fa-phone-volume"></i></span>
                                                        </div>
                                                        <input type="text" class="form-control" name="no_hp"
                                                            value="{{ $query->No_Hp }}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Posyandu</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i
                                                                    class="fa-solid fa-people-roof"></i></span>
                                                        </div>
                                                        <select class="form-select" aria-label="Default select example">
                                                            <option value="Tambak Wirang" selected>Tambak Wirang</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="d-grid gap-2">
                                    <button class="btn btn-success" type="submit">Kirim</button>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </section>
    </div>
@endsection
