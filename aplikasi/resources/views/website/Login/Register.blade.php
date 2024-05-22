@extends('website.Login.index')

@section('content')
    <div class="container-fluid px-md-5 px-lg-1 px-xl-5 py-4 mx-auto">
        <div class="card card border-0">
            <div class="row d-flex">
                <div class="col-lg-6 col-sm col-sm d-none d-sm-block">
                    <div class="card1 pb-5">
                        <div class="row">
                            <img src="https://i.imgur.com/CXQmsmF.png" class="logo">
                        </div>
                        <div class="row px-3 justify-content-center mt-4 mb-4 border-line">
                            <img src="https://i.imgur.com/uNGdWHi.png" class="image">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card2 card border-0 px-4 py-4">
                        <div class="row mb-0 px-3">
                            <h3 class="mb-0 mr-4 mt-2">#NUSANTARA SEHAT</h3>
                        </div>
                        <div style="overflow-y: auto; max-height: 430px; overflow-x: hidden">
                            <div class="row px-3 mb-4">
                                <div class="line w-100"></div>
                                <p class="mb-0 mr-4 mt-2">Silahkan mengisi form untuk melakukan pendaftaran</p>
                                <div class="line w-100"></div>
                            </div>

                            <form action="{{ route('proses_Register') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row px-3">
                                    <div class="col-md-6 col-sm-12">
                                        <label class="mb-1">
                                            <h6 class="mb-0 text-sm">Username</h6>
                                        </label>
                                        <input class="mb-2" type="text" name="username"
                                            placeholder="min:5 | max:15 karakter" value="{{ old('username') }}">
                                        @if ($errors->has('username'))
                                            <span class="error text-danger mb-2">{{ $errors->first('username') }}</span>
                                        @endif
                                    </div>

                                    <div class="col-md-6 col-sm-12">
                                        <label class="mb-1">
                                            <h6 class="mb-0 text-sm">Password</h6>
                                        </label>
                                        <input type="password" name="password" placeholder="min:6 karakter"
                                            value="{{ old('password') }}">
                                        @if ($errors->has('password'))
                                            <span class="error text-danger mb-2">{{ $errors->first('password') }}</span>
                                        @endif
                                        <input type="hidden" name="Role" value="Pengguna">
                                    </div>
                                    <div class="col-md-6 col-sm-12 mb-1">
                                        <label class="mb-1">
                                            <h6 class="mb-0 text-sm">Nik</h6>
                                        </label>
                                        <input type="text" name="nik" placeholder="min|max : 16 digit"
                                            value="{{ old('nik') }}">
                                        @if ($errors->has('nik'))
                                            <span class="error text-danger mb-2">{{ $errors->first('nik') }}</span>
                                        @endif
                                    </div>

                                    <div class="col-md-6 col-sm-12 mb-1">
                                        <label class="mb-1">
                                            <h6 class="mb-0 text-sm">email</h6>
                                        </label>
                                        <input type="text" name="email" placeholder="format valid @gmail"
                                            value="{{ old('email') }}">
                                        @if ($errors->has('email'))
                                            <span class="error text-danger mb-2">{{ $errors->first('email') }}</span>
                                        @endif
                                    </div>
                                    <div class="col-md-12 col-sm-12 mb-1">
                                        <label class="mb-0">
                                            <h6 class="mb-0 text-sm">Foto</h6>
                                        </label>
                                        <input type="file" name="foto" placeholder="Masukan Foto"
                                            value="{{ old('foto') }}">
                                        @if ($errors->has('foto'))
                                            <span class="error text-danger mb-2">{{ $errors->first('foto') }}</span>
                                        @endif
                                    </div>
                                    <div class="col-md-6 col-sm-12 mb-1">
                                        <label class="mb-0">
                                            <h6 class="mb-0 text-sm">Nama Anak</h6>
                                        </label>
                                        <input type="text" name="nama_anak" placeholder="Hanya spasi dan huruf"
                                            value="{{ old('nama_anak') }}">
                                        @if ($errors->has('nama_anak'))
                                            <span class="error text-danger mb-2">{{ $errors->first('nama_anak') }}</span>
                                        @endif
                                    </div>
                                    <div class="col-md-6 col-sm-12 mb-1">
                                        <label class="mb-0">
                                            <h6 class="mb-0 text-sm">Usia</h6>
                                        </label>
                                        <input type="text" name="usia" placeholder="Usia 1 - 5 Tahun"
                                            value="{{ old('usia') }}">
                                        @if ($errors->has('usia'))
                                            <span class="error text-danger mb-2">{{ $errors->first('usia') }}</span>
                                        @endif
                                    </div>
                                    <div class="col-md-12 col-sm-12 mb-1">
                                        <label class="mb-0">
                                            <h6 class="mb-0 text-sm">Nama Orang tua</h6>
                                        </label>
                                        <input type="text" name="nama_ibu" placeholder="berupa huruf"
                                            value="{{ old('nama_ibu') }}">
                                        @if ($errors->has('nama_ibu'))
                                            <span class="error text-danger mb-2">{{ $errors->first('nama_ibu') }}</span>
                                        @endif
                                    </div>
                                    <div class="col-md-12 col-sm-12 mb-1">
                                        <label class="mb-0">
                                            <h6 class="mb-0 text-sm">Alamat</h6>
                                        </label>
                                        <input type="text" name="alamat" placeholder="berupa huruf"
                                            value="{{ old('alamat') }}">
                                        @if ($errors->has('alamat'))
                                            <span class="error text-danger mb-2">{{ $errors->first('alamat') }}</span>
                                        @endif
                                    </div>
                                    <div class="col-md-4 col-sm-12 mb-1">
                                        <label class="mb-0">
                                            <h6 class="mb-0 text-sm">Desa</h6>
                                        </label>
                                        <input type="text" name="desa" placeholder="berupa huruf"
                                            value="{{ old('desa') }}">
                                        @if ($errors->has('desa'))
                                            <span class="error text-danger mb-2">{{ $errors->first('desa') }}</span>
                                        @endif
                                    </div>
                                    <div class="col-md-8 col-sm-12 mb-1">
                                        <label class="mb-0">
                                            <h6 class="mb-0 text-sm">Kecamatan</h6>
                                        </label>
                                        <input type="text" name="kecamatan" placeholder="berupa huruf"
                                            value="{{ old('kecamatan') }}">
                                        @if ($errors->has('kecamatan'))
                                            <span class="error text-danger mb-2">{{ $errors->first('kecamatan') }}</span>
                                        @endif
                                    </div>
                                    <div class="col-md-4 col-sm-12 mb-1">
                                        <label class="mb-0">
                                            <h6 class="mb-0 text-sm">Rt</h6>
                                        </label>
                                        <input type="text" name="rt" placeholder="berupa angka"
                                            value="{{ old('rt') }}">
                                        @if ($errors->has('rt'))
                                            <span class="error text-danger mb-2">{{ $errors->first('rt') }}</span>
                                        @endif
                                    </div>
                                    <div class="col-md-4 col-sm-12 mb-1">
                                        <label class="mb-0">
                                            <h6 class="mb-0 text-sm">Rw</h6>
                                        </label>
                                        <input type="text" name="rw" placeholder="berupa angka"
                                            value="{{ old('rw') }}">
                                        @if ($errors->has('rw'))
                                            <span class="error text-danger mb-2">{{ $errors->first('rw') }}</span>
                                        @endif
                                    </div>
                                    <div class="col-md-4 col-sm-12 mb-1">
                                        <label class="mb-0">
                                            <h6 class="mb-0 text-sm">No Hp (whatsapp)</h6>
                                        </label>
                                        <input type="text" name="no_hp" placeholder="berupa angka"
                                            value="{{ old('no_hp') }}">
                                        @if ($errors->has('no_hp'))
                                            <span class="error text-danger mb-2">{{ $errors->first('no_hp') }}</span>
                                        @endif
                                    </div>
                                    <div class="col-md-12 col-sm-12 mb-1">
                                        <label class="mb-0">
                                            <h6 class="mb-0 text-sm">Nama Posyandu</h6>
                                        </label>
                                        <select class="form-control" name='posyandu' value="{{ old('posyandu') }}">
                                            <option value="Tambak Wirang" selected>Tambak Wirang</option>
                                        </select>
                                        @if ($errors->has('posyandu'))
                                            <span class="error text-danger mb-2">{{ $errors->first('posyandu') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="row px-3 mx-2 mt-3">
                                    <p><span class="text-danger">*</span>Pastikan semua data yang di input adalah benar</p>
                                    <div class="col-md-6 col-sm-12">
                                        <button type="submit" class="btn btn-blue text-center">Daftar</button> &ensp;
                                    </div>
                                </div>

                                <div class="row px-3 mx-2 mt-2">
                                    <small class="font-weight-bold">Sudah Punya Akun?
                                        <a href="{{ url('login') }}" class="text-danger ">Login</a></small>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
            <div class="bg-blue py-3">
                <div class="row px-3">
                    <small class="ml-4 ml-sm-5 mb-2">Copyright &copy; 2019. All rights reserved.</small>
                    <div class="social-contact ml-4 ml-sm-auto">
                        <span class="fa fa-facebook mr-4 text-sm"></span>
                        <span class="fa fa-google-plus mr-4 text-sm"></span>
                        <span class="fa fa-linkedin mr-4 text-sm"></span>
                        <span class="fa fa-twitter mr-4 mr-sm-5 text-sm"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
