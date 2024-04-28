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
              <li class="breadcrumb-item active">Riwayat imunisasi</li>
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
        <table class="table table-dark table-striped text-center">
          <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Umur (Tahun)</th>
            <th>jenis Vaksin</th>
          </tr>
          <tr>
            <td>1</td>
            <td>Anggi Putri</td>
            <td>Perempuan</td>
            <td>2</td>
            <td>Campak Rubela</td>
          </tr>
          <tr>
            <td>2</td>
            <td>Anggi Putri</td>
            <td>Perempuan</td>
            <td>2</td>
            <td>Coba coba</td>
          </tr>
        </table>
      </div>
    </section>
    <!-- /card -->
  </div>
@endsection
