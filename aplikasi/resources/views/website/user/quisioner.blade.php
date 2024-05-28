@extends('website.index')

@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Analisa Faktor Penyebab Stunting</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('Home') }}">Home</a></li>
                            <li class="breadcrumb-item active">Quisioner</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <!-- general form elements -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Ada 28 Pertanyaan yang Harus di isi ... </h3>

                            </div>

                            <form method="POST" action="{{ route('proses') }}">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        {{-- 1 --}}
                                        <div class="alert alert-light shadow-sm bg-body-tertiary py-3 rounded"
                                            role="alert">
                                            @if ($errors->has('p1'))
                                                <span class="error text-danger mb-2 bg-danger px-2">
                                                    {{ $errors->first('p1') }}
                                                </span>
                                            @endif
                                            <label>1. Apakah tempat tinggal saat ini dekat dengan
                                                pencemaran udara seperti TPA, Asap dari
                                                industri pabrik, dan Peternakan?</label>
                                            <br>
                                            <div class="d-flex flex-column flex-sm-row justify-content-evenly">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input border border-primary" type="radio"
                                                        name="p1" id="radio1.1" value="A"
                                                        {{ old('p1') == 'A' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="radio1.1">A) Jarak 0 - 500
                                                        Meter</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input border border-primary" type="radio"
                                                        name="p1" id="radio1.2" value="B"
                                                        {{ old('p1') == 'B' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="radio1.2">B) Jarak 500 - 1000
                                                        Meter</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input border border-primary" type="radio"
                                                        name="p1" id="radio1.3" value="C"
                                                        {{ old('p1') == 'C' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="radio1.3">C) Jarak 1 - 2 Km
                                                    </label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input border border-primary" type="radio"
                                                        name="p1" id="radio1.4" value="D"
                                                        {{ old('p1') == 'D' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="radio1.4">D) Jarak > 2 Km</label>
                                                </div>
                                            </div>
                                        </div>

                                        {{-- 2 --}}
                                        <div class="alert alert-light shadow-sm bg-body-tertiary py-3 rounded"
                                            role="alert">
                                            @if ($errors->has('p2'))
                                                <span class="error text-danger mb-2 bg-danger px-2">
                                                    {{ $errors->first('p2') }}
                                                </span><br>
                                            @endif
                                            <label>2. Apakah rumah dekat dengan sungai dan persawahan?</label> <br>

                                            <div class="d-flex flex-column flex-sm-row justify-content-evenly">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input border border-primary" type="radio"
                                                        name="p2" id="radio2.1" value="A"
                                                        {{ old('p2') == 'A' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="radio2.1">A) Jarak 0 - 250
                                                        Meter</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input border border-primary" type="radio"
                                                        name="p2" id="radio2.2" value="B"
                                                        {{ old('p2') == 'B' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="radio2.2">B) Jarak 250 - 500
                                                        Meter</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input border border-primary" type="radio"
                                                        name="p2" id="radio2.3" value="C"
                                                        {{ old('p2') == 'C' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="radio2.3">C) Jarak 500 - 1000
                                                        Meter</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input border border-primary" type="radio"
                                                        name="p2" id="radio2.4" value="D"
                                                        {{ old('p2') == 'D' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="radio2.4">D) Jarak > 1 Km</label>
                                                </div>
                                            </div>
                                        </div>

                                        {{-- 3 --}}
                                        <div class="alert alert-light shadow-sm bg-body-tertiary py-3 rounded"
                                            role="alert">
                                            @if ($errors->has('p3'))
                                                <span class="error text-danger mb-2 bg-danger px-2">
                                                    {{ $errors->first('p3') }}
                                                </span>
                                                <br>
                                            @endif
                                            <label>3. Apakah tempat tinggal saat ini mudah dalam mengakses layanan kesehatan
                                                ?</label>
                                            <div class="d-flex flex-column flex-sm-row justify-content-evenly">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input border border-primary" type="radio"
                                                        name="p3" id="radio3.1" value="A"
                                                        {{ old('p3') == 'A' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="radio3.1">A) Sangat Sulit & Butuh
                                                        Solusi
                                                    </label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input border border-primary" type="radio"
                                                        name="p3" id="radio3.2" value="B"
                                                        {{ old('p3') == 'B' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="radio3.2">B) Sulit & Upaya
                                                        Ekstra</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input border border-primary" type="radio"
                                                        name="p3" id="radio3.3" value="C"
                                                        {{ old('p3') == 'C' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="radio3.3">C) Cukup Mudah &
                                                        Beberapa Catatan</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input border border-primary" type="radio"
                                                        name="p3" id="radio3.4" value="D"
                                                        {{ old('p3') == 'D' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="radio3.4">D) Mudah &
                                                        Lancar</label>
                                                </div>
                                            </div>
                                        </div>

                                        {{-- 4 --}}
                                        <div class="alert alert-light shadow-sm bg-body-tertiary py-3 rounded"
                                            role="alert">
                                            @if ($errors->has('p4'))
                                                <span class="error text-danger mb-2 bg-danger px-2">
                                                    {{ $errors->first('p4') }}
                                                </span>
                                                <br>
                                            @endif
                                            <label>4. Apakah di sekitar rumah tidak terdapat tanaman
                                                atau pohon?</label>
                                            <div class="d-flex flex-column flex-sm-row justify-content-evenly">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input border border-primary" type="radio"
                                                        name="p4" id="radio4.1" value="A"
                                                        {{ old('p4') == 'A' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="radio4.1">A) Tidak ada sama
                                                        sekali
                                                    </label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input border border-primary" type="radio"
                                                        name="p4" id="radio4.2" value="B"
                                                        {{ old('p3') == 'B' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="radio4.2">B) Ada Namun
                                                        Jarang</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input border border-primary" type="radio"
                                                        name="p4" id="radio4.3" value="C"
                                                        {{ old('p3') == 'C' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="radio4.3">C) Ada beberapa tanaman
                                                        kecil</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input border border-primary" type="radio"
                                                        name="p4" id="radio4.4" value="D"
                                                        {{ old('p3') == 'D' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="radio4.4">D) Banyak
                                                        Pohon & Tanaman</label>
                                                </div>
                                            </div>
                                        </div>

                                        {{-- 5 --}}
                                        <div class="alert alert-light shadow-sm bg-body-tertiary py-3 rounded"
                                            role="alert">
                                            @if ($errors->has('p5'))
                                                <span class="error text-danger mb-2 bg-danger px-2">
                                                    {{ $errors->first('p5') }}
                                                </span>
                                                <br>
                                            @endif
                                            <label>5. Apakah saat ini anak di berikan susu formula
                                                untuk alternatif pengganti ASI, disaat usia anak diatas 6 Bulan ?</label>
                                            <div class="d-flex flex-column flex-sm-row justify-content-evenly">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input border border-primary" type="radio"
                                                        name="p5" id="radio5.1" value="A"
                                                        {{ old('p5') == 'A' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="radio5.1">A) Hanya Susu
                                                        Formula</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input border border-primary" type="radio"
                                                        name="p5" id="radio5.2" value="B"
                                                        {{ old('p5') == 'B' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="radio5.2">B) Hanya Makanan Padat
                                                    </label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input border border-primary" type="radio"
                                                        name="p5" id="radio5.3" value="C"
                                                        {{ old('p5') == 'C' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="radio5.3">C) Susu Formula &
                                                        Makanan padat </label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input border border-primary" type="radio"
                                                        name="p5" id="radio5.4" value="D"
                                                        {{ old('p5') == 'D' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="radio5.4">D) Asi & Makanan
                                                        Padat</label>
                                                </div>
                                            </div>
                                        </div>

                                        {{-- 6 --}}
                                        <div class="alert alert-light shadow-sm bg-body-tertiary py-3 rounded"
                                            role="alert">
                                            @if ($errors->has('p6'))
                                                <span class="error text-danger mb-2 bg-danger px-2">
                                                    {{ $errors->first('p6') }}
                                                </span>
                                                <br>
                                            @endif
                                            <label>6. Apakah kesibukan orang tua, khususnya ibu, menjadi hambatan untuk
                                                mengikuti kegiatan posyandu secara rutin?</label> <br>

                                            <div class="d-flex flex-column flex-sm-row justify-content-evenly">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input border border-primary" type="radio"
                                                        name="p6" id="radio6.1" value="A"
                                                        {{ old('p6') == 'A' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="radio6.1">A) kesibukan orangtua
                                                        yang padat</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input border border-primary" type="radio"
                                                        name="p6" id="radio6.2" value="B"
                                                        {{ old('p6') == 'B' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="radio6.2">B) Tidak
                                                        Terlalu & ada faktor lain</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input border border-primary" type="radio"
                                                        name="p6" id="radio6.3" value="C"
                                                        {{ old('p6') == 'C' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="radio6.3">C) Terkadang</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input border border-primary" type="radio"
                                                        name="p6" id="radio6.4" value="D"
                                                        {{ old('p6') == 'D' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="radio6.4">D) Tidak Sama
                                                        sekali</label>
                                                </div>
                                            </div>
                                        </div>

                                        {{-- 7 --}}
                                        <div class="alert alert-light shadow-sm bg-body-tertiary py-3 rounded"
                                            role="alert">
                                            @if ($errors->has('p7'))
                                                <span class="error text-danger mb-2 bg-danger px-2">
                                                    {{ $errors->first('p7') }}
                                                </span>
                                                <br>
                                            @endif
                                            <label>7. Pada saat usia di bawah 6 bulan apakah ibu sudah
                                                memberikan makanan pendamping asi ?</label> <br>
                                                
                                            <div class="d-flex flex-column flex-sm-row justify-content-evenly">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input border border-primary" type="radio"
                                                        name="p7" id="radio7.1" value="A"
                                                        {{ old('p7') == 'A' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="radio7.1">A) Susu Formula & Makanan Padat</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input border border-primary" type="radio"
                                                        name="p7" id="radio7.2" value="B"
                                                        {{ old('p7') == 'B' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="radio7.2">B) Asi dan Makanan Padat</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input border border-primary" type="radio"
                                                        name="p7" id="radio7.3" value="C"
                                                        {{ old('p7') == 'C' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="radio7.3">C) Susu Formula dan Asi</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input border border-primary" type="radio"
                                                        name="p7" id="radio7.4" value="D"
                                                        {{ old('p7') == 'D' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="radio7.4">D) Hanya
                                                        ASI</label>
                                                </div>
                                            </div>

                                        </div>

                                        {{-- 8 --}}
                                        <div class="alert alert-light shadow-sm bg-body-tertiary py-3 rounded"
                                            role="alert">
                                            @if ($errors->has('p8'))
                                                <span class="error text-danger mb-2 bg-danger px-2">
                                                    {{ $errors->first('p8') }}
                                                </span>
                                                <br>
                                            @endif
                                            <label>8. Apakah orang tua melakukan aktifitas merokok
                                                saat berinteraksi dengan anak selama waktu
                                                bermain?</label> <br>

                                            <div class="d-flex flex-column flex-sm-row justify-content-evenly">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input border border-primary" type="radio"
                                                        name="p8" id="radio8.1" value="A"
                                                        {{ old('p8') == 'A' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="radio8.1">A) Selalu Saat Bersama Anak</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input border border-primary" type="radio"
                                                        name="p8" id="radio8.2" value="B"
                                                        {{ old('p8') == 'B' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="radio8.2">B) Sering Karna lupa</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input border border-primary" type="radio"
                                                        name="p8" id="radio8.3" value="C"
                                                        {{ old('p8') == 'C' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="radio8.3">C) Memberi jarak
                                                        Lebih dari 1 Meter</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input border border-primary" type="radio"
                                                        name="p8" id="radio8.4" value="D"
                                                        {{ old('p8') == 'D' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="radio8.4">D) Tidak
                                                        Pernah</label>
                                                </div>
                                            </div>     
                                        </div>

                                        {{-- 9 --}}
                                        <div class="alert alert-light shadow-sm bg-body-tertiary py-3 rounded"
                                            role="alert">
                                            @if ($errors->has('p9'))
                                                <span class="error text-danger mb-2 bg-danger px-2">
                                                    {{ $errors->first('p9') }}
                                                </span>
                                                <br>
                                            @endif
                                            <label>9. Apakah anak barusaja mengalami sakit atau
                                                demam?</label> <br>

                                            <div class="d-flex flex-column flex-sm-row justify-content-evenly">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input border border-primary" type="radio"
                                                        name="p9" id="radio9.1" value="A"
                                                        {{ old('p9') == 'A' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="radio9.1">A) Demam disertai Gejala Lain</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input border border-primary" type="radio"
                                                        name="p9" id="radio9.2" value="B"
                                                        {{ old('p9') == 'B' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="radio9.2">B) badan panas > 38C</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input border border-primary" type="radio"
                                                        name="p9" id="radio9.3" value="C"
                                                        {{ old('p9') == 'C' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="radio9.3">C) Demam Berulang</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input border border-primary" type="radio"
                                                        name="p9" id="radio9.4" value="D"
                                                        {{ old('p9') == 'D' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="radio9.4">D) Lebih dari 3 Hari</label>
                                                </div>
                                            </div>     
                                        </div>

                                        {{-- 10 --}}
                                        <div class="alert alert-light shadow-sm bg-body-tertiary py-3 rounded"
                                            role="alert">
                                            @if ($errors->has('p10'))
                                                <span class="error text-danger mb-2 bg-danger px-2">
                                                    {{ $errors->first('p10') }}
                                                </span>
                                                <br>
                                            @endif
                                            <label>10. Apakah anak mempunyai nafsu makan yang
                                                kurang bagus saat ini ?</label> <br>

                                            <div class="d-flex flex-column flex-sm-row justify-content-evenly">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input border border-primary" type="radio"
                                                        name="p10" id="radio10.1" value="A"
                                                        {{ old('p10') == 'A' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="radio10.1">A) Sulit untuk
                                                        makan</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input border border-primary" type="radio"
                                                        name="p10" id="radio10.2" value="B"
                                                        {{ old('p10') == 'B' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="radio10.2">B) suka pilih-pilih
                                                        makanan</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input border border-primary" type="radio"
                                                        name="p10" id="radio10.3" value="C"
                                                        {{ old('p10') == 'C' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="radio10.3">C)
                                                    Terdapat gangguan pencernaan</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input border border-primary" type="radio"
                                                        name="p10" id="radio10.4" value="D"
                                                        {{ old('p10') == 'D' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="radio10.4">D) Nafsu makan
                                                        baik</label>
                                                </div>
                                            </div>
                                        </div>

                                        {{-- 11 --}}
                                        <div class="alert alert-light shadow-sm bg-body-tertiary py-3 rounded"
                                            role="alert">
                                            @if ($errors->has('p11'))
                                                <span class="error text-danger mb-2 bg-danger px-2">
                                                    {{ $errors->first('p11') }}
                                                </span>
                                                <br>
                                            @endif
                                            <label>11. Apakah anak kerap menangis dalam kurun waktu
                                                yang singkat ?</label> <br>

                                            <div class="d-flex flex-column flex-sm-row justify-content-evenly">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input border border-primary" type="radio"
                                                        name="p11" id="radio11.1" value="A"
                                                        {{ old('p11') == 'A' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="radio11.1">A) Akhir-akhir ini sering rewel</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input border border-primary" type="radio"
                                                        name="p11" id="radio11.2" value="B"
                                                        {{ old('p11') == 'B' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="radio11.2">B) Rewel & ada faktor lain</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input border border-primary" type="radio"
                                                        name="p11" id="radio11.3" value="C"
                                                        {{ old('p11') == 'C' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="radio11.3">C) Terkadang</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input border border-primary" type="radio"
                                                        name="p11" id="radio11.4" value="D"
                                                        {{ old('p11') == 'D' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="radio11.4">D) Manangis Normal</label>
                                                </div>
                                            </div>
                                        </div>

                                        {{-- 12 --}}
                                        <div class="alert alert-light shadow-sm bg-body-tertiary py-3 rounded"
                                            role="alert">
                                            @if ($errors->has('p12'))
                                                <span class="error text-danger mb-2 bg-danger px-2">
                                                    {{ $errors->first('p12') }}
                                                </span>
                                                <br>
                                            @endif
                                            <label>12. Apakah anak sulit untuk tidur ? </label> <br>

                                            <div class="d-flex flex-column flex-sm-row justify-content-evenly">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input border border-primary" type="radio"
                                                        name="p12" id="radio12.1" value="A"
                                                        {{ old('p12') == 'A' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="radio12.1">A) Susah tidur & ada faktor lain</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input border border-primary" type="radio"
                                                        name="p12" id="radio12.2" value="B"
                                                        {{ old('p12') == 'B' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="radio12.2">B) anak sering
                                                        terbangun</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input border border-primary" type="radio"
                                                        name="p12" id="radio12.3" value="C"
                                                        {{ old('p12') == 'C' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="radio12.3">C) Anak
                                                        cenderung suka bermain</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input border border-primary" type="radio"
                                                        name="p12" id="radio12.4" value="D" {{ old('p12') == 'D' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="radio12.4">D) Waktu Tidur anak Baik</label>
                                                </div>
                                            </div>
                                        </div>

                                        {{-- 13 --}}
                                        <div class="alert alert-light shadow-sm bg-body-tertiary py-3 rounded"
                                            role="alert">
                                            @if ($errors->has('p13'))
                                                <span class="error text-danger mb-2 bg-danger px-2">
                                                    {{ $errors->first('p13') }}
                                                </span>
                                                <br>
                                            @endif
                                            <label>13. Apakah saat kehamilan ibu hamil jarang
                                                mengkonsultasikan kesehatan dengan dokter,
                                                bidan atau tenaga medis lainnya, dalam kurun waktu 9 Bulan ?</label> <br>

                                            <div class="d-flex flex-column flex-sm-row justify-content-evenly">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input border border-primary" type="radio"
                                                        name="p13" id="radio13.1" value="A"
                                                        {{ old('p13') == 'A' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="radio13.1">A)Jarang sekali (< 1 kali)</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input border border-primary" type="radio"
                                                        name="p13" id="radio13.2" value="B"
                                                        {{ old('p13') == 'B' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="radio13.2">B) Jarang (1-3 kali)</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input border border-primary" type="radio"
                                                        name="p13" id="radio13.3" value="C"
                                                        {{ old('p13') == 'C' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="radio13.3">C) Sedang (4-6 kali)</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input border border-primary" type="radio"
                                                        name="p13" id="radio13.4" value="D"
                                                        {{ old('p13') == 'D' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="radio13.4">D) Rutin (> 8 kali)</label>
                                                </div>
                                            </div>
                                        </div>

                                        {{-- 14 --}}
                                        <div class="alert alert-light shadow-sm bg-body-tertiary py-3 rounded"
                                            role="alert">
                                            @if ($errors->has('p14'))
                                                <span class="error text-danger mb-2 bg-danger px-2">
                                                    {{ $errors->first('p14') }}
                                                </span>
                                                <br>
                                            @endif
                                            <label>14. Apakah saat hamil ibu mempunyai nafsu makan
                                                yang kurang bagus ?</label> <br>

                                            <div class="d-flex flex-column flex-sm-row justify-content-evenly">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input border border-primary" type="radio"
                                                        name="p14" id="radio14.1" value="A"
                                                        {{ old('p14') == 'A' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="radio14.1">A) Tidak nafsu
                                                        makan & ada faktor lain</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input border border-primary" type="radio"
                                                        name="p14" id="radio14.2" value="B"
                                                        {{ old('p14') == 'B' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="radio14.2">B) pilih-pilih
                                                        makanan</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input border border-primary" type="radio"
                                                        name="p14" id="radio14.3" value="C"
                                                        {{ old('p14') == 'C' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="radio14.3">C) Terkadang</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input border border-primary" type="radio"
                                                        name="p14" id="radio14.4" value="D"
                                                        {{ old('p14') == 'D' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="radio14.4">D) Nafsu makan
                                                        baik</label>
                                                </div>
                                            </div>
                                        </div>

                                        {{-- 15 --}}
                                        <div class="alert alert-light shadow-sm bg-body-tertiary py-3 rounded"
                                            role="alert">
                                            @if ($errors->has('p15'))
                                                <span class="error text-danger mb-2 bg-danger px-2">
                                                    {{ $errors->first('p15') }}
                                                </span>
                                                <br>
                                            @endif
                                            <label>15. Apakah ibu sering mengalami gejala anemia
                                                seperti kelelahan, kulit pucat, pusing, dan denyut
                                                jantung cepat pada saat proses kehamilan?</label> <br>

                                            <div class="d-flex flex-column flex-sm-row justify-content-evenly">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input border border-primary" type="radio"
                                                        name="p15" id="radio15.1" value="A"
                                                        {{ old('p15') == 'A' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="radio15.1">A) Sering Terjadi</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input border border-primary" type="radio"
                                                        name="p15" id="radio15.2" value="B"
                                                        {{ old('p15') == 'B' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="radio15.2">B) Hanya
                                                        Kelelahan</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input border border-primary" type="radio"
                                                        name="p15" id="radio15.3" value="C"
                                                        {{ old('p15') == 'C' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="radio15.3">C) 
                                                        Terkadang</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input border border-primary" type="radio"
                                                        name="p15" id="radio15.4" value="D"
                                                        {{ old('p15') == 'D' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="radio15.4">D) Tidak pernah</label>
                                                </div>
                                            </div>
                                        </div>

                                        {{-- 16 --}}
                                        <div class="alert alert-light shadow-sm bg-body-tertiary py-3 rounded"
                                            role="alert">
                                            @if ($errors->has('p16'))
                                                <span class="error text-danger mb-2 bg-danger px-2">
                                                    {{ $errors->first('p16') }}
                                                </span>
                                                <br>
                                            @endif
                                            <label>16. Apakah pernah terjadi masalah kesehatan selama
                                                kehamilan yang berdampak pada kondisi
                                                kesehatan ibu secara kronis?</label> <br>
                                            
                                            <div class="d-flex flex-column flex-sm-row justify-content-evenly">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input border border-primary" type="radio"
                                                        name="p16" id="radio16.1" value="A"
                                                        {{ old('p16') == 'A' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="radio16.1">A) Mempunyai Riwayat penyakit kronis</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input border border-primary" type="radio"
                                                        name="p16" id="radio16.2" value="B"
                                                        {{ old('p16') == 'B' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="radio16.2">B) Pernah Terjadi 2-3 kali</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input border border-primary" type="radio"
                                                        name="p16" id="radio16.3" value="C"
                                                        {{ old('p16') == 'C' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="radio16.3">C) pernah Tejadi 1
                                                        Kali</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input border border-primary" type="radio"
                                                        name="p16" id="radio16.4" value="D"
                                                        {{ old('p16') == 'D' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="radio16.4">D) Tidak
                                                        Pernah</label>
                                                </div>
                                            </div>
                                        </div>

                                        {{-- 17 --}}
                                        <div class="alert alert-light shadow-sm bg-body-tertiary py-3 rounded"
                                            role="alert">
                                            @if ($errors->has('p17'))
                                                <span class="error text-danger mb-2 bg-danger px-2">
                                                    {{ $errors->first('p17') }}
                                                </span>
                                                <br>
                                            @endif
                                            <label>17. Apakah menurut orang tua, pemberian ASI
                                                eksklusif selama 6 bulan pertama, penting atau bisa di gantikan dengan
                                                alternatif
                                                susu formula menjadi pilihan yang sesuai?</label> <br>

                                            <div class="d-flex flex-column flex-sm-row justify-content-evenly">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input border border-primary" type="radio"
                                                        name="p17" id="radio17.1" value="A"
                                                        {{ old('p17') == 'A' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="radio17.1">A) Bisa
                                                        digantikan</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input border border-primary" type="radio"
                                                        name="p17" id="radio17.2" value="B"
                                                        {{ old('p17') == 'B' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="radio17.2">B) dijadikan
                                                        selingan</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input border border-primary" type="radio"
                                                        name="p17" id="radio17.3" value="C"
                                                        {{ old('p17') == 'C' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="radio17.3">C) Tidak Bisa
                                                        digantikan</label>
                                                </div>
                                                {{-- <div class="form-check form-check-inline">
                                                    <input class="form-check-input border border-primary" type="radio"
                                                        name="p17" id="radio17.4" value="Tidak Benar">
                                                    <label class="form-check-label" for="radio17.4">Tidak Benar (Jauh)</label>
                                                </div> --}}
                                            </div>
                                        </div>

                                        {{-- 18 --}}
                                        <div class="alert alert-light shadow-sm bg-body-tertiary py-3 rounded"
                                            role="alert">
                                            @if ($errors->has('p18'))
                                                <span class="error text-danger mb-2 bg-danger px-2">
                                                    {{ $errors->first('p18') }}
                                                </span>
                                                <br>
                                            @endif
                                            <label>18. Apakah menurut orang tua, imunisasi pada anak
                                                dianggap opsional atau tidak wajib?</label> <br>

                                            <div class="d-flex flex-column flex-sm-row justify-content-evenly">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input border border-primary" type="radio"
                                                        name="p18" id="radio18.1" value="A"
                                                        {{ old('p18') == 'A' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="radio18.1">A) Tidak Perlu</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input border border-primary" type="radio"
                                                        name="p18" id="radio18.2" value="B"
                                                        {{ old('p18') == 'B' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="radio18.2">B) Boleh Sesekali</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input border border-primary" type="radio"
                                                        name="p18" id="radio18.3" value="C"
                                                        {{ old('p18') == 'C' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="radio18.3">C) Perlu Namun Ada Faktor lain</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input border border-primary" type="radio"
                                                        name="p18" id="radio18.4" value="D" {{ old('p18') == 'D' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="radio18.4">D) Imunisai Wajib</label>
                                                </div>
                                            </div>
                                        </div>

                                        {{-- 19 --}}
                                        <div class="alert alert-light shadow-sm bg-body-tertiary py-3 rounded"
                                            role="alert">
                                            @if ($errors->has('p19'))
                                                <span class="error text-danger mb-2 bg-danger px-2">
                                                    {{ $errors->first('p19') }}
                                                </span>
                                                <br>
                                            @endif
                                            <label>19. Apakah menurut orang tua pemberian makanan
                                                pendamping sejak dini saat anak berusia kurang
                                                dari 6 bulan boleh di lakukan?</label> <br>

                                            <div class="d-flex flex-column flex-sm-row justify-content-evenly">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input border border-primary" type="radio"
                                                        name="p19" id="radio19.1" value="A"
                                                        {{ old('p19') == 'A' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="radio19.1">A) Boleh, Pemberian
                                                        Makanan padat</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input border border-primary" type="radio"
                                                        name="p19" id="radio19.2" value="B"
                                                        {{ old('p19') == 'B' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="radio19.2">B) Boleh, Pemberian susu
                                                        formula</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input border border-primary" type="radio"
                                                        name="p19" id="radio19.3" value="C"
                                                        {{ old('p19') == 'C' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="radio19.3">C) Tidak Boleh, Hanya
                                                        Asi</label>
                                                </div>
                                                {{-- <div class="form-check form-check-inline">
                                                    <input class="form-check-input border border-primary" type="radio"
                                                        name="p19" id="radio19.4" value="Tidak Benar">
                                                    <label class="form-check-label" for="radio19.4">Tidak Benar ()</label>
                                                </div> --}}
                                            </div>
                                        </div>

                                        {{-- 20 --}}
                                        <div class="alert alert-light shadow-sm bg-body-tertiary py-3 rounded"
                                            role="alert">
                                            @if ($errors->has('p20'))
                                                <span class="error text-danger mb-2 bg-danger px-2">
                                                    {{ $errors->first('p20') }}
                                                </span>
                                                <br>
                                            @endif
                                            <label>20. Apakah orang tua sering kali merasa kurang
                                                informasi atau edukasi yang mencukupi dari
                                                tenaga kesehatan tentang tumbuh kembang anak
                                                mereka?</label> <br>

                                            <div class="d-flex flex-column flex-sm-row justify-content-evenly">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input border border-primary" type="radio"
                                                        name="p20" id="radio20.1" value="A"
                                                        {{ old('p20') == 'A' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="radio20.1">A) Tidak pernah
                                                        ada sosialisasi</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input border border-primary" type="radio"
                                                        name="p20" id="radio20.2" value="B"
                                                        {{ old('p20') == 'B' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="radio20.2">B) Sangat
                                                        kurang</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input border border-primary" type="radio"
                                                        name="p20" id="radio20.3" value="C"
                                                        {{ old('p20') == 'C' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="radio20.3">C) Cukup</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input border border-primary" type="radio"
                                                        name="p20" id="radio20.4" value="D"
                                                        {{ old('p20') == 'D' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="radio20.4">D) Sangat
                                                        tercukupi</label>
                                                </div>
                                            </div>
                                        </div>

                                        {{-- 21 --}}
                                        <div class="alert alert-light shadow-sm bg-body-tertiary py-3 rounded"
                                            role="alert">
                                            @if ($errors->has('p21'))
                                                <span class="error text-danger mb-2 bg-danger px-2">
                                                    {{ $errors->first('p21') }}
                                                </span>
                                                <br>
                                            @endif
                                            <label>21. Apakah selama kehamilan, ibu hamil cenderung
                                                kurang suka untuk mengonsumsi buah segar?</label> <br>

                                            <div class="d-flex flex-column flex-sm-row justify-content-evenly">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input border border-primary" type="radio"
                                                        name="p21" id="radio21.1" value="A"
                                                        {{ old('p21') == 'A' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="radio21.1">A) Sama sekali
                                                        tidak suka</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input border border-primary" type="radio"
                                                        name="p21" id="radio21.2" value="B"
                                                        {{ old('p21') == 'B' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="radio21.2">B) Kurang begitu
                                                        suka</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input border border-primary" type="radio"
                                                        name="p21" id="radio21.3" value="C"
                                                        {{ old('p21') == 'C' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="radio21.3">C) 
                                                        terkadang</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input border border-primary" type="radio"
                                                        name="p21" id="radio21.4" value="D"
                                                        {{ old('p21') == 'D' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="radio21.4">D) Suka Buah Segar</label>
                                                </div>
                                            </div>
                                        </div>

                                        {{-- 22 --}}
                                        <div class="alert alert-light shadow-sm bg-body-tertiary py-3 rounded"
                                            role="alert">
                                            @if ($errors->has('p22'))
                                                <span class="error text-danger mb-2 bg-danger px-2">
                                                    {{ $errors->first('p22') }}
                                                </span>
                                                <br>
                                            @endif
                                            <label>22. Apakah selama kehamilan, ibu hamil lebih suka
                                                mengonsumsi makanan instan dari pada sumber
                                                protein seperti tempe, tahu, daging, dan telur?</label> <br>

                                            <div class="d-flex flex-column flex-sm-row justify-content-evenly">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input border border-primary" type="radio"
                                                        name="p22" id="radio22.1" value="A"
                                                        {{ old('p22') == 'A' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="radio22.1">A) Hampir
                                                        selalu makanan instan</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input border border-primary" type="radio"
                                                        name="p22" id="radio22.2" value="B"
                                                        {{ old('p22') == 'B' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="radio22.2">B) Sering </label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input border border-primary" type="radio"
                                                        name="p22" id="radio22.3" value="C"
                                                        {{ old('p22') == 'C' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="radio22.3">C) terkadang</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input border border-primary" type="radio"
                                                        name="p22" id="radio22.4" value="D"
                                                        {{ old('p22') == 'D' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="radio22.4">d) Tidak suka makanan instan</label>
                                                </div>
                                            </div>
                                        </div>

                                        {{-- 23 --}}
                                        <div class="alert alert-light shadow-sm bg-body-tertiary py-3 rounded"
                                            role="alert">
                                            @if ($errors->has('p23'))
                                                <span class="error text-danger mb-2 bg-danger px-2">
                                                    {{ $errors->first('p23') }}
                                                </span>
                                                <br>
                                            @endif
                                            <label>23. Apakah saat hamil ibu hamil kurang suka
                                                mengkonsumsi sayuran segar ?</label> <br>
                                            
                                            <div class="d-flex flex-column flex-sm-row justify-content-evenly">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input border border-primary" type="radio"
                                                        name="p23" id="radio23.1" value="A"
                                                        {{ old('p23') == 'A' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="radio23.1">A) Sagat tidak
                                                        suka</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input border border-primary" type="radio"
                                                        name="p23" id="radio23.2" value="B"
                                                        {{ old('p23') == 'B' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="radio23.2">B) Kurang Bagitu
                                                        suka</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input border border-primary" type="radio"
                                                        name="p23" id="radio23.3" value="C"
                                                        {{ old('p23') == 'C' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="radio23.3">C) Terkadang</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input border border-primary" type="radio"
                                                        name="p23" id="radio23.4" value="D"
                                                        {{ old('p23') == 'D' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="radio23.4">D) Suka sayuran segar</label>
                                                </div>
                                            </div>
                                        </div>

                                        {{-- 24 --}}
                                        <div class="alert alert-light shadow-sm bg-body-tertiary py-3 rounded"
                                            role="alert">
                                            @if ($errors->has('p24'))
                                                <span class="error text-danger mb-2 bg-danger px-2">
                                                    {{ $errors->first('p24') }}
                                                </span>
                                                <br>
                                            @endif
                                            <label>24. Apakah saat hamil ibu hamil kurang suka
                                                mengkonsumsi karbo hidrat seperti nasi, roti, dan
                                                karbohidrat lainnya ?</label> <br>

                                            <div class="d-flex flex-column flex-sm-row justify-content-evenly">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input border border-primary" type="radio"
                                                        name="p24" id="radio24.1" value="A"
                                                        {{ old('p24') == 'A' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="radio24.1">A) Tidak
                                                        suka</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input border border-primary" type="radio"
                                                        name="p24" id="radio24.2" value="B"
                                                        {{ old('p24') == 'B' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="radio24.2">B) pilih-pilih
                                                        makanan</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input border border-primary" type="radio"
                                                        name="p24" id="radio24.3" value="C"
                                                        {{ old('p24') == 'C' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="radio24.3">C) terkadang</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input border border-primary" type="radio"
                                                        name="p24" id="radio24.4" value="D"
                                                        {{ old('p24') == 'D' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="radio24.4">D) Suka</label>
                                                </div>
                                            </div>
                                        </div>

                                        {{-- 25 --}}
                                        <div class="alert alert-light shadow-sm bg-body-tertiary py-3 rounded"
                                            role="alert">
                                            @if ($errors->has('p25'))
                                                <span class="error text-danger mb-2 bg-danger px-2">
                                                    {{ $errors->first('p25') }}
                                                </span>
                                                <br>
                                            @endif
                                            <label>25. Berapa kali ibu memberikan ASI dalam sehari untuk
                                                anak yang belum mendapatkan MPASI (Makanan Pendamping ASI)?</label> <br>

                                            <div class="d-flex flex-column flex-sm-row justify-content-evenly">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input border border-primary" type="radio"
                                                        name="p25" id="radio25.1" value="A"
                                                        {{ old('p25') == 'A' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="radio25.1">A) Kurang dari 8
                                                        kali sehari</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input border border-primary" type="radio"
                                                        name="p25" id="radio25.2" value="B"
                                                        {{ old('p25') == 'B' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="radio25.2">B) 8-10 kali sehari</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input border border-primary" type="radio"
                                                        name="p25" id="radio25.3" value="C"
                                                        {{ old('p25') == 'C' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="radio25.3">C) 11-12 kali sehari</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input border border-primary" type="radio"
                                                        name="p25" id="radio25.4" value="D"
                                                        {{ old('p25') == 'D' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="radio25.4">D) Lebih dari 12
                                                        Kali sehari</label>
                                                </div>
                                            </div>
                                        </div>

                                        {{-- 26 --}}
                                        <div class="alert alert-light shadow-sm bg-body-tertiary py-3 rounded"
                                            role="alert">
                                            @if ($errors->has('p26'))
                                                <span class="error text-danger mb-2 bg-danger px-2">
                                                    {{ $errors->first('p26') }}
                                                </span>
                                                <br>
                                            @endif
                                            <label>26. Apakah anak sulit untuk di suruh makan ?</label> <br>

                                            <div class="d-flex flex-column flex-sm-row justify-content-evenly">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input border border-primary" type="radio"
                                                        name="p26" id="radio26.1" value="A"
                                                        {{ old('p26') == 'A' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="radio26.1">A) Sangat
                                                        Sulit</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input border border-primary" type="radio"
                                                        name="p26" id="radio26.2" value="B"
                                                        {{ old('p26') == 'B' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="radio26.2">B) Pilih-pilih
                                                        makanan</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input border border-primary" type="radio"
                                                        name="p26" id="radio26.3" value="C"
                                                        {{ old('p26') == 'C' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="radio26.3">C) Terkadang</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input border border-primary" type="radio"
                                                        name="p26" id="radio26.4" value="D"
                                                        {{ old('p26') == 'D' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="radio26.4">D) Mudah</label>
                                                </div>
                                            </div>
                                        </div>

                                        {{-- 27 --}}
                                        <div class="alert alert-light shadow-sm bg-body-tertiary py-3 rounded"
                                            role="alert">
                                            @if ($errors->has('p27'))
                                                <span class="error text-danger mb-2 bg-danger px-2">
                                                    {{ $errors->first('p27') }}
                                                </span>
                                                <br>
                                            @endif
                                            <label>27. Pada saat usia 6-24 bulan Apakah anak tidak
                                                suka makan sayur?</label> <br>

                                            <div class="d-flex flex-column flex-sm-row justify-content-evenly">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input border border-primary" type="radio"
                                                        name="p27" id="radio27.1" value="A"
                                                        {{ old('p27') == 'A' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="radio27.1">A) Hampir tidak
                                                        mau</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input border border-primary" type="radio"
                                                        name="p27" id="radio27.2" value="B"
                                                        {{ old('p27') == 'B' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="radio27.2">B) pilih-pilih
                                                        makanan</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input border border-primary" type="radio"
                                                        name="p27" id="radio27.3" value="C"
                                                        {{ old('p27') == 'C' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="radio27.3">C) Terkadang</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input border border-primary" type="radio"
                                                        name="p27" id="radio27.4" value="D"
                                                        {{ old('p27') == 'D' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="radio27.4">D) Suka</label>
                                                </div>
                                            </div>
                                        </div>

                                        {{-- 28 --}}
                                        <div class="alert alert-light shadow-sm bg-body-tertiary py-3 rounded"
                                            role="alert">
                                            @if ($errors->has('p28'))
                                                <span class="error text-danger mb-2 bg-danger px-2">
                                                    {{ $errors->first('p28') }}
                                                </span>
                                                <br>
                                            @endif
                                            <label>28. Apakah ada makanan tertentu yang harus
                                                dihindari saat memberi makan anak untuk
                                                mencegah alergi atau masalah kesehatan
                                                lainnya?</label> <br>

                                            <div class="d-flex flex-column flex-sm-row justify-content-evenly">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input border border-primary" type="radio"
                                                        name="p28" id="radio28.1" value="A"
                                                        {{ old('p28') == 'A' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="radio28.1">A) anak
                                                        memiliki alergi</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input border border-primary" type="radio"
                                                        name="p28" id="radio28.2" value="B"
                                                        {{ old('p28') == 'B' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="radio28.2">B) tidak menyukai
                                                        makanan tertentu.</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input border border-primary" type="radio"
                                                        name="p28" id="radio28.3" value="C"
                                                        {{ old('p28') == 'C' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="radio28.3">C) Terkadang</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input border border-primary" type="radio"
                                                        name="p28" id="radio28.4" value="D"
                                                        {{ old('p28') == 'D' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="radio28.4">D) Tidak ada</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="alert alert-light shadow-sm bg-body-tertiary py-3 rounded text-center"
                                            role="alert">
                                            <p>Apakah Semua data yang dimasukan sudah sesuai? <br>
                                                Jika semua sudah sesuai klik Tombol Proses di bawah ini</p>
                                            <div class="d-grid gap-2">
                                                <button class="btn btn-primary" type="submit">Proses</button>
                                            </div>
                                        </div>
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
