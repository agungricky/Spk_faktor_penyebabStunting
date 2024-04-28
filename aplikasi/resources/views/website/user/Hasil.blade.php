@extends('website.index')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 fw-bold">#TABEL INPUTAN</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Proses Hasil</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-6">
                        <div class="card">
                            <!-- /.card-header -->
                            <div class="card-body table-responsive p-0">
                                <table class="table table-bordered border-primary text-nowrap">
                                    <thead>
                                        <tr>
                                            <th class="custom-col-no">No</th>
                                            <th>Inputan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $no = 1;
                                        @endphp
                                        @for ($i = 0; $i < 14; $i++)
                                            <tr>
                                                <td>{{ $no++ }}</td>
                                                <td>{{ $Nilai_input[$i] }}</td>
                                            </tr>
                                        @endfor
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <div class="col-6">
                        <div class="card">
                            <!-- /.card-header -->
                            <div class="card-body table-responsive p-0">
                                <table class="table table-bordered border-primary text-nowrap">
                                    <thead>
                                        <tr>
                                            <th class="custom-col-no">No</th>
                                            <th>Inputan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $no = 15;
                                        @endphp
                                        @for ($i = 14; $i < 28; $i++)
                                            <tr>
                                                <td>{{ $no++ }}</td>
                                                <td>{{ $Nilai_input[$i] }}</td>
                                            </tr>
                                        @endfor
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <div class="col-12">
                        <h2 class="mb-3 fw-bold">#TABEL URGENSI PERTAYAAN</h2>
                        <div class="card">
                            <div class="card-body table-responsive p-0">
                                <table class="table table-bordered border-primary text-nowrap text-center">
                                    <thead>
                                        <tr>
                                            <th class="custom-col-no">Kepentingan Pertanyaan</th>
                                            <td>Sangat Penting</td>
                                            <td>Penting</td>
                                            <td>Kurang Penting</td>
                                            <td>Tidak Penting</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th>Nilai</th>
                                            <td>40%</td>
                                            <td>30%</td>
                                            <td>20%</td>
                                            <td>10%</td>
                                        </tr>
                                        <tr>
                                            <th>Angka Desimal</th>
                                            <td>0.4</td>
                                            <td>0.3</td>
                                            <td>0.2</td>
                                            <td>0.1</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <h2 class="mb-3 fw-bold">#MERUBAH NILAI INPUTAN</h2>
                        <div class="card">
                            <div class="card-body table-responsive p-0">
                                <table class="table table-bordered border-primary text-nowrap text-center">
                                    <thead>
                                        <tr>
                                            <th class="custom-col-no">Inputan pengguna</th>
                                            <td>Sangat Benar</td>
                                            <td>Benar</td>
                                            <td>Kurang Benar</td>
                                            <td>Tidak Benar</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th>Nilai</th>
                                            <td>4</td>
                                            <td>3</td>
                                            <td>2</td>
                                            <td>1</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-body table-responsive p-0">
                                <table class="table table-bordered border-primary text-nowrap text-center">
                                    <thead>
                                        <tr>
                                            <th class="custom-col-no">No</th>
                                            <th>Alternatif</th>
                                            <th>U1</th>
                                            <th>U2</th>
                                            <th>U3</th>
                                            <th>U4</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th>1</th>
                                            <td class="text-start">Lingkungan</td>
                                            <td>{{ $jawaban[0] }}</td>
                                            <td>{{ $jawaban[1] }}</td>
                                            <td>{{ $jawaban[2] }}</td>
                                            <td>{{ $jawaban[3] }}</td>
                                        </tr>
                                        <tr>
                                            <th>2</th>
                                            <td class="text-start">Pola Asuh</td>
                                            <td>{{ $jawaban[4] }}</td>
                                            <td>{{ $jawaban[5] }}</td>
                                            <td>{{ $jawaban[6] }}</td>
                                            <td>{{ $jawaban[7] }}</td>
                                        </tr>
                                        <tr>
                                            <th>3</th>
                                            <td class="text-start">Kesehatan Anak</td>
                                            <td>{{ $jawaban[8] }}</td>
                                            <td>{{ $jawaban[9] }}</td>
                                            <td>{{ $jawaban[10] }}</td>
                                            <td>{{ $jawaban[11] }}</td>
                                        </tr>
                                        <tr>
                                            <th>4</th>
                                            <td class="text-start">Faktor kesehatan ibu </td>
                                            <td>{{ $jawaban[12] }}</td>
                                            <td>{{ $jawaban[13] }}</td>
                                            <td>{{ $jawaban[14] }}</td>
                                            <td>{{ $jawaban[15] }}</td>
                                        </tr>
                                        <tr>
                                            <th>5</th>
                                            <td class="text-start">Pengetahuan orangtua</td>
                                            <td>{{ $jawaban[16] }}</td>
                                            <td>{{ $jawaban[17] }}</td>
                                            <td>{{ $jawaban[18] }}</td>
                                            <td>{{ $jawaban[19] }}</td>
                                        </tr>
                                        <tr>
                                            <th>6</th>
                                            <td class="text-start">Kekurangan gizi saat hamil</td>
                                            <td>{{ $jawaban[20] }}</td>
                                            <td>{{ $jawaban[21] }}</td>
                                            <td>{{ $jawaban[22] }}</td>
                                            <td>{{ $jawaban[23] }}</td>
                                        </tr>
                                        <tr>
                                            <th>7</th>
                                            <td class="text-start">Pola makan balita</td>
                                            <td>{{ $jawaban[24] }}</td>
                                            <td>{{ $jawaban[25] }}</td>
                                            <td>{{ $jawaban[26] }}</td>
                                            <td>{{ $jawaban[27] }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <h2 class="mb-3 fw-bold">#PERHITUNGAN NILAI WSM</h2>
                        <div class="alert alert-info" role="alert">
                            <span class="text-light ms-2"> * Mencari nilai Hasil : ( Inputan pengguna * Urgensi pertanyaan
                                ) </span> <br>
                            <span class="text-light ms-2"> * Mengitung presentase : ( Nilai per faktor penyebab / Total
                                Hasil * 100 ) </span>
                        </div>

                        <div class="card">
                            <div class="card-body table-responsive p-0">
                                <table class="table table-bordered border-primary text-nowrap text-center">
                                    <thead>
                                        <tr>
                                            <th>Faktor Penyebab (Presentase)</th>
                                            <th>Perhitungan</th>
                                            <th>Hasil</th>
                                            <th>Ranking</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $no = 1;
                                        @endphp
                                        @foreach ($data as $item)
                                            <tr>
                                                <td class="text-start">{{ $item[0] }} (
                                                    {{ number_format($item[3], 1) }}% )</td>
                                                <td>
                                                    {{ $item[1] }}
                                                </td>
                                                <td>
                                                    {{ $item[2] }}
                                                </td>
                                                <td>{{ $no++ }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="alert alert-warning" role="alert">
                            Tampaknya Faktor <span class="fw-bold text-dark">{{$data[0][0]}}</span> Menjadi penyebab utama anak beresiko stunting, Untuk melihat Tips Klik <a href="Lingkungan" class="fw-bold text-dark">({{$data[0][0]}})</a>
                        </div>

                    </div>
                </div>
            </div>
        </section>


    </div>
@endsection
