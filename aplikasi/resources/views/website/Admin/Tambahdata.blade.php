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
                <div class="col-12">
                  <div class="card">
                    <div class="card-header">
                      <h3 class="card-title">Responsive Hover Table</h3>
        
                      <div class="card-tools">
                        <div class="input-group input-group-sm" style="width: 150px;">
                          <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
        
                          <div class="input-group-append">
                            <button type="submit" class="btn btn-default">
                              <i class="fas fa-search"></i>
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                      <table class="table table-hover text-nowrap">
                        <thead>
                          <tr>
                            <th>No</th>
                            <th>Nik</th>
                            <th>Nama Ayah</th>
                            <th>Nama Ibu</th>
                            <th>Nama Anak</th>
                            <th>No_Hp</th>
                            <th>Alamat</th>
                            <th>Rt</th>
                            <th>Rw</th>
                            <th>Posyandu</th>
                            <th>Aksi</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>1</td>
                            <td>018282911</td>
                            <td>Anton</td>
                            <td>Dewi</td>
                            <td>Sintia Rahmawati</td>
                            <td>08133098822</td>
                            <td>Ds. Tanjung Tani</td>
                            <td>001</td>
                            <td>004</td>
                            <td>Kamboja</td>
                            <td></td>
                          </tr>
                          <tr>
                            <td>2</td>
                            <td>9182828</td>
                            <td>Rangga</td>
                            <td>Dita</td>
                            <td>nurul</td>
                            <td>07192828</td>
                            <td>Ds. tanjung Tani</td>
                            <td>001</td>
                            <td>004</td>
                            <td>Kamboja</td>
                            <td></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <!-- /.card-body -->
                  </div>
                  <!-- /.card -->
                </div>
              </div>
        </div>
      </section>

      
  </div>
@endsection