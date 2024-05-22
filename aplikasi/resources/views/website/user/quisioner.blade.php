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
                                <h3 class="card-title">Ada 28 Pertanyaan yang Harus di isi ... |
                                    <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal">
                                        Informasi <i class="fa-solid fa-circle-info"></i>
                                    </button>
                                </h3>

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
                                                <br>
                                            @endif
                                            <label>1. Apakah tempat tinggal saat ini dekat dengan
                                                pencemaran udara seperti TPA, Asap dari
                                                industri pabrik, dan Peternakan?</label>
                                            <br>
                                            <div class="form-check form-check-inline ms-3">
                                                <input class="form-check-input border border-primary" type="radio"
                                                    name="p1" id="radio1.1" value="Sangat Benar"
                                                    {{ old('p1') == 'Sangat Benar' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="radio1.1">Sangat Benar (Jarak < 1 Meter
                                                        )</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input border border-primary" type="radio"
                                                    name="p1" id="radio1.2" value="Benar"
                                                    {{ old('p1') == 'Benar' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="radio1.2">Benar (Jarak 2 - 3 Meter
                                                    )</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input border border-primary" type="radio"
                                                    name="p1" id="radio1.3" value="Kurang Benar"
                                                    {{ old('p1') == 'Kurang Benar' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="radio1.3">Kurang Benar (Jarak 5 Meter
                                                    )</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input border border-primary" type="radio"
                                                    name="p1" id="radio1.4" value="Tidak Benar"
                                                    {{ old('p1') == 'Tidak Benar' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="radio1.4">Tidak Benar (> 1 KM)</label>
                                            </div>
                                        </div>

                                        {{-- 2 --}}
                                        <div class="alert alert-light shadow-sm bg-body-tertiary py-3 rounded"
                                            role="alert">
                                            @if ($errors->has('p2'))
                                                <span class="error text-danger mb-2 bg-danger px-2">
                                                    {{ $errors->first('p2') }}
                                                </span>
                                                <br>
                                            @endif
                                            <label>2. Apakah rumah dekat dengan sungai dan
                                                persawahan?</label> <br>
                                            <div class="form-check form-check-inline ms-3">
                                                <input class="form-check-input border border-primary" type="radio"
                                                    name="p2" id="radio2.1" value="Sangat Benar"
                                                    {{ old('p2') == 'Sangat Benar' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="radio2.1">Sangat Benar (Jarak < 1 Meter)</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input border border-primary" type="radio"
                                                    name="p2" id="radio2.2" value="Benar" {{ old('p2') == 'Benar' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="radio2.2">Benar (Jarak 2 - 3 Meter)</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input border border-primary" type="radio"
                                                    name="p2" id="radio2.3" value="Kurang Benar" {{ old('p2') == 'Kurang Benar' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="radio2.3">Kurang Benar (Jarak 5 Meter)</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input border border-primary" type="radio"
                                                    name="p2" id="radio2.4" value="Tidak Benar" {{ old('p2') == 'Tidak Benar' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="radio2.4">Tidak Benar (Jauh)</label>
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
                                            <label>3. Apakah tempat tinggal saat ini termasuk dalam
                                                kategori 3T(terpencil, Terpinggirkan, dan
                                                Tertinggal) yang jauh dari akses kesehatan?</label> <br>
                                            <div class="form-check form-check-inline ms-3">
                                                <input class="form-check-input border border-primary" type="radio"
                                                    name="p3" id="radio3.1" value="Sangat Benar" {{ old('p3') == 'Sangat Benar' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="radio3.1">Sangat Benar (Jarak > 5 Km )</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input border border-primary" type="radio"
                                                    name="p3" id="radio3.2" value="Benar" {{ old('p3') == 'Benar' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="radio3.2">Benar (Jarak 3 - 4 Km)</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input border border-primary" type="radio"
                                                    name="p3" id="radio3.3" value="Kurang Benar" {{ old('p3') == 'Kurang Benar' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="radio3.3">Kurang Benar (Jarak < 2 Km)</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input border border-primary" type="radio"
                                                    name="p3" id="radio3.4" value="Tidak Benar" {{ old('p3') == 'Tidak Benar' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="radio3.4">Tidak Benar (Jarak < 1 Km)</label>
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
                                                atau pohon?</label> <br>
                                            <div class="form-check form-check-inline ms-3">
                                                <input class="form-check-input border border-primary" type="radio"
                                                    name="p4" id="radio4.1" value="Sangat Benar" {{ old('p4') == 'Sangat Benar' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="radio4.1">Sangat Benar (Tidak ada pohon)</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input border border-primary" type="radio"
                                                    name="p4" id="radio4.2" value="Benar" {{ old('p3') == 'Benar' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="radio4.2">Benar (Jarang)</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input border border-primary" type="radio"
                                                    name="p4" id="radio4.3" value="Kurang Benar" {{ old('p3') == 'Kurang Benar' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="radio4.3">Kurang Benar (Banyak Tanaman Hias)</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input border border-primary" type="radio"
                                                    name="p4" id="radio4.4" value="Tidak Benar" {{ old('p3') == 'Tidak Benar' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="radio4.4">Tidak Benar (Banyak Pohon)</label>
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
                                                untuk alternatif pengganti ASI ?</label> <br>
                                            <div class="form-check form-check-inline ms-3">
                                                <input class="form-check-input border border-primary" type="radio"
                                                    name="p5" id="radio5.1" value="Sangat Benar" {{ old('p5') == 'Sangat Benar' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="radio5.1">Sangat Benar (Full Susu Formula )</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input border border-primary" type="radio"
                                                    name="p5" id="radio5.2" value="Benar" {{ old('p5') == 'Benar' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="radio5.2">Benar (Susu Formula > Asi )</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input border border-primary" type="radio"
                                                    name="p5" id="radio5.3" value="Kurang Benar" {{ old('p5') == 'Kurang Benar' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="radio5.3">Kurang Benar (Asi > Susu Formula)</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input border border-primary" type="radio"
                                                    name="p5" id="radio5.4" value="Tidak Benar">
                                                <label class="form-check-label" for="radio5.4">Tidak Benar (Full Asi)</label>
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
                                            <label>6. Apakah kesibukan orang tua / ibu menghalangi untuk mengikuti posyandu secara rutin ?</label> <br>

                                            <div class="form-check form-check-inline ps-3">
                                                <input class="form-check-input border border-primary" type="radio"
                                                    name="p6" id="radio6.1" value="Sangat Benar" {{ old('p6') == 'Sangat Benar' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="radio6.1">Sangat Benar (Kesibukan yang padat)</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input border border-primary" type="radio"
                                                    name="p6" id="radio6.2" value="Benar" {{ old('p6') == 'Benar' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="radio6.2">Benar (Tidak Terlalu)</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input border border-primary" type="radio"
                                                    name="p6" id="radio6.3" value="Kurang Benar" {{ old('p6') == 'Kurang Benar' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="radio6.3">Kurang Benar (Kadang-kadang)</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input border border-primary" type="radio"
                                                    name="p6" id="radio6.4" value="Tidak Benar" {{ old('p6') == 'Tidak Benar' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="radio6.4">Tidak Benar (Tidak Sama sekali)</label>
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

                                            <div class="form-check form-check-inline ps-3">
                                                <input class="form-check-input border border-primary" type="radio"
                                                    name="p7" id="radio7.1" value="Sangat Benar" {{ old('p7') == 'Sangat Benar' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="radio7.1">Sangat Benar (makanan padat)</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input border border-primary" type="radio"
                                                    name="p7" id="radio7.2" value="Benar" {{ old('p7') == 'Benar' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="radio7.2">Benar (Hanya susu formula)</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input border border-primary" type="radio"
                                                    name="p7" id="radio7.3" value="Kurang Benar" {{ old('p7') == 'Kurang Benar' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="radio7.3">Kurang Benar (Kadang-kadang)</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input border border-primary" type="radio"
                                                    name="p7" id="radio7.4" value="Tidak Benar" {{ old('p7') == 'Tidak Benar' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="radio7.4">Tidak Benar (Hanya ASI)</label>
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

                                            <div class="form-check form-check-inline ps-3">
                                                <input class="form-check-input border border-primary" type="radio"
                                                    name="p8" id="radio8.1" value="Sangat Benar" {{ old('p8') == 'Sangat Benar' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="radio8.1">Sangat Benar (Selalu)</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input border border-primary" type="radio"
                                                    name="p8" id="radio8.2" value="Benar" {{ old('p8') == 'Benar' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="radio8.2">Benar (Sering)</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input border border-primary" type="radio"
                                                    name="p8" id="radio8.3" value="Kurang Benar" {{ old('p8') == 'Kurang Benar' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="radio8.3">Kurang Benar (Memberi jarak > 1 Meter)</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input border border-primary" type="radio"
                                                    name="p8" id="radio8.4" value="Tidak Benar" {{ old('p8') == 'Tidak Benar' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="radio8.4">Tidak Benar (Tidak Pernah)</label>
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

                                            <div class="form-check form-check-inline ps-3">
                                                <input class="form-check-input border border-primary" type="radio"
                                                    name="p9" id="radio9.1" value="Sangat Benar" {{ old('p9') == 'Sangat Benar' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="radio9.1">Sangat Benar ( < 1 Minggu)</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input border border-primary" type="radio"
                                                    name="p9" id="radio9.2" value="Benar" {{ old('p9') == 'Benar' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="radio9.2">Benar ( > 1 - 2 Minggu)</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input border border-primary" type="radio"
                                                    name="p9" id="radio9.3" value="Kurang Benar" {{ old('p9') == 'Kurang Benar' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="radio9.3">Kurang Benar ( > 1 Bulan)</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input border border-primary" type="radio"
                                                    name="p9" id="radio9.4" value="Tidak Benar" {{ old('p9') == 'Tidak Benar' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="radio9.4">Tidak Benar (Tidak Sakit)</label>
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

                                            <div class="form-check form-check-inline ps-3">
                                                <input class="form-check-input border border-primary" type="radio"
                                                    name="p10" id="radio10.1" value="Sangat Benar" {{ old('p10') == 'Sangat Benar' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="radio10.1">Sangat Benar (Sulit makan)</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input border border-primary" type="radio"
                                                    name="p10" id="radio10.2" value="Benar" {{ old('p10') == 'Benar' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="radio10.2">Benar (pilih-pilih makanan)</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input border border-primary" type="radio"
                                                    name="p10" id="radio10.3" value="Kurang Benar" {{ old('p10') == 'Kurang Benar' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="radio10.3">Kurang Benar (Biasa)</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input border border-primary" type="radio"
                                                    name="p10" id="radio10.4" value="Tidak Benar" {{ old('p10') == 'Tidak Benar' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="radio10.4">Tidak Benar (Nafsu makan baik)</label>
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
                                                yang lumayan lama ?</label> <br>

                                            <div class="form-check form-check-inline ps-3">
                                                <input class="form-check-input border border-primary" type="radio"
                                                    name="p11" id="radio11.1" value="Sangat Benar" {{ old('p11') == 'Sangat Benar' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="radio11.1">Sangat Benar (> 1 Jam)</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input border border-primary" type="radio"
                                                    name="p11" id="radio11.2" value="Benar" {{ old('p11') == 'Benar' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="radio11.2">Benar (< 30 Menit)</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input border border-primary" type="radio"
                                                    name="p11" id="radio11.3" value="Kurang Benar" {{ old('p11') == 'Kurang Benar' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="radio11.3">Kurang Benar (sebentar namun sering)</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input border border-primary" type="radio"
                                                    name="p11" id="radio11.4" value="Tidak Benar" {{ old('p11') == 'Tidak Benar' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="radio11.4">Tidak Benar ( < 10 Menit)</label>
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

                                            <div class="form-check form-check-inline ps-3">
                                                <input class="form-check-input border border-primary" type="radio"
                                                    name="p12" id="radio12.1" value="Sangat Benar" {{ old('p12') == 'Sangat Benar' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="radio12.1">Sangat Benar (Anak cenderung bermain)</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input border border-primary" type="radio"
                                                    name="p12" id="radio12.2" value="Benar" {{ old('p12') == 'Benar' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="radio12.2">Benar (anak sering terbangun )</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input border border-primary" type="radio"
                                                    name="p12" id="radio12.3" value="Kurang Benar" {{ old('p12') == 'Kurang Benar' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="radio12.3">Kurang Benar (Normal)</label>
                                            </div>
                                            {{-- <div class="form-check form-check-inline">
                                                <input class="form-check-input border border-primary" type="radio"
                                                    name="p12" id="radio12.4" value="Tidak Benar" disabled>
                                                <label class="form-check-label" for="radio12.4">Tidak Benar ()</label>
                                            </div> --}}
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

                                            <div class="form-check form-check-inline ps-3">
                                                <input class="form-check-input border border-primary" type="radio"
                                                    name="p13" id="radio13.1" value="Sangat Benar" {{ old('p13') == 'Sangat Benar' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="radio13.1">Sangat Benar (Tidak Pernah)</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input border border-primary" type="radio"
                                                    name="p13" id="radio13.2" value="Benar" {{ old('p13') == 'Benar' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="radio13.2">Benar (< 3 Kali)</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input border border-primary" type="radio"
                                                    name="p13" id="radio13.3" value="Kurang Benar" {{ old('p13') == 'Kurang Benar' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="radio13.3">Kurang Benar (< 5 Kali)</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input border border-primary" type="radio"
                                                    name="p13" id="radio13.4" value="Tidak Benar" {{ old('p13') == 'Tidak Benar' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="radio13.4">Tidak Benar (Selalu Rutin)</label>
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

                                            <div class="form-check form-check-inline ps-3">
                                                <input class="form-check-input border border-primary" type="radio"
                                                    name="p14" id="radio14.1" value="Sangat Benar" {{ old('p14') == 'Sangat Benar' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="radio14.1">Sangat Benar (Tidak nafsu makan)</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input border border-primary" type="radio"
                                                    name="p14" id="radio14.2" value="Benar" {{ old('p14') == 'Benar' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="radio14.2">Benar (pilih-pilih makanan)</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input border border-primary" type="radio"
                                                    name="p14" id="radio14.3" value="Kurang Benar" {{ old('p14') == 'Kurang Benar' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="radio14.3">Kurang Benar (Terkadang)</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input border border-primary" type="radio"
                                                    name="p14" id="radio14.4" value="Tidak Benar" {{ old('p14') == 'Tidak Benar' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="radio14.4">Tidak Benar (Nafsu makan baik)</label>
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

                                            <div class="form-check form-check-inline ps-3">
                                                <input class="form-check-input border border-primary" type="radio"
                                                    name="p15" id="radio15.1" value="Sangat Benar" {{ old('p15') == 'Sangat Benar' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="radio15.1">Sangat Benar (Sering)</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input border border-primary" type="radio"
                                                    name="p15" id="radio15.2" value="Benar" {{ old('p15') == 'Benar' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="radio15.2">Benar (Hanya Kelelahan)</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input border border-primary" type="radio"
                                                    name="p15" id="radio15.3" value="Kurang Benar" {{ old('p15') == 'Kurang Benar' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="radio15.3">Kurang Benar (Terkadang)</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input border border-primary" type="radio"
                                                    name="p15" id="radio15.4" value="Tidak Benar" {{ old('p15') == 'Tidak Benar' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="radio15.4">Tidak Benar (Normal)</label>
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

                                            <div class="form-check form-check-inline ps-3">
                                                <input class="form-check-input border border-primary" type="radio"
                                                    name="p16" id="radio16.1" value="Sangat Benar" {{ old('p16') == 'Sangat Benar' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="radio16.1">Sangat Benar (>3 Kali)</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input border border-primary" type="radio"
                                                    name="p16" id="radio16.2" value="Benar"  {{ old('p16') == 'Benar' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="radio16.2">Benar (2-3 kali)</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input border border-primary" type="radio"
                                                    name="p16" id="radio16.3" value="Kurang Benar"  {{ old('p16') == 'Kurang Benar' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="radio16.3">Kurang Benar (1 Kali)</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input border border-primary" type="radio"
                                                    name="p16" id="radio16.4" value="Tidak Benar"  {{ old('p16') == 'Tidak Benar' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="radio16.4">Tidak Benar (Tidak Pernah)</label>
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
                                                eksklusif selama 6 bulan pertama, penting atau bisa di gantikan dengan alternatif
                                                susu formula menjadi pilihan yang sesuai?</label> <br>

                                            <div class="form-check form-check-inline ps-3">
                                                <input class="form-check-input border border-primary" type="radio"
                                                    name="p17" id="radio17.1" value="Sangat Benar"  {{ old('p17') == 'Sangat Benar' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="radio17.1">Sangat Benar (Bisa digantikan)</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input border border-primary" type="radio"
                                                    name="p17" id="radio17.2" value="Benar"  {{ old('p17') == 'Benar' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="radio17.2">Benar (dijadikan selingan)</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input border border-primary" type="radio"
                                                    name="p17" id="radio17.3" value="Kurang Benar" {{ old('p17') == 'Kurang Benar' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="radio17.3">Kurang Benar (Tidak Bisa digantikan)</label>
                                            </div>
                                            {{-- <div class="form-check form-check-inline">
                                                <input class="form-check-input border border-primary" type="radio"
                                                    name="p17" id="radio17.4" value="Tidak Benar">
                                                <label class="form-check-label" for="radio17.4">Tidak Benar (Jauh)</label>
                                            </div> --}}
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

                                            <div class="form-check form-check-inline ps-3">
                                                <input class="form-check-input border border-primary" type="radio"
                                                    name="p18" id="radio18.1" value="Sangat Benar" {{ old('p18') == 'Sangat Benar' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="radio18.1">Sangat Benar (Tidak Perlu)</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input border border-primary" type="radio"
                                                    name="p18" id="radio18.2" value="Benar" {{ old('p18') == 'Benar' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="radio18.2">Benar (Kadang-kadang)</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input border border-primary" type="radio"
                                                    name="p18" id="radio18.3" value="Kurang Benar" {{ old('p18') == 'Kurang Benar' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="radio18.3">Kurang Benar (Wajib imunisasi)</label>
                                            </div>
                                            {{-- <div class="form-check form-check-inline">
                                                <input class="form-check-input border border-primary" type="radio"
                                                    name="p18" id="radio18.4" value="Tidak Benar">
                                                <label class="form-check-label" for="radio18.4">Tidak Benar (Jauh)</label>
                                            </div> --}}
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
                                                dari 6 bulan harus di lakukan?</label> <br>

                                            <div class="form-check form-check-inline ps-3">
                                                <input class="form-check-input border border-primary" type="radio"
                                                    name="p19" id="radio19.1" value="Sangat Benar" {{ old('p19') == 'Sangat Benar' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="radio19.1">Sangat Benar (Pemberian Makanan padat)</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input border border-primary" type="radio"
                                                    name="p19" id="radio19.2" value="Benar" {{ old('p19') == 'Benar' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="radio19.2">Benar (Pemberian susu formula)</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input border border-primary" type="radio"
                                                    name="p19" id="radio19.3" value="Kurang Benar" {{ old('p19') == 'Kurang Benar' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="radio19.3">Kurang Benar (Hanya Asi)</label>
                                            </div>
                                            {{-- <div class="form-check form-check-inline">
                                                <input class="form-check-input border border-primary" type="radio"
                                                    name="p19" id="radio19.4" value="Tidak Benar">
                                                <label class="form-check-label" for="radio19.4">Tidak Benar ()</label>
                                            </div> --}}
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

                                            <div class="form-check form-check-inline ps-3">
                                                <input class="form-check-input border border-primary" type="radio"
                                                    name="p20" id="radio20.1" value="Sangat Benar" {{ old('p20') == 'Sangat Benar' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="radio20.1">Sangat Benar (Tidak ada)</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input border border-primary" type="radio"
                                                    name="p20" id="radio20.2" value="Benar" {{ old('p20') == 'Benar' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="radio20.2">Benar (Sangat kurang)</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input border border-primary" type="radio"
                                                    name="p20" id="radio20.3" value="Kurang Benar" {{ old('p20') == 'Kurang Benar' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="radio20.3">Kurang Benar (Cukup)</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input border border-primary" type="radio"
                                                    name="p20" id="radio20.4" value="Tidak Benar" {{ old('p20') == 'Tidak Benar' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="radio20.4">Tidak Benar (Sangat tercukupi)</label>
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

                                            <div class="form-check form-check-inline ps-3">
                                                <input class="form-check-input border border-primary" type="radio"
                                                    name="p21" id="radio21.1" value="Sangat Benar" {{ old('p21') == 'Sangat Benar' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="radio21.1">Sangat Benar (Sama sekali tidak suka)</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input border border-primary" type="radio"
                                                    name="p21" id="radio21.2" value="Benar" {{ old('p21') == 'Benar' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="radio21.2">Benar (Kurang begitu suka)</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input border border-primary" type="radio"
                                                    name="p21" id="radio21.3" value="Kurang Benar" {{ old('p21') == 'Kurang Benar' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="radio21.3">Kurang Benar (terkadang)</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input border border-primary" type="radio"
                                                    name="p21" id="radio21.4" value="Tidak Benar" {{ old('p21') == 'Tidak Benar' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="radio21.4">Tidak Benar (Normal)</label>
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

                                            <div class="form-check form-check-inline ps-3">
                                                <input class="form-check-input border border-primary" type="radio"
                                                    name="p22" id="radio22.1" value="Sangat Benar" {{ old('p22') == 'Sangat Benar' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="radio22.1">Sangat Benar (Hampir selalu)</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input border border-primary" type="radio"
                                                    name="p22" id="radio22.2" value="Benar" {{ old('p22') == 'Benar' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="radio22.2">Benar (Sering)</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input border border-primary" type="radio"
                                                    name="p22" id="radio22.3" value="Kurang Benar" {{ old('p22') == 'Kurang Benar' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="radio22.3">Kurang Benar (terkadang)</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input border border-primary" type="radio"
                                                    name="p22" id="radio22.4" value="Tidak Benar" {{ old('p22') == 'Tidak Benar' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="radio22.4">Tidak Benar (Tidak suka)</label>
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

                                            <div class="form-check form-check-inline ps-3">
                                                <input class="form-check-input border border-primary" type="radio"
                                                    name="p23" id="radio23.1" value="Sangat Benar" {{ old('p23') == 'Sangat Benar' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="radio23.1">Sangat Benar (Sagat tidak suka)</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input border border-primary" type="radio"
                                                    name="p23" id="radio23.2" value="Benar" {{ old('p23') == 'Benar' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="radio23.2">Benar (Kurang Bagitu suka)</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input border border-primary" type="radio"
                                                    name="p23" id="radio23.3" value="Kurang Benar" {{ old('p23') == 'Kurang Benar' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="radio23.3">Kurang Benar (Terkadang)</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input border border-primary" type="radio"
                                                    name="p23" id="radio23.4" value="Tidak Benar" {{ old('p23') == 'Tidak Benar' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="radio23.4">Tidak Benar (Normal)</label>
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

                                            <div class="form-check form-check-inline ps-3">
                                                <input class="form-check-input border border-primary" type="radio"
                                                    name="p24" id="radio24.1" value="Sangat Benar" {{ old('p24') == 'Sangat Benar' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="radio24.1">Sangat Benar (Tidak suka)</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input border border-primary" type="radio"
                                                    name="p24" id="radio24.2" value="Benar" {{ old('p24') == 'Benar' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="radio24.2">Benar (pilih-pilih makanan)</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input border border-primary" type="radio"
                                                    name="p24" id="radio24.3" value="Kurang Benar" {{ old('p24') == 'Kurang Benar' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="radio24.3">Kurang Benar (terkadang)</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input border border-primary" type="radio"
                                                    name="p24" id="radio24.4" value="Tidak Benar" {{ old('p24') == 'Tidak Benar' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="radio24.4">Tidak Benar (Normal)</label>
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
                                            <label>25. Apakah ibu hamil memberikan ASI kurang dari 8-12 kali sehari pada anak yang belum mendapatkan MPASI (Makanan Pendamping ASI)?</label> <br>

                                            <div class="form-check form-check-inline ps-3">
                                                <input class="form-check-input border border-primary" type="radio"
                                                    name="p25" id="radio25.1" value="Sangat Benar" {{ old('p25') == 'Sangat Benar' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="radio25.1">Sangat Benar (8-12 kali)</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input border border-primary" type="radio"
                                                    name="p25" id="radio25.2" value="Benar" {{ old('p25') == 'Benar' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="radio25.2">Benar (5-7 Kali)</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input border border-primary" type="radio"
                                                    name="p25" id="radio25.3" value="Kurang Benar" {{ old('p25') == 'Kurang Benar' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="radio25.3">Kurang Benar (6-3)</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input border border-primary" type="radio"
                                                    name="p25" id="radio25.4" value="Tidak Benar" {{ old('p25') == 'Tidak Benar' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="radio25.4">Tidak Benar (1-2 Kali)</label>
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

                                            <div class="form-check form-check-inline ps-3">
                                                <input class="form-check-input border border-primary" type="radio"
                                                    name="p26" id="radio26.1" value="Sangat Benar" {{ old('p26') == 'Sangat Benar' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="radio26.1">Sangat Benar (Sangat Sulit)</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input border border-primary" type="radio"
                                                    name="p26" id="radio26.2" value="Benar" {{ old('p26') == 'Benar' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="radio26.2">Benar (Pilih-pilih makanan)</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input border border-primary" type="radio"
                                                    name="p26" id="radio26.3" value="Kurang Benar" {{ old('p26') == 'Kurang Benar' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="radio26.3">Kurang Benar (Terkadang)</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input border border-primary" type="radio"
                                                    name="p26" id="radio26.4" value="Tidak Benar" {{ old('p26') == 'Tidak Benar' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="radio26.4">Tidak Benar (Normal)</label>
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

                                            <div class="form-check form-check-inline ps-3">
                                                <input class="form-check-input border border-primary" type="radio"
                                                    name="p27" id="radio27.1" value="Sangat Benar" {{ old('p27') == 'Sangat Benar' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="radio27.1">Sangat Benar (Hampir tidak mau)</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input border border-primary" type="radio"
                                                    name="p27" id="radio27.2" value="Benar" {{ old('p27') == 'Benar' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="radio27.2">Benar (pilih-pilih makanan)</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input border border-primary" type="radio"
                                                    name="p27" id="radio27.3" value="Kurang Benar" {{ old('p27') == 'Kurang Benar' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="radio27.3">kurang Benar (Terkadang)</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input border border-primary" type="radio"
                                                    name="p27" id="radio27.4" value="Tidak Benar" {{ old('p27') == 'Tidak Benar' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="radio27.4">Tidak Benar (Normal)</label>
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

                                            <div class="form-check form-check-inline ps-3">
                                                <input class="form-check-input border border-primary" type="radio"
                                                    name="p28" id="radio28.1" value="Sangat Benar" {{ old('p28') == 'Sangat Benar' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="radio28.1">Sangat Benar (anak memiliki alergi)</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input border border-primary" type="radio"
                                                    name="p28" id="radio28.2" value="Benar" {{ old('p28') == 'Benar' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="radio28.2">Benar (tidak menyukai makanan tertentu.)</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input border border-primary" type="radio"
                                                    name="p28" id="radio28.3" value="Kurang Benar" {{ old('p28') == 'Kurang Benar' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="radio28.3">Kurang Benar (Terkadang)</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input border border-primary" type="radio"
                                                    name="p28" id="radio28.4" value="Tidak Benar" {{ old('p28') == 'Tidak Benar' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="radio28.4">Tidak Benar
                                                    (Normal)</label>
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

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Pemberitahuan</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Nilai inputan :</p>
                    <ul>
                        <li>Sangat Benar</li>
                        <li>Benar</li>
                        <li>Kurang Benar</li>
                        <li>Tidak Benar</li>
                    </ul>
                    <span>Tidak mencerminkan jawaban yang Benar atau salah, Melainkan jawaban yang mencerminkan dengan
                        kondisi atau situasi yang ada</span>
                </div>
            </div>
        </div>
    </div>
@endsection
