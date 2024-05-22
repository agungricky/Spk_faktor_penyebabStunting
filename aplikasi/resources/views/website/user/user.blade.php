@extends('website.index')

@section('content')
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">

                <div class="row">
                    <div class="col">
                        <nav aria-label="breadcrumb" class="bg-body-tertiary rounded-3 p-3 mb-2">
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item text-primary">Home</li>
                                <li class="breadcrumb-item text-primary">User</li>
                                <li class="breadcrumb-item active" aria-current="page">Data diri pengguna</li>
                            </ol>
                        </nav>
                    </div>
                </div>

                <div class="px-3">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="card mb-4">
                                <div class="card-body text-center">
                                    @if (isset($query->Foto))
                                        <img src="{{ asset('public/Register_image/'. $query->Foto) }}"
                                         alt="avatar" class="rounded-circle img-fluid" style="width: 150px;">
                                    @else
                                        <img src="{{ asset('public/Register_image/default.jpg') }}"
                                         alt="avatar" class="rounded-circle img-fluid" style="width: 150px;">
                                    @endif
                                    
                                    <h5 class="my-3">{{ $query->Nama_anak }}</h5>
                                    <p class="text-muted mb-1">Umur : {{ $query->Usia }} Tahun</p>
                                    <p class="text-muted mb-4">Posyandu : {{ $query->Nama_posyandu }}</p>
                                    <div class="d-flex justify-content-center mb-2">
                                        <a href="{{ url('Edit-Profile', ['iddataPengguna'=>$query->iddataPengguna, 'Akun_idAkun' =>$query->Akun_idAkun]) }}">
                                            <button type="button" data-mdb-button-init data-mdb-ripple-init
                                                class="btn btn-primary">Edit Profile</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-8">
                            <div class="card mb-4">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <p class="mb-0">NIK <span class="d-inline d-md-none">: </span></p>
                                        </div>
                                        <div class="col-sm-9">
                                            <p class="text-muted mb-0"><span class="d-none d-md-inline">: </span>{{ $query->Nik }}</p>
                                        </div>
                                    </div>
                                    <hr class="border border-secondary border-1 opacity-90">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <p class="mb-0">Nama Ibu <span class="d-inline d-md-none">: </span></p>
                                        </div>
                                        <div class="col-sm-9">
                                            <p class="text-muted mb-0"><span class="d-none d-md-inline">: </span> {{ $query->Nama_ibu }}</p>
                                        </div>
                                    </div>
                                    <hr class="border border-secondary border-1 opacity-90">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <p class="mb-0">Alamat Lengkap <span class="d-inline d-md-none">: </span></p>
                                        </div>
                                        <div class="col-sm-9">
                                            <p class="text-muted mb-0"><span class="d-none d-md-inline">: </span> {{ $query->Alamat }}</p>
                                        </div>
                                    </div>
                                    <hr class="border border-secondary border-1 opacity-90">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <p class="mb-0">Desa <span class="d-inline d-md-none">: </span></p>
                                        </div>
                                        <div class="col-sm-9">
                                            <p class="text-muted mb-0"><span class="d-none d-md-inline">: </span> {{ $query->Desa }}</p>
                                        </div>
                                    </div>
                                    <hr class="border border-secondary border-1 opacity-90">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <p class="mb-0">Kecamatan <span class="d-inline d-md-none">: </span></p>
                                        </div>
                                        <div class="col-sm-9">
                                            <p class="text-muted mb-0"><span class="d-none d-md-inline">: </span> {{ $query->Kecamatan }}</p>
                                        </div>
                                    </div>
                                    <hr class="border border-secondary border-1 opacity-90">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <p class="mb-0">Rt / Rw <span class="d-inline d-md-none">: </span></p>
                                        </div>
                                        <div class="col-sm-9">
                                            <p class="text-muted mb-0"><span class="d-none d-md-inline">: </span> {{ $query->Rt }} / {{ $query->Rw }}</p>
                                        </div>
                                    </div>
                                    <hr class="border border-secondary border-1 opacity-90">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <p class="mb-0">Nomor Hp <span class="d-inline d-md-none">: </span></p>
                                        </div>
                                        <div class="col-sm-9">
                                            <p class="text-muted mb-0"><span class="d-none d-md-inline">: </span> {{ $query->No_Hp }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
