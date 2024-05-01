@extends('website.index')
@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 fw-bold">#TABEL INPUTAN</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Proses Hasil</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="embed-responsive embed-responsive-16by9">
            <embed class="embed-responsive-item" src="{{ asset('public/' . $parameter . '.pdf') }}" type="application/pdf">
        </div>

    </div>
@endsection
