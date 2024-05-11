@extends('website.index')
@section('content')
    <div class="content-wrapper">
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

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Data Akun</h3>
                            </div>

                            <form action="{{ route('Update_Akun', ['id'=>$query->idAkun]) }}" method="POST">
                                @csrf
                                @method('PATCH')
                                <div class="card-body">
                                    <div class="form-group">
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Username</label>
                                            <input type="text" class="form-control" id="username"
                                                aria-describedby="username" placeholder="Masukan Username" name="username" value="{{isset($query->Username)? $query->Username : ''}}">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Password</label>
                                            <input type="text" class="form-control" id="password"
                                                aria-describedby="password" placeholder="Masukan Password" name="password" value="{{isset($query->Password)? $query->Password : ''}}">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1" class="form-label">Role</label>
                                        <select class="form-select" aria-label="Default select example" name="role" disabled>
                                            <option disabled>Pilih Role</option>
                                            <option value="Bidan" {{isset($query->Role) && $query->Role == 'Bidan'?  'selected' : ''}}>Bidan</option>
                                            <option value="Kader" {{isset($query->Role) && $query->Role == 'Kader'?  'selected' : ''}}>Kader</option>
                                            {{-- <option value="Pengguna" {{isset($query->Role) && $query->Role == 'Pengguna'?  'selected' : ''}}>Pengguna</option> --}}
                                        </select>
                                        <input type="hidden" name="role" value="{{$query->Role}}">
                                    </div>
                                </div>
                                

                                <div class="card-footer">
                                    <div class="d-grid gap-2">
                                        <button class="btn btn-success" type="submit">Kirim</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>


    </div>
@endsection
