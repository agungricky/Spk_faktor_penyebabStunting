@extends('website.index')

@section('content')
    <div class="content-wrapper kanban">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <h1>Dashboard Admin</h1>
                    </div>
                    <div class="col-sm-6 d-none d-sm-block">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Kanban Board</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

        <section class="content pb-3">
            <div class="container-fluid h-100">
                {{-- Data Pengguna --}}
                <div class="card card-row card-secondary">
                    <div class="card-header">
                        <h3 class="card-title">Data</h3>
                    </div>
                    <div class="card-body">
                        <div class="card card-primary card-outline">
                            <div class="card-header">
                                <h5 class="card-title">Pengguna | {{ $banyakPengguna }} Data</h5>
                                <div class="card-tools">
                                    <a href="{{ url('Pengguna') }}" class="btn btn-tool">
                                        <span class="btn btn-tool btn-link px-2">#Pengguna</span><i class="fas fa-pen"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="card-body">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Nama Anak</th>
                                            <th scope="col">Nama Ibu</th>
                                            <th scope="col">Posyandu</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $no = 1;
                                        @endphp
                                        @foreach ($dataPengguna as $item)
                                            <tr>
                                                <th scope="row">{{ $no++ }}</th>
                                                <td>{{ $item->Nama_anak }}</td>
                                                <td>{{ $item->Nama_ibu }}</td>
                                                <td>{{ $item->Nama_posyandu }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Diagram presentase --}}
                <div class="card card-row card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Diagram Presentase</h3>
                    </div>
                    <div class="card-body">
                        <div class="card card-primary card-outline">
                            <div class="card-header">
                                <h5 class="card-title">Kesehatan masyarakat</h5>
                                <div class="card-tools">
                                    <a href="{{ url('Chart') }}" class="btn btn-tool">
                                        <span class="btn btn-tool btn-link px-2">#Chart</span><i class="fas fa-pen"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="card-body">
                                <img src="public/pages/charts/pie.jpg" alt="Pie" width="100%">
                                <p class="text-center py-3">Presetase hasil input pengguna direpresentasikan melalui Chart pie agar lebih mudah di pahami dan lebih efisien.</p>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Data Solusi --}}
                <div class="card card-row card-info">
                    <div class="card-header">
                        <h3 class="card-title">Solusi</h3>
                    </div>
                    <div class="card-body">
                        <div class="card card-info card-outline">
                            <div class="card-header">
                                <h5 class="card-title">Data Solusi</h5>
                                <div class="card-tools">
                                    <a href="{{ route('Solusi') }}" class="btn btn-tool">
                                        <span class="btn btn-tool btn-link px-2">#Solusi</span><i class="fas fa-pen"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="card-body">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Faktor penyebab</th>
                                            <th scope="col">Nama File</th>
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
                                                <td>{{ isset($item->Nama_file) ? $item->Nama_file : '-' }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Data Akun --}}
                <div class="card card-row card-warning">
                    <div class="card-header">
                        <h3 class="card-title">Akun</h3>
                    </div>

                    <div class="card-body">
                        <div class="card card-info card-outline">
                            <div class="card-header">
                                <h5 class="card-title">Akun Admin</h5>
                                <div class="card-tools">
                                    <a href="{{ url('Data-Bidan') }}" class="btn btn-tool">
                                        <span class="btn btn-tool btn-link px-2">#Bidan</span><i class="fas fa-pen"></i>
                                    </a>
                                </div>
                            </div>

                            <div class="card-body">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Nama</th>
                                            <th scope="col">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $no = 1;
                                        @endphp
                                        @foreach ($bidan as $item)
                                            <tr>
                                                <th scope="row">{{ $no++ }}</th>
                                                <td>{{ $item->username }}</td>
                                                <td>{{ $item->Role }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="card card-primary card-outline">
                            <div class="card-header">
                                <h5 class="card-title">Akun Kader</h5>
                                <div class="card-tools">
                                    <a href="{{ url('Data-Kader') }}" class="btn btn-tool">
                                        <span class="btn btn-tool btn-link px-2">#Kader</span><i class="fas fa-pen"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="card-body">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Nama</th>
                                            <th scope="col">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $no = 1;
                                        @endphp
                                        @foreach ($kader as $item)
                                            <tr>
                                                <th scope="row">{{ $no++ }}</th>
                                                <td>{{ $item->username }}</td>
                                                <td>{{ $item->Role }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="card card-primary card-outline">
                            <div class="card-header">
                                <h5 class="card-title">Akun Pengguna | 203 Data</h5>
                                <div class="card-tools">
                                    <a href="{{ url('Data-Pengguna') }}" class="btn btn-tool">
                                        <span class="btn btn-tool btn-link px-2">#Pengguna</span><i
                                            class="fas fa-pen"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="card-body">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Nama</th>
                                            <th scope="col">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $no = 1;
                                        @endphp
                                        @foreach ($pengguna as $item)
                                            <tr>
                                                <th scope="row">{{ $no++ }}</th>
                                                <td>{{ $item->username }}</td>
                                                <td>{{ $item->Role }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
