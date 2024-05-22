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

                            <form action="{{ route('input') }}" method="POST">
                                @csrf
                                {{-- @method('PACTH') --}}
                                <div class="card-body">
                                    <div class="form-group">
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Username</label>
                                            <input type="text" class="form-control" id="username"
                                                aria-describedby="username" placeholder="Masukan Username" name="username">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Password</label>
                                            <input type="text" class="form-control" id="password"
                                                aria-describedby="password" placeholder="Masukan Password" name="password">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Email</label>
                                            <input type="text" class="form-control" id="email"
                                                aria-describedby="email" placeholder="Masukan Email" name="email">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1" class="form-label">Role</label>
                                        <select class="form-select" aria-label="Default select example" name="role" disabled>
                                            <option disabled>Pilih Role</option>
                                            <option value="Bidan" {{isset($id) && $id == 'Bidan'? 'selected' : ''}}>Bidan</option>
                                            <option value="Kader" {{isset($id) && $id == 'Kader'? 'selected' : ''}}>Kader</option>                                            
                                        </select>
                                        <input type="hidden" name="role" value="{{ $id }}">
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
