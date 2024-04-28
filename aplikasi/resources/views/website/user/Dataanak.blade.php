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
              <li class="breadcrumb-item active">Data Anak</li>
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
        <div class="row justify-content-center">
          <div class="col-sm-4 p-2">
            <div class="card">
              <div class="card-body">
                <div class="text-center">
                  <img src="https://w7.pngwing.com/pngs/184/113/png-transparent-user-profile-computer-icons-profile-heroes-black-silhouette-thumbnail.png" class="img-thumbnail" alt="..." style="width: 150px">
                </div>
      
                <table class="m-auto text-start">
                  <tr>
                    <td> <div class="fw-bold">Nama &ensp; &ensp; &ensp; &ensp; &ensp; : </div></td>
                    <td>Ika Maria Daniati</td>
                  </tr>
                  <tr>
                    <td class="fw-bold">Jenis Kelamin : </td>
                    <td>Perempuan</td>
                  </tr>
                  <tr>
                    <td class="fw-bold">Usia &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; : </td>
                    <td>2 Tahun</td>
                  </tr>
                </table>
              </div>
            </div>
          </div>
          <div class="col-sm-4 p-2">
            <div class="card">
              <div class="card-body">
                <div class="text-center">
                  <img src="https://w7.pngwing.com/pngs/184/113/png-transparent-user-profile-computer-icons-profile-heroes-black-silhouette-thumbnail.png" class="img-thumbnail" alt="..." style="width: 150px">
                </div>
      
                <table class="m-auto text-start">
                  <tr>
                    <td> <div class="fw-bold">Nama &ensp; &ensp; &ensp; &ensp; &ensp; : </div></td>
                    <td>Ika Maria Daniati</td>
                  </tr>
                  <tr>
                    <td class="fw-bold">Jenis Kelamin : </td>
                    <td>Perempuan</td>
                  </tr>
                  <tr>
                    <td class="fw-bold">Usia &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; : </td>
                    <td>2 Tahun</td>
                  </tr>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      
    </section>
    <!-- /card -->
  </div>
@endsection
