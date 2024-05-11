@extends('website.index')

@section('content')
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">

                <div class="row">
                    <div class="col">
                        <nav aria-label="breadcrumb" class="bg-body-tertiary rounded-3 p-3 mb-2">
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">User</a></li>
                                <li class="breadcrumb-item active" aria-current="page">User Profile</li>
                            </ol>
                        </nav>
                    </div>
                </div>

                <div class="px-3">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="card mb-4">
                                <div class="card-body text-center">
                                    <img src="{{ url('https://static.promediateknologi.id/crop/17x28:718x775/0x0/webp/photo/p2/74/2024/03/11/b59a225de4a04af870907663ce0de271-2703384518.jpg') }}"
                                        alt="avatar" class="rounded-circle img-fluid" style="width: 150px;">
                                    <h5 class="my-3">{{ $query->Nama_anak }}</h5>
                                    <p class="text-muted mb-1">Umur : {{ $query->Usia }} Tahun</p>
                                    <p class="text-muted mb-4">Posyandu : {{ $query->Nama_posyandu }}</p>
                                    <div class="d-flex justify-content-center mb-2">
                                        <a href="{{ url('Edit-Profile') }}">
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
                                            <p class="mb-0">NIK</p>
                                        </div>
                                        <div class="col-sm-9">
                                            <p class="text-muted mb-0">: {{ $query->Nik }}</p>
                                        </div>
                                    </div>
                                    <hr class="border border-secondary border-1 opacity-90">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <p class="mb-0">Nama Ibu</p>
                                        </div>
                                        <div class="col-sm-9">
                                            <p class="text-muted mb-0">: {{ $query->Nama_ibu }}</p>
                                        </div>
                                    </div>
                                    <hr class="border border-secondary border-1 opacity-90">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <p class="mb-0">Alamat Lengkap</p>
                                        </div>
                                        <div class="col-sm-9">
                                            <p class="text-muted mb-0">: {{ $query->Alamat }}</p>
                                        </div>
                                    </div>
                                    <hr class="border border-secondary border-1 opacity-90">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <p class="mb-0">Desa</p>
                                        </div>
                                        <div class="col-sm-9">
                                            <p class="text-muted mb-0">: {{ $query->Desa }}</p>
                                        </div>
                                    </div>
                                    <hr class="border border-secondary border-1 opacity-90">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <p class="mb-0">Kecamatan</p>
                                        </div>
                                        <div class="col-sm-9">
                                            <p class="text-muted mb-0">: {{ $query->Kecamatan }}</p>
                                        </div>
                                    </div>
                                    <hr class="border border-secondary border-1 opacity-90">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <p class="mb-0">Rt / Rw</p>
                                        </div>
                                        <div class="col-sm-9">
                                            <p class="text-muted mb-0">: {{ $query->Rt }} / {{ $query->Rw }}</p>
                                        </div>
                                    </div>
                                    <hr class="border border-secondary border-1 opacity-90">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <p class="mb-0">Nomor Hp</p>
                                        </div>
                                        <div class="col-sm-9">
                                            <p class="text-muted mb-0">: {{ $query->No_Hp }}</p>
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
