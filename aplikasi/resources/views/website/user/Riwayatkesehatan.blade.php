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

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        {{-- Card Menu cepat --}}
        @include('website.user.Menucepat')
        {{-- Card Menu cepat --}}
      </div>
    </section>

    <!-- card -->
    <section class="content mt-3">
      <div class="container-fluid">
        <div class="table-responsive">
          <table class="table align-middle text-center">
            <thead>
              <tr>
                <th>No</th>
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
              <tr>
                <td>1</td>
                <td>35%</td>
                <td>20%</td>
                <td>20%</td>
                <td>20%</td>
                <td>20%</td>
                <td>20%</td>
                <td>20%</td>
                <td class="bg-danger">Lingkungan</td>
              </tr>
              <tr>
                <td>2</td>
                <td>32%</td>
                <td>40%</td>
                <td>20%</td>
                <td>10%</td>
                <td>25%</td>
                <td>22%</td>
                <td>20%</td>
                <td class="bg-danger">Pola Asuh</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </section>
    <!-- /card -->
  </div>
@endsection
