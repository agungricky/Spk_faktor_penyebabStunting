@extends('website.index')

@section('content')
    <!-- Content Wrapper. Contains page content -->
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
                            <li class="breadcrumb-item"><a href="{{ route('Home') }}">Home</a></li>
                            <li class="breadcrumb-item active">Riwayat kesehatan</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- card -->
        <section class="content mt-3">
            <div class="container-fluid">
                <div class="table-responsive">
                    <table class="table table-bordered text-center">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Waktu Input</th>
                                <th>Lingkungan</th>
                                <th>Pola Asuh</th>
                                <th>Kesehatan Anak</th>
                                <th>Faktor Kesehatan Ibu</th>
                                <th>Pengetahuan Orangtua</th>
                                <th>Kekurangan Gizi saat Hamil</th>
                                <th>Pola Makan Balita</th>
                                <th>Hasil</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $no = 1;
                            @endphp
                            @foreach ($query as $item)
                                <tr>
                                    <td>{{$no++}}</td>
                                    <td>{{$item->Created_at}}</td>
                                    <td>{{$item->Lingkungan}} %</td>
                                    <td>{{$item->Pola_asuh}} %</td>
                                    <td>{{$item->Kesehatan_anak}} %</td>
                                    <td>{{$item->Faktor_kesehatan_ibu}} %</td>
                                    <td>{{$item->Pengetahuan_orangtua}} %</td>
                                    <td>{{$item->Kekurangan_Gizi_saat_Hamil}} %</td>
                                    <td>{{$item->Pola_Makanbalita}} %</td>
                                    <td class="bg-danger">{{$item->Fatror_penyebab}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
        <!-- /card -->
    </div>
@endsection
