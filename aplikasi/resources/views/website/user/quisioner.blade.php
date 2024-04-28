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
                <h3 class="card-title">Ada 28 Pertanyaan yang Harus di isi ....</h3>
              </div>

              <form method="POST" action="{{ route('proses') }}">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    {{-- 1 --}}
                    <div class="alert alert-light shadow-sm bg-body-tertiary py-3 rounded" role="alert">
                        <label>1. Apakah tempat tinggal saat ini terdapat terdapat
                            pencemaran udara seperti TPA, Asap dari
                            industri pabrik, dan Peternakan?</label> <br>
                        <div class="form-check form-check-inline ms-3">
                            <input class="form-check-input border border-primary" type="radio" name="p1" id="radio1.1" value="Sangat Benar">
                            <label class="form-check-label" for="radio1.1">Sangat Benar (Jarak < 1 Meter )</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input border border-primary" type="radio" name="p1" id="radio1.2" value="Benar">
                            <label class="form-check-label" for="radio1.2">Benar (Jarak 2 - 3 Meter )</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input border border-primary" type="radio" name="p1" id="radio1.3" value="Kurang Benar">
                            <label class="form-check-label" for="radio1.3">Kurang Benar (Jarak 5 Meter )</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input border border-primary" type="radio" name="p1" id="radio1.4" value="Tidak Benar">
                            <label class="form-check-label" for="radio1.4">Tidak Benar (> 1 KM)</label>
                        </div>     
                    </div>

                    {{-- 2 --}}
                    <div class="alert alert-light shadow-sm bg-body-tertiary py-3 rounded" role="alert">
                        <label>2. Apakah rumah dekat dengan sungai dan
                            persawahan?</label> <br>
                        <div class="form-check form-check-inline ms-3">
                            <input class="form-check-input border border-primary" type="radio" name="p2" id="radio2.1" value="Sangat Benar">
                            <label class="form-check-label" for="radio2.1">Sangat Benar (Jarak < 1 Meter )</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input border border-primary" type="radio" name="p2" id="radio2.2" value="Benar">
                            <label class="form-check-label" for="radio2.2">Benar (Jarak 2 - 3 Meter )</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input border border-primary" type="radio" name="p2" id="radio2.3" value="Kurang Benar">
                            <label class="form-check-label" for="radio2.3">Kurang Benar (Jarak 5 Meter )</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input border border-primary" type="radio" name="p2" id="radio2.4" value="Tidak Benar">
                            <label class="form-check-label" for="radio2.4">Tidak Benar (Jauh)</label>
                        </div>     
                    </div>

                    {{-- 3 --}}
                    <div class="alert alert-light shadow-sm bg-body-tertiary py-3 rounded" role="alert">
                        <label>3. Apakah tempat tinggal saat ini termasuk dalam
                            kategori 3T(terpencil, Terpinggirkan, dan
                            Tertinggal) yang jauh dari akses kesehatan?</label> <br>
                        <div class="form-check form-check-inline ms-3">
                            <input class="form-check-input border border-primary" type="radio" name="p3" id="radio3.1" value="Sangat Benar">
                            <label class="form-check-label" for="radio3.1">Sangat Benar (Jarak < 1 Meter )</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input border border-primary" type="radio" name="p3" id="radio3.2" value="Benar">
                            <label class="form-check-label" for="radio3.2">Benar (Jarak 2 - 3 Meter )</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input border border-primary" type="radio" name="p3" id="radio3.3" value="Kurang Benar">
                            <label class="form-check-label" for="radio3.3">Kurang Benar (Jarak 5 Meter )</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input border border-primary" type="radio" name="p3" id="radio3.4" value="Tidak Benar">
                            <label class="form-check-label" for="radio3.4">Tidak Benar (Jauh)</label>
                        </div>     
                    </div>
                    
                    {{-- 4 --}}
                    <div class="alert alert-light shadow-sm bg-body-tertiary py-3 rounded" role="alert">
                        <label>4. Apakah di sekitar rumah tidak terdapat tanaman
                            atau pohon?</label> <br>
                        <div class="form-check form-check-inline ms-3">
                            <input class="form-check-input border border-primary" type="radio" name="p4" id="radio4.1" value="Sangat Benar">
                            <label class="form-check-label" for="radio4.1">Sangat Benar (Jarak < 1 Meter )</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input border border-primary" type="radio" name="p4" id="radio4.2" value="Benar">
                            <label class="form-check-label" for="radio4.2">Benar (Jarak 2 - 3 Meter )</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input border border-primary" type="radio" name="p4" id="radio4.3" value="Kurang Benar">
                            <label class="form-check-label" for="radio4.3">Kurang Benar (Jarak 5 Meter )</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input border border-primary" type="radio" name="p4" id="radio4.4" value="Tidak Benar">
                            <label class="form-check-label" for="radio4.4">Tidak Benar (Jauh)</label>
                        </div>     
                    </div>

                    {{-- 5 --}}
                    <div class="alert alert-light shadow-sm bg-body-tertiary py-3 rounded" role="alert">
                        <label>5. Apakah saat ini anak di berikan susu formula
                            untuk alternatif pengganti ASI ?</label> <br>
                        <div class="form-check form-check-inline ms-3">
                            <input class="form-check-input border border-primary" type="radio" name="p5" id="radio5.1" value="Sangat Benar">
                            <label class="form-check-label" for="radio5.1">Sangat Benar (Jarak < 1 Meter )</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input border border-primary" type="radio" name="p5" id="radio5.2" value="Benar">
                            <label class="form-check-label" for="radio5.2">Benar (Jarak 2 - 3 Meter )</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input border border-primary" type="radio" name="p5" id="radio5.3" value="Kurang Benar">
                            <label class="form-check-label" for="radio5.3">Kurang Benar (Jarak 5 Meter )</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input border border-primary" type="radio" name="p5" id="radio5.4" value="Tidak Benar">
                            <label class="form-check-label" for="radio5.4">Tidak Benar (Jauh)</label>
                        </div>     
                    </div>

                    {{-- 6 --}}
                    <div class="alert alert-light shadow-sm bg-body-tertiary py-3 rounded" role="alert">
                        <label>6. Apakah orang tua mempunyai kesibukan yang
                            padat hingga tidak dapat mengikuti posyandu
                            secara rutin ?</label> <br>

                        <div class="form-check form-check-inline ps-3">
                            <input class="form-check-input border border-primary" type="radio" name="p6" id="radio6.1" value="Sangat Benar">
                            <label class="form-check-label" for="radio6.1">Sangat Benar (Jarak < 1 Meter )</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input border border-primary" type="radio" name="p6" id="radio6.2" value="Benar">
                            <label class="form-check-label" for="radio6.2">Benar (Jarak 2 - 3 Meter )</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input border border-primary" type="radio" name="p6" id="radio6.3" value="Kurang Benar">
                            <label class="form-check-label" for="radio6.3">Kurang Benar (Jarak 5 Meter )</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input border border-primary" type="radio" name="p6" id="radio6.4" value="Tidak Benar">
                            <label class="form-check-label" for="radio6.4">Tidak Benar (Jauh)</label>
                        </div>     
                    </div>

                    {{-- 7 --}}
                    <div class="alert alert-light shadow-sm bg-body-tertiary py-3 rounded" role="alert">
                        <label>7. Pada saat usia di bawah 6 bulan apakah ibu
                            memberikan makanan pendamping asi ?</label> <br>

                        <div class="form-check form-check-inline ps-3">
                            <input class="form-check-input border border-primary" type="radio" name="p7" id="radio7.1" value="Sangat Benar">
                            <label class="form-check-label" for="radio7.1">Sangat Benar (Jarak < 1 Meter )</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input border border-primary" type="radio" name="p7" id="radio7.2" value="Benar">
                            <label class="form-check-label" for="radio7.2">Benar (Jarak 2 - 3 Meter )</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input border border-primary" type="radio" name="p7" id="radio7.3" value="Kurang Benar">
                            <label class="form-check-label" for="radio7.3">Kurang Benar (Jarak 5 Meter )</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input border border-primary" type="radio" name="p7" id="radio7.4" value="Tidak Benar">
                            <label class="form-check-label" for="radio7.4">Tidak Benar (Jauh)</label>
                        </div>     
                    </div>

                    {{-- 8 --}}
                    <div class="alert alert-light shadow-sm bg-body-tertiary py-3 rounded" role="alert">
                        <label>8. Apakah orang tua melakukan aktifitas merokok
                            saat berinteraksi dengan anak selama waktu
                            bermain?</label> <br>

                        <div class="form-check form-check-inline ps-3">
                            <input class="form-check-input border border-primary" type="radio" name="p8" id="radio8.1" value="Sangat Benar">
                            <label class="form-check-label" for="radio8.1">Sangat Benar (Jarak < 1 Meter )</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input border border-primary" type="radio" name="p8" id="radio8.2" value="Benar">
                            <label class="form-check-label" for="radio8.2">Benar (Jarak 2 - 3 Meter )</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input border border-primary" type="radio" name="p8" id="radio8.3" value="Kurang Benar">
                            <label class="form-check-label" for="radio8.3">Kurang Benar (Jarak 5 Meter )</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input border border-primary" type="radio" name="p8" id="radio8.4" value="Tidak Benar">
                            <label class="form-check-label" for="radio8.4">Tidak Benar (Jauh)</label>
                        </div>     
                    </div>

                    {{-- 9 --}}
                    <div class="alert alert-light shadow-sm bg-body-tertiary py-3 rounded" role="alert">
                        <label>9. Apakah anak barusaja mengalami sakit atau
                            demam?</label> <br>

                        <div class="form-check form-check-inline ps-3">
                            <input class="form-check-input border border-primary" type="radio" name="p9" id="radio9.1" value="Sangat Benar">
                            <label class="form-check-label" for="radio9.1">Sangat Benar (Jarak < 1 Meter )</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input border border-primary" type="radio" name="p9" id="radio9.2" value="Benar">
                            <label class="form-check-label" for="radio9.2">Benar (Jarak 2 - 3 Meter )</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input border border-primary" type="radio" name="p9" id="radio9.3" value="Kurang Benar">
                            <label class="form-check-label" for="radio9.3">Kurang Benar (Jarak 5 Meter )</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input border border-primary" type="radio" name="p9" id="radio9.4" value="Tidak Benar">
                            <label class="form-check-label" for="radio9.4">Tidak Benar (Jauh)</label>
                        </div>     
                    </div>

                    {{-- 10 --}}
                    <div class="alert alert-light shadow-sm bg-body-tertiary py-3 rounded" role="alert">
                        <label>10. Apakah anak mempunyai nafsu makan yang
                            kurang bagus saat ini ?</label> <br>

                        <div class="form-check form-check-inline ps-3">
                            <input class="form-check-input border border-primary" type="radio" name="p10" id="radio10.1" value="Sangat Benar">
                            <label class="form-check-label" for="radio10.1">Sangat Benar (Jarak < 1 Meter )</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input border border-primary" type="radio" name="p10" id="radio10.2" value="Benar">
                            <label class="form-check-label" for="radio10.2">Benar (Jarak 2 - 3 Meter )</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input border border-primary" type="radio" name="p10" id="radio10.3" value="Kurang Benar">
                            <label class="form-check-label" for="radio10.3">Kurang Benar (Jarak 5 Meter )</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input border border-primary" type="radio" name="p10" id="radio10.4" value="Tidak Benar">
                            <label class="form-check-label" for="radio10.4">Tidak Benar (Jauh)</label>
                        </div>     
                    </div>

                    {{-- 11 --}}
                    <div class="alert alert-light shadow-sm bg-body-tertiary py-3 rounded" role="alert">
                        <label>11. Apakah anak kerap menangis dalam kurun waktu
                            yang lumayan lama ?</label> <br>

                        <div class="form-check form-check-inline ps-3">
                            <input class="form-check-input border border-primary" type="radio" name="p11" id="radio11.1" value="Sangat Benar">
                            <label class="form-check-label" for="radio11.1">Sangat Benar (Jarak < 1 Meter )</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input border border-primary" type="radio" name="p11" id="radio11.2" value="Benar">
                            <label class="form-check-label" for="radio11.2">Benar (Jarak 2 - 3 Meter )</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input border border-primary" type="radio" name="p11" id="radio11.3" value="Kurang Benar">
                            <label class="form-check-label" for="radio11.3">Kurang Benar (Jarak 5 Meter )</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input border border-primary" type="radio" name="p11" id="radio11.4" value="Tidak Benar">
                            <label class="form-check-label" for="radio11.4">Tidak Benar (Jauh)</label>
                        </div>     
                    </div>

                    {{-- 12 --}}
                    <div class="alert alert-light shadow-sm bg-body-tertiary py-3 rounded" role="alert">
                        <label>12. Apakah anak sulit untuk tidur ? </label> <br>

                        <div class="form-check form-check-inline ps-3">
                            <input class="form-check-input border border-primary" type="radio" name="p12" id="radio12.1" value="Sangat Benar">
                            <label class="form-check-label" for="radio12.1">Sangat Benar (Jarak < 1 Meter )</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input border border-primary" type="radio" name="p12" id="radio12.2" value="Benar">
                            <label class="form-check-label" for="radio12.2">Benar (Jarak 2 - 3 Meter )</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input border border-primary" type="radio" name="p12" id="radio12.3" value="Kurang Benar">
                            <label class="form-check-label" for="radio12.3">Kurang Benar (Jarak 5 Meter )</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input border border-primary" type="radio" name="p12" id="radio12.4" value="Tidak Benar">
                            <label class="form-check-label" for="radio12.4">Tidak Benar (Jauh)</label>
                        </div>     
                    </div>

                    {{-- 13 --}}
                    <div class="alert alert-light shadow-sm bg-body-tertiary py-3 rounded" role="alert">
                        <label>13. Apakah saat kehamilan ibu hamil jarang
                            mengkonsultasikan kesehatan dengan dokter,
                            bidan atau tenaga medis lainnya ?</label> <br>

                        <div class="form-check form-check-inline ps-3">
                            <input class="form-check-input border border-primary" type="radio" name="p13" id="radio13.1" value="Sangat Benar">
                            <label class="form-check-label" for="radio13.1">Sangat Benar (Jarak < 1 Meter )</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input border border-primary" type="radio" name="p13" id="radio13.2" value="Benar">
                            <label class="form-check-label" for="radio13.2">Benar (Jarak 2 - 3 Meter )</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input border border-primary" type="radio" name="p13" id="radio13.3" value="Kurang Benar">
                            <label class="form-check-label" for="radio13.3">Kurang Benar (Jarak 5 Meter )</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input border border-primary" type="radio" name="p13" id="radio13.4" value="Tidak Benar">
                            <label class="form-check-label" for="radio13.4">Tidak Benar (Jauh)</label>
                        </div>     
                    </div>

                    {{-- 14 --}}
                    <div class="alert alert-light shadow-sm bg-body-tertiary py-3 rounded" role="alert">
                        <label>14. Apakah saat hamil ibu mempunyai nafsu makan
                            yang kurang bagus ?</label> <br>

                        <div class="form-check form-check-inline ps-3">
                            <input class="form-check-input border border-primary" type="radio" name="p14" id="radio14.1" value="Sangat Benar">
                            <label class="form-check-label" for="radio14.1">Sangat Benar (Jarak < 1 Meter )</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input border border-primary" type="radio" name="p14" id="radio14.2" value="Benar">
                            <label class="form-check-label" for="radio14.2">Benar (Jarak 2 - 3 Meter )</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input border border-primary" type="radio" name="p14" id="radio14.3" value="Kurang Benar">
                            <label class="form-check-label" for="radio14.3">Kurang Benar (Jarak 5 Meter )</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input border border-primary" type="radio" name="p14" id="radio14.4" value="Tidak Benar">
                            <label class="form-check-label" for="radio14.4">Tidak Benar (Jauh)</label>
                        </div>     
                    </div>

                    {{-- 15 --}}
                    <div class="alert alert-light shadow-sm bg-body-tertiary py-3 rounded" role="alert">
                        <label>15. Apakah ibu sering mengalami gejala anemia
                            seperti kelelahan, kulit pucat, pusing, dan denyut
                            jantung cepat pada saat proses kehamilan?</label> <br>

                        <div class="form-check form-check-inline ps-3">
                            <input class="form-check-input border border-primary" type="radio" name="p15" id="radio15.1" value="Sangat Benar">
                            <label class="form-check-label" for="radio15.1">Sangat Benar (Jarak < 1 Meter )</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input border border-primary" type="radio" name="p15" id="radio15.2" value="Benar">
                            <label class="form-check-label" for="radio15.2">Benar (Jarak 2 - 3 Meter )</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input border border-primary" type="radio" name="p15" id="radio15.3" value="Kurang Benar">
                            <label class="form-check-label" for="radio15.3">Kurang Benar (Jarak 5 Meter )</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input border border-primary" type="radio" name="p15" id="radio15.4" value="Tidak Benar">
                            <label class="form-check-label" for="radio15.4">Tidak Benar (Jauh)</label>
                        </div>     
                    </div>

                    {{-- 16 --}}
                    <div class="alert alert-light shadow-sm bg-body-tertiary py-3 rounded" role="alert">
                        <label>16. Apakah pernah terjadi masalah kesehatan selama
                            kehamilan yang berdampak pada kondisi
                            kesehatan ibu secara kronis?</label> <br>

                        <div class="form-check form-check-inline ps-3">
                            <input class="form-check-input border border-primary" type="radio" name="p16" id="radio16.1" value="Sangat Benar">
                            <label class="form-check-label" for="radio16.1">Sangat Benar (Jarak < 1 Meter )</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input border border-primary" type="radio" name="p16" id="radio16.2" value="Benar">
                            <label class="form-check-label" for="radio16.2">Benar (Jarak 2 - 3 Meter )</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input border border-primary" type="radio" name="p16" id="radio16.3" value="Kurang Benar">
                            <label class="form-check-label" for="radio16.3">Kurang Benar (Jarak 5 Meter )</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input border border-primary" type="radio" name="p16" id="radio16.4" value="Tidak Benar">
                            <label class="form-check-label" for="radio16.4">Tidak Benar (Jauh)</label>
                        </div>     
                    </div>

                    {{-- 17 --}}
                    <div class="alert alert-light shadow-sm bg-body-tertiary py-3 rounded" role="alert">
                        <label>17. Apakah menurut orang tua, pemberian ASI
                            eksklusif selama 6 bulan pertama tidak selalu
                            Pengetahuan pentingnyaASI diperlukan atau bisa di gantikan dengan alternatif
                            susu formula menjadi pilihan yang sesuai?</label> <br>

                        <div class="form-check form-check-inline ps-3">
                            <input class="form-check-input border border-primary" type="radio" name="p17" id="radio17.1" value="Sangat Benar">
                            <label class="form-check-label" for="radio17.1">Sangat Benar (Jarak < 1 Meter )</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input border border-primary" type="radio" name="p17" id="radio17.2" value="Benar">
                            <label class="form-check-label" for="radio17.2">Benar (Jarak 2 - 3 Meter )</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input border border-primary" type="radio" name="p17" id="radio17.3" value="Kurang Benar">
                            <label class="form-check-label" for="radio17.3">Kurang Benar (Jarak 5 Meter )</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input border border-primary" type="radio" name="p17" id="radio17.4" value="Tidak Benar">
                            <label class="form-check-label" for="radio17.4">Tidak Benar (Jauh)</label>
                        </div>     
                    </div>

                    {{-- 18 --}}
                    <div class="alert alert-light shadow-sm bg-body-tertiary py-3 rounded" role="alert">
                        <label>18. Apakah menurut orang tua, imunisasi pada anak
                            dianggap opsional atau tidak wajib?</label> <br>

                        <div class="form-check form-check-inline ps-3">
                            <input class="form-check-input border border-primary" type="radio" name="p18" id="radio18.1" value="Sangat Benar">
                            <label class="form-check-label" for="radio18.1">Sangat Benar (Jarak < 1 Meter )</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input border border-primary" type="radio" name="p18" id="radio18.2" value="Benar">
                            <label class="form-check-label" for="radio18.2">Benar (Jarak 2 - 3 Meter )</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input border border-primary" type="radio" name="p18" id="radio18.3" value="Kurang Benar">
                            <label class="form-check-label" for="radio18.3">Kurang Benar (Jarak 5 Meter )</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input border border-primary" type="radio" name="p18" id="radio18.4" value="Tidak Benar">
                            <label class="form-check-label" for="radio18.4">Tidak Benar (Jauh)</label>
                        </div>     
                    </div>

                    {{-- 19 --}}
                    <div class="alert alert-light shadow-sm bg-body-tertiary py-3 rounded" role="alert">
                        <label>19. Apakah menurut orang tua pemberian makanan
                            pendamping sejak dini saat anak berusia kurang
                            dari 6 bulan harus di lakukan?</label> <br>

                        <div class="form-check form-check-inline ps-3">
                            <input class="form-check-input border border-primary" type="radio" name="p19" id="radio19.1" value="Sangat Benar">
                            <label class="form-check-label" for="radio19.1">Sangat Benar (Jarak < 1 Meter )</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input border border-primary" type="radio" name="p19" id="radio19.2" value="Benar">
                            <label class="form-check-label" for="radio19.2">Benar (Jarak 2 - 3 Meter )</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input border border-primary" type="radio" name="p19" id="radio19.3" value="Kurang Benar">
                            <label class="form-check-label" for="radio19.3">Kurang Benar (Jarak 5 Meter )</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input border border-primary" type="radio" name="p19" id="radio19.4" value="Tidak Benar">
                            <label class="form-check-label" for="radio19.4">Tidak Benar (Jauh)</label>
                        </div>     
                    </div>

                    {{-- 20 --}}
                    <div class="alert alert-light shadow-sm bg-body-tertiary py-3 rounded" role="alert">
                        <label>20. Apakah orang tua sering kali merasa kurang
                            informasi atau edukasi yang mencukupi dari
                            tenaga kesehatan tentang tumbuh kembang anak
                            mereka?</label> <br>

                        <div class="form-check form-check-inline ps-3">
                            <input class="form-check-input border border-primary" type="radio" name="p20" id="radio20.1" value="Sangat Benar">
                            <label class="form-check-label" for="radio20.1">Sangat Benar (Jarak < 1 Meter )</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input border border-primary" type="radio" name="p20" id="radio20.2" value="Benar">
                            <label class="form-check-label" for="radio20.2">Benar (Jarak 2 - 3 Meter )</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input border border-primary" type="radio" name="p20" id="radio20.3" value="Kurang Benar">
                            <label class="form-check-label" for="radio20.3">Kurang Benar (Jarak 5 Meter )</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input border border-primary" type="radio" name="p20" id="radio20.4" value="Tidak Benar">
                            <label class="form-check-label" for="radio20.4">Tidak Benar (Jauh)</label>
                        </div>     
                    </div>

                    {{-- 21 --}}
                    <div class="alert alert-light shadow-sm bg-body-tertiary py-3 rounded" role="alert">
                        <label>21. Apakah selama kehamilan, ibu hamil cenderung
                            kurang suka untuk mengonsumsi buah segar?</label> <br>

                        <div class="form-check form-check-inline ps-3">
                            <input class="form-check-input border border-primary" type="radio" name="p21" id="radio21.1" value="Sangat Benar">
                            <label class="form-check-label" for="radio21.1">Sangat Benar (Jarak < 1 Meter )</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input border border-primary" type="radio" name="p21" id="radio21.2" value="Benar">
                            <label class="form-check-label" for="radio21.2">Benar (Jarak 2 - 3 Meter )</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input border border-primary" type="radio" name="p21" id="radio21.3" value="Kurang Benar">
                            <label class="form-check-label" for="radio21.3">Kurang Benar (Jarak 5 Meter )</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input border border-primary" type="radio" name="p21" id="radio21.4" value="Tidak Benar">
                            <label class="form-check-label" for="radio21.4">Tidak Benar (Jauh)</label>
                        </div>     
                    </div>

                    {{-- 22 --}}
                    <div class="alert alert-light shadow-sm bg-body-tertiary py-3 rounded" role="alert">
                        <label>22. Apakah selama kehamilan, ibu hamil lebih suka
                            mengonsumsi makanan instan dari pada sumber
                            protein seperti tempe, tahu, daging, dan telur?</label> <br>

                        <div class="form-check form-check-inline ps-3">
                            <input class="form-check-input border border-primary" type="radio" name="p22" id="radio22.1" value="Sangat Benar">
                            <label class="form-check-label" for="radio22.1">Sangat Benar (Jarak < 1 Meter )</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input border border-primary" type="radio" name="p22" id="radio22.2" value="Benar">
                            <label class="form-check-label" for="radio22.2">Benar (Jarak 2 - 3 Meter )</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input border border-primary" type="radio" name="p22" id="radio22.3" value="Kurang Benar">
                            <label class="form-check-label" for="radio22.3">Kurang Benar (Jarak 5 Meter )</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input border border-primary" type="radio" name="p22" id="radio22.4" value="Tidak Benar">
                            <label class="form-check-label" for="radio22.4">Tidak Benar (Jauh)</label>
                        </div>     
                    </div>

                    {{-- 23 --}}
                    <div class="alert alert-light shadow-sm bg-body-tertiary py-3 rounded" role="alert">
                        <label>23. Apakah saat hamil ibu hamil kurang suka
                            mengkonsumsi sayuran segar ?</label> <br>

                        <div class="form-check form-check-inline ps-3">
                            <input class="form-check-input border border-primary" type="radio" name="p23" id="radio23.1" value="Sangat Benar">
                            <label class="form-check-label" for="radio23.1">Sangat Benar (Jarak < 1 Meter )</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input border border-primary" type="radio" name="p23" id="radio23.2" value="Benar">
                            <label class="form-check-label" for="radio23.2">Benar (Jarak 2 - 3 Meter )</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input border border-primary" type="radio" name="p23" id="radio23.3" value="Kurang Benar">
                            <label class="form-check-label" for="radio23.3">Kurang Benar (Jarak 5 Meter )</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input border border-primary" type="radio" name="p23" id="radio23.4" value="Tidak Benar">
                            <label class="form-check-label" for="radio23.4">Tidak Benar (Jauh)</label>
                        </div>     
                    </div>

                    {{-- 24 --}}
                    <div class="alert alert-light shadow-sm bg-body-tertiary py-3 rounded" role="alert">
                        <label>24. Apakah saat hamil ibu hamil kurang suka
                            mengkonsumsi karbo hidrat seperti nasi, roti, dan
                            karbohidrat lainnya ?</label> <br>

                        <div class="form-check form-check-inline ps-3">
                            <input class="form-check-input border border-primary" type="radio" name="p24" id="radio24.1" value="Sangat Benar">
                            <label class="form-check-label" for="radio24.1">Sangat Benar (Jarak < 1 Meter )</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input border border-primary" type="radio" name="p24" id="radio24.2" value="Benar">
                            <label class="form-check-label" for="radio24.2">Benar (Jarak 2 - 3 Meter )</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input border border-primary" type="radio" name="p24" id="radio24.3" value="Kurang Benar">
                            <label class="form-check-label" for="radio24.3">Kurang Benar (Jarak 5 Meter )</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input border border-primary" type="radio" name="p24" id="radio24.4" value="Tidak Benar">
                            <label class="form-check-label" for="radio24.4">Tidak Benar (Jauh)</label>
                        </div>     
                    </div>

                    {{-- 25 --}}
                    <div class="alert alert-light shadow-sm bg-body-tertiary py-3 rounded" role="alert">
                        <label>25. Apakah ibu hamil memberikan asi dalam sehari
                            kurang dari 8-12 saat anak belum mendapatkan
                            MPASI(Makanan pendamping ASI)?</label> <br>

                        <div class="form-check form-check-inline ps-3">
                            <input class="form-check-input border border-primary" type="radio" name="p25" id="radio25.1" value="Sangat Benar">
                            <label class="form-check-label" for="radio25.1">Sangat Benar (Jarak < 1 Meter )</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input border border-primary" type="radio" name="p25" id="radio25.2" value="Benar">
                            <label class="form-check-label" for="radio25.2">Benar (Jarak 2 - 3 Meter )</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input border border-primary" type="radio" name="p25" id="radio25.3" value="Kurang Benar">
                            <label class="form-check-label" for="radio25.3">Kurang Benar (Jarak 5 Meter )</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input border border-primary" type="radio" name="p25" id="radio25.4" value="Tidak Benar">
                            <label class="form-check-label" for="radio25.4">Tidak Benar (Jauh)</label>
                        </div>     
                    </div>

                    {{-- 26 --}}
                    <div class="alert alert-light shadow-sm bg-body-tertiary py-3 rounded" role="alert">
                        <label>26. Apakah anak sulit untuk di suruh makan ?</label> <br>

                        <div class="form-check form-check-inline ps-3">
                            <input class="form-check-input border border-primary" type="radio" name="p26" id="radio26.1" value="Sangat Benar">
                            <label class="form-check-label" for="radio26.1">Sangat Benar (Jarak < 1 Meter )</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input border border-primary" type="radio" name="p26" id="radio26.2" value="Benar">
                            <label class="form-check-label" for="radio26.2">Benar (Jarak 2 - 3 Meter )</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input border border-primary" type="radio" name="p26" id="radio26.3" value="Kurang Benar">
                            <label class="form-check-label" for="radio26.3">Kurang Benar (Jarak 5 Meter )</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input border border-primary" type="radio" name="p26" id="radio26.4" value="Tidak Benar">
                            <label class="form-check-label" for="radio26.4">Tidak Benar (Jauh)</label>
                        </div>     
                    </div>

                    {{-- 27 --}}
                    <div class="alert alert-light shadow-sm bg-body-tertiary py-3 rounded" role="alert">
                        <label>27. Pada saat usia 6-24 bulan Apakah anak tidak
                            suka makan sayur?</label> <br>

                        <div class="form-check form-check-inline ps-3">
                            <input class="form-check-input border border-primary" type="radio" name="p27" id="radio27.1" value="Sangat Benar">
                            <label class="form-check-label" for="radio27.1">Sangat Benar (Jarak < 1 Meter )</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input border border-primary" type="radio" name="p27" id="radio27.2" value="Benar">
                            <label class="form-check-label" for="radio27.2">Benar (Jarak 2 - 3 Meter )</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input border border-primary" type="radio" name="p27" id="radio27.3" value="Kurang Benar">
                            <label class="form-check-label" for="radio27.3">kurang Benar (Jarak 5 Meter )</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input border border-primary" type="radio" name="p27" id="radio27.4" value="Tidak Benar">
                            <label class="form-check-label" for="radio27.4">Tidak Benar (Jauh)</label>
                        </div>     
                    </div>

                    {{-- 28 --}}
                    <div class="alert alert-light shadow-sm bg-body-tertiary py-3 rounded" role="alert">
                        <label>28. Apakah ada makanan tertentu yang harus
                            dihindari saat memberi makan anak untuk
                            mencegah alergi atau masalah kesehatan
                            lainnya?</label> <br>

                        <div class="form-check form-check-inline ps-3">
                            <input class="form-check-input border border-primary" type="radio" name="p28" id="radio28.1" value="Sangat Benar">
                            <label class="form-check-label" for="radio28.1">Sangat Benar (Jarak < 1 Meter )</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input border border-primary" type="radio" name="p28" id="radio28.2" value="Benar">
                            <label class="form-check-label" for="radio28.2">Benar (Jarak 2 - 3 Meter )</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input border border-primary" type="radio" name="p28" id="radio28.3" value="Kurang Benar">
                            <label class="form-check-label" for="radio28.3">Kurang Benar (Jarak 5 Meter )</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input border border-primary" type="radio" name="p28" id="radio28.4" value="Tidak Benar">
                            <label class="form-check-label" for="radio28.4">Tidak Benar (Jauh)</label>
                        </div>     
                    </div>

                    <div class="alert alert-light shadow-sm bg-body-tertiary py-3 rounded text-center" role="alert">
                        <p>Apakah Semua data yang dimasukan sudah sesuai? <br>
                            Jika semua sudah sesuai klik Tombol Proses di bawah ini</p>
                        <div class="d-grid gap-2">
                            <button class="btn btn-primary" type="submit">Proses</button>
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