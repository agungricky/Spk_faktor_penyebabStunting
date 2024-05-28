@extends('website.index')
@section('content')
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
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard v1</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12 col-md-6">
                        <div class="card p-5">
                            <canvas id="myPieChart"></canvas>
                        </div>
                    </div>

                    <div class="col-sm-12 col-md-6">
                        <div class="card p-5">
                            <div style="width: 100%; margin: auto;">
                                <canvas id="myChart"></canvas>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                        <div class="card p-3">
                            <form action="{{ route('ResetHasil') }}" method="POST"
                                onsubmit="return confirm('Apakah Anda yakin ingin menghapus semua hasil input pengguna?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger w-25 mb-3">Hapus Semua Hasil input
                                    Pengguna</button>
                            </form>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Nama Orangtua</th>
                                        <th scope="col">Nama Anak</th>
                                        <th scope="col">Faktor penyebab</th>
                                        <th scope="col">Tanggal Terakhir input</th>
                                    </tr>
                                </thead>
                                <tbody class="table-group-divider">
                                    @php
                                        $no = 1;
                                    @endphp
                                    @foreach ($results as $item)
                                        <tr>
                                            <th scope="row">{{ $no++ }}</th>
                                            <td>{{ $item->Nama_ibu }}</td>
                                            <td>{{ $item->Nama_anak }}</td>
                                            <td>{{ $item->Fatror_penyebab }}</td>
                                            <td>{{ $item->Created_at }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
        // Ambil data dari PHP
        var dataFromServer = @json($data);

        // Siapkan labels dan data untuk Chart.js
        var labels = Object.keys(dataFromServer);
        var data = Object.values(dataFromServer);

        var ctx = document.getElementById('myPieChart').getContext('2d');
        var myPieChart = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: labels,
                datasets: [{
                    label: 'Faktor Penyebab',
                    data: data,
                    backgroundColor: [
                        'rgb(255, 99, 132)',
                        'rgb(54, 162, 235)',
                        'rgb(255, 205, 86)',
                        'rgb(90, 225, 16)',
                        'rgb(290, 252, 36)',
                        'rgb(0, 100, 86)',
                        'rgb(255, 99, 86)'
                    ]
                }]
            }
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var ctx = document.getElementById('myChart').getContext('2d');

            // Data dari server
            var groupedResults = @json($barChart);

            // Mengonversi object keys dan values ke dalam array untuk chart
            var labels = Object.keys(groupedResults);
            var values = Object.values(groupedResults);

            var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: labels,
                    datasets: [{
                        label: 'Jumlah Data',
                        data: values,
                        backgroundColor: 'rgba(54, 162, 235, 0.2)',
                        borderColor: 'rgba(54, 162, 235, 1)',
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        });
    </script>
@endsection
