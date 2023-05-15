@extends('layouts.main')

@section('home')
<!--Content 1-->
<div class="content container mt-5">
  <div class="row">        
        <img class="img-content1" src="{{ asset('img/img-content1.png') }}" alt="" >
    <div class="col text-start">
      <img class="pop-hello mb-3" src="{{ asset('img/hello.png') }}" alt="">
      <h1 class="text-mobile fw-medium fs-2">Penerbit <strong class="fw-semibold"> Pena Cendekia</strong></h1>
      <h5 class="text-mobile textHeader fw-medium fs-5">Wahana Penyalur Ilmu Pengetahuan</h5>
      <div class="text-start">
        <hr class="my-4">
        <p class="text-mobile textHeader fs-6 fw-normal">Konsep Penerbit Pena Cendekia bermula dari banyaknya kebutuhan dosen untuk menerbitkan naskah buku sebagai buku teks atau buku referensi. Kami melakukan penelitian, diskusi dan benchmarking selama 2 (dua tahun) tahun mengenai proses produksi apa yang paling cocok untuk memenuhi kebutuhan ini. Pada akhirnya kami berhasil menemukan polanya dan ternyata sangat menakjubkan.</p> 
        <p class="text-mobile textHeader fs-6 fw-normal"> Kami dapat memproses semua naskah buku hanya dalam waktu 6 (enam) minggu! Kami tidak hanya berinovasi dalam sistem produksi, kami juga mengembangkan sistem lain untuk memudahkan para Cendekia.</p>           
      </div>
    </div>
  </div>
</div>
<!--End Content 1-->
@endsection