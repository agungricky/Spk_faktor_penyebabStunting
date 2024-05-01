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
                {{-- Data Diri --}}
                <div class="card card-row card-secondary">
                    <div class="card-header">
                        <h3 class="card-title">Data</h3>
                    </div>
                    <div class="card-body">
                        {{-- <div class="card card-info card-outline">
                            <div class="card-header">
                                <h5 class="card-title">Admin | 3 Data</h5>
                                <div class="card-tools">
                                    <a href="{{ route('dataBidan') }}" class="btn btn-tool">
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
                                            <th scope="col">Posisi</th>
                                            <th scope="col">No Hp</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Rina</td>
                                            <td>Bidan Ibu Dan Anak</td>
                                            <td>081339291111</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="card card-primary card-outline">
                            <div class="card-header">
                                <h5 class="card-title">Kader | 20 Data</h5>
                                <div class="card-tools">
                                    <a href="{{ route('dataKader') }}" class="btn btn-tool">
                                        <span class="btn btn-tool btn-link px-2">#Kader</span><i class="fas fa-pen"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="card-body">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">First</th>
                                            <th scope="col">Last</th>
                                            <th scope="col">Handle</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>@mdo</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>Jacob</td>
                                            <td>Thornton</td>
                                            <td>@fat</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td colspan="2">Larry the Bird</td>
                                            <td>@twitter</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div> --}}

                        <div class="card card-primary card-outline">
                            <div class="card-header">
                                <h5 class="card-title">Pengguna | 201 Data</h5>
                                <div class="card-tools">
                                    <a href="{{ route('dataPengguna') }}" class="btn btn-tool">
                                        <span class="btn btn-tool btn-link px-2">#Pengguna</span><i class="fas fa-pen"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="card-body">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">First</th>
                                            <th scope="col">Last</th>
                                            <th scope="col">Handle</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>@mdo</td>
                                        </tr>
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
                                    <a href="#" class="btn btn-tool btn-link">#5</a>
                                    <a href="#" class="btn btn-tool">
                                        <i class="fas fa-pen"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="card-body">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                                    Aenean commodo ligula eget dolor. Aenean massa.
                                    Cum sociis natoque penatibus et magnis dis parturient montes,
                                    nascetur ridiculus mus.
                                </p>
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
                                    <a href="{{ route('dataBidan') }}" class="btn btn-tool">
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
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Rina</td>
                                            <td>Bidan Ibu & Anak</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>Puji</td>
                                            <td>Bidan Ahli Gizi</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td>Waraswati</td>
                                            <td>Bidan Umum</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="card card-primary card-outline">
                            <div class="card-header">
                                <h5 class="card-title">Akun Kader</h5>
                                <div class="card-tools">
                                    <a href="{{ route('dataKader') }}" class="btn btn-tool">
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
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Lingkungan</td>
                                            <td>Lingkungan.pdf</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>Kesehatan Ibu</td>
                                            <td>Kesehatan Ibu.pdf</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td>Kurag gizi saat hamil</td>
                                            <td>Kurag gizi saat hamil.pdf</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="card card-primary card-outline">
                            <div class="card-header">
                                <h5 class="card-title">Akun Pengguna | 203 Data</h5>
                                <div class="card-tools">
                                    <a href="{{ route('dataPengguna') }}" class="btn btn-tool">
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
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Lingkungan</td>
                                            <td>Lingkungan.pdf</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>Kesehatan Ibu</td>
                                            <td>Kesehatan Ibu.pdf</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td>Kurag gizi saat hamil</td>
                                            <td>Kurag gizi saat hamil.pdf</td>
                                        </tr>
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
