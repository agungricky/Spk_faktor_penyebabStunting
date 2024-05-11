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
                <form action="{{ route('update', $query->idSolusi) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div class="row">
                        <div class="col-md-12">

                            @if (session('Error'))
                                <div class="alert alert-danger">
                                    {{ session('Error') }}
                                </div>
                            @endif

                            <div class="card card-danger">
                                <div class="card-header">
                                    <h3 class="card-title">Input Solusi</h3>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <div class="mb-3">
                                            <label class="form-label">Faktor Penyebab</label>
                                            <input type="hidden" name="Faktorpenyebab"
                                                value="{{ $query->Faktor_penyebab }}">
                                            <input type="text" class="form-control" id="exampleInputEmail1"
                                                value="{{ $query->Faktor_penyebab }}" name="Faktorpenyebab" disabled>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="mb-4">
                                            <label class="form-label">Berkas File</label>
                                            <input class="form-control" type="file" id="formFile" name="file">
                                        </div>
                                    </div>
                                    <div class="form-group d-grid gap-2">
                                        <button class="btn btn-primary" type="submit">Upload</button>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                    </div>
                </form>
            </div>
            </form>
    </div>
    </section>


    </div>
@endsection
