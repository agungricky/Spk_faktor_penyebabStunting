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
              <li class="breadcrumb-item active">Riwayat Posyandu</li>
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
        <div class="accordion" id="accordionExample">
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                Umur #1 Bulan
              </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                1. Tidur: Anak usia 1 bulan cenderung tidur sekitar 14-17 jam per hari, tetapi pola tidur mereka mungkin tidak teratur dan sering kali terbangun untuk makan. Penting bagi bayi untuk mendapatkan cukup tidur agar dapat tumbuh dan berkembang dengan baik. <br><br>

                2. Tinggi Badan: Rata-rata, tinggi badan bayi usia 1 bulan berkisar antara 52-55 cm untuk bayi laki-laki dan 50-53 cm untuk bayi perempuan. Namun, angka ini dapat bervariasi tergantung pada faktor genetik dan lingkungan.
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                Umur #2 Bulan
              </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                Tidur: Anak usia 2 bulan cenderung tidur sekitar 12-16 jam per hari. Meskipun pola tidur mereka mungkin belum teratur, mereka mungkin mulai memiliki sedikit lebih banyak waktu tidur malam yang konsisten. Namun, mereka masih akan sering terbangun untuk makan dan perawatan. Penting bagi bayi untuk mendapatkan cukup tidur agar dapat tumbuh dan berkembang dengan baik. <br><br>
                
                inggi Badan: Rata-rata, tinggi badan bayi usia 2 bulan berkisar antara 55-60 cm untuk bayi laki-laki dan 53-58 cm untuk bayi perempuan. Namun, perlu diingat bahwa angka ini dapat bervariasi tergantung pada faktor genetik dan lingkungan serta kondisi individu masing-masing bayi.<br><br>
                
                Sama seperti pada usia 1 bulan, penting untuk memastikan bayi mendapatkan asupan nutrisi yang cukup, tidur yang cukup, dan perawatan kesehatan yang tepat untuk mendukung pertumbuhan dan perkembangan yang sehat. Jangan ragu untuk berkonsultasi dengan dokter anak untuk mendapatkan pemantauan dan saran yang lebih spesifik sesuai dengan kebutuhan bayi Anda.
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                Umur #3 Bulan
              </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                Tidur: Anak usia 3 bulan biasanya tidur sekitar 12-16 jam per hari, dengan pola tidur yang mulai menjadi lebih teratur. <br><br>
                
                Tinggi Badan: Rata-rata, tinggi badan bayi usia 3 bulan berkisar antara 58-63 cm untuk bayi laki-laki dan 56-61 cm untuk bayi perempuan. <br><br>
                
                Pastikan bayi Anda mendapatkan asupan nutrisi yang cukup, tidur yang cukup, dan perawatan kesehatan yang tepat untuk mendukung pertumbuhan dan perkembangan yang sehat. Tetap pantau perkembangan bayi Anda dan konsultasikan dengan dokter anak secara teratur.
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- /card -->
  </div>
@endsection
