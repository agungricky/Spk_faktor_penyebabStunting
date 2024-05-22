@extends('website.Login.index')

@section('content')
    <div class="container-fluid px-md-5 px-lg-1 px-xl-5 py-4 mx-auto">
        <div class="card card0 border-0">
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
                        <div class="row px-3 mb-5">
                            <div class="line w-100"></div>
                            <p class="mb-0 mr-4 mt-2">Silahkan melakukan Login Terlebih dahulu</p>
                            <div class="line w-100"></div>
                        </div>
                        {{-- 
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif --}}

                        <form action="{{ route('proses-Login') }}" method="POST">
                            @csrf
                            {{-- -------------------------------- Akun -------------------------- --}}
                            <div class="row px-3">
                                <label class="mb-1">
                                    <h6 class="mb-0 text-sm">Email</h6>
                                </label>
                                <input type="text" name="email" placeholder="Masukan Alamat Email" value="{{ old('email') }}">
                                @if ($errors->has('email'))
                                    <span class="error text-danger mb-2">{{ $errors->first('email') }}</span>
                                @endif
                            </div>
                            <div class="row px-3">
                                <label class="mb-1 mt-3">
                                    <h6 class="mb-0 text-sm">Password</h6>
                                </label>
                                <input type="password" name="password" placeholder="Masukkan Password">
                                @if ($errors->has('password'))
                                    <span class="error text-danger mb-2">{{ $errors->first('password') }}</span>
                                @endif
                            </div>
                            {{-- -------------------------------- Akun -------------------------- --}}

                            <div class="row px-3 mb-4">
                                <div class="custom-control custom-checkbox custom-control-inline">
                                    <input id="chk1" type="checkbox" name="chk" class="custom-control-input">
                                    <label for="chk1" class="custom-control-label text-sm">Remember me</label>
                                </div>
                                <a href="#" class="ml-auto mb-0 text-sm">Forgot Password?</a>
                            </div>
                            <div class="row mb-3 px-3">
                                <button type="submit" class="btn btn-blue text-center">Login</button>
                            </div>
                        </form>

                        <div class="row mb-4 px-3 mb-5">
                            <small class="font-weight-bold">Belum Punya Akun?
                                <a href="{{ url('Register') }}" class="text-danger">Buat Akun</a></small>
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
