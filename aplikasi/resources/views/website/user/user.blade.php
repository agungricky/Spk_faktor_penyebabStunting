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
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">User</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">

                {{-- Informasi Status --}}
                <div class="row">
                    <div class="col-md-12">
                        <div class="alert alert-success alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <h5><i class="icon fas fa-check"></i>STATUS SEHAT!!!</h5>
                            Terimakasih bunda Telah menjaga kesehatan <span class="fw-bold">ika maria daniati</span>.
                        </div>
                    </div>
                </div>

                {{-- Card Menu cepat --}}
                @include('website.user.Menucepat')
                {{-- Card Menu cepat --}}

                <!-- Main row -->
                {{-- <div class="row">     
                   
        </div> --}}
            </div>
        </section>

        <!-- card -->
        <section class="content mt-3">
            <div class="container-fluid">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Grafik KMS</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="chart">
                            <div id="areaChart"
                                style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /card -->
    </div>

    <script src="{{ asset('/public/plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('/public/plugins/uplot/uPlot.iife.min.js') }}"></script>

    <?php
    echo '<script>';
    echo "$(function () {";
    echo 'function getSize(elementId) {';
    echo 'return {';
    echo 'width: document.getElementById(elementId).offsetWidth,';
    echo 'height: document.getElementById(elementId).offsetHeight,';
    echo '}';
    echo '}';
    
    echo 'let data = [';
    echo '[0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24],';
    echo '[0, 10, 20, 30, 40, 50, 55],'; // data untuk Laki-laki
    echo '[0, 15, 30, 45, 60, 75, 90],'; // data untuk Perempuan
    echo '[0, 5, 10, 15, 20, 25, 30],'; // data untuk Normal
    echo '];';
    
    echo 'const optsAreaChart = {';
    echo "...getSize('areaChart'),";
    echo 'scales: {';
    echo 'x: {';
    echo 'time: false,';
    echo '},';
    echo 'y: {';
    echo 'range: [0, 100],';
    echo '},';
    echo '},';
    echo 'series: [';
    echo '{},'; // default series
    echo '{'; // series untuk Laki-laki
    echo "stroke: 'blue',";
    echo '},';
    echo '{'; // series untuk Perempuan
    echo "stroke: 'pink',";
    echo '},';
    echo '{'; // series untuk Normal
    echo "stroke: 'grey',";
    echo '},';
    echo '],';
    echo '};';
    
    echo "let areaChart = new uPlot(optsAreaChart, data, document.getElementById('areaChart'));";
    
    echo 'const optsLineChart = {';
    echo "...getSize('lineChart'),";
    echo 'scales: {';
    echo 'x: {';
    echo 'time: false,';
    echo '},';
    echo 'y: {';
    echo 'range: [0, 100],';
    echo '},';
    echo '},';
    echo 'series: [';
    echo '{},'; // default series
    echo '{'; // series untuk Laki-laki
    echo "fill: 'transparent',";
    echo "stroke: 'blue',";
    echo 'width: 5,';
    echo '},';
    echo '{'; // series untuk Perempuan
    echo "fill: 'transparent',";
    echo "stroke: 'pink',";
    echo 'width: 5,';
    echo '},';
    echo '{'; // series untuk Normal
    echo "fill: 'transparent',";
    echo "stroke: 'grey',";
    echo 'width: 5,';
    echo '},';
    echo '],';
    echo '};';
    
    echo "let lineChart = new uPlot(optsLineChart, data, document.getElementById('lineChart'));";
    
    echo "window.addEventListener('resize', e => {";
    echo "areaChart.setSize(getSize('areaChart'));";
    echo "lineChart.setSize(getSize('lineChart'));";
    echo '});';
    echo '})';
    echo '</script>';
    ?>
@endsection
