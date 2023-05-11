<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!-- css -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- css -->
    </head>
  <body class="body">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid mx-5">
          <a class="navbar-brand" href="#">
            <img src="{{ asset('img/logo.png') }}" alt="Logo Pena Cendekia" width="50" height="50">
          </a>
          <a class="navbar-brand" href="#">Pena Cendekia</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ms-auto py-auto">      
              <a class="nav-link pe-5" aria-current="page" href="/"><img class="nav-pic pe-2" src="{{ asset('img/home.svg') }}" alt=""> Beranda</a>     
              <a class="nav-link pe-5" href="#"><img class="nav-pic pe-2" src="{{ asset('img/tentang.svg') }}" alt=""> Tentang Kami</a>    
              <a class="nav-link pe-5" href="#"><img class="nav-pic pe-2" src="{{ asset('img/blog.svg') }}" alt=""> Blog</a>    
              <a class="nav-link pe-5" href="#"><img class="nav-pic pe-2" src="{{ asset('img/kontak.svg') }}" alt=""> Kontak</a>
              <button class="btn btn-primary px-3" type="button" style="background-color:#0095DA !important; border-color:#0095DA">
                <img class="px-1" src="{{ asset('img/login.svg') }}" alt="">
                Login</button>
            </div>
          </div>
        </div>
      </nav>
      <!--End Navbar -->
      
      <!--Header-->
      <div class="container text-center mt-5 ">
        <div class="row row-cols-2">
          <div class="col">            
            <div class="text-start">
            <h1 class="Header fw-bold my-4">
                Menerbitkan Buku Cetak Dengan Kualitas Terbaik
            </h1>
            <p class="textHeader fw-normal ">Buku adalah jendela dunia, dan percetakan adalah pintu masuk ke dalamnya. <br> Di balik setiap halaman buku yang kita pegang, terdapat kerja keras dari para ahli percetakan yang menyempurnakan setiap detail dari desain hingga cetakan.</p>
            <div class="d-grid gap-2">
                <button class="btn btn-primary mt-2" type="button" style="background-color:#0095DA !important; border-color:#0095DA">Lihat Selengkapnya</button>
              </div>
            </div>
        </div>
          <div class="col">
            <div class="mt-4">
            <img class="img-header" src="{{ asset('img/home-img.png') }}" alt="" ></div>
          </div>
        </div>
      </div>
      <!--Header-->

      <!--Content 1-->
      <div class="content container mt-5">
        <div class="row">        
              <img class="img-content1" src="{{ asset('img/img-content1.png') }}" alt="" >
          <div class="col text-start">
            <img class="pop-hello mb-3" src="{{ asset('img/hello.png') }}" alt="">
            <h1 class="fw-semibold fs-2">Penerbit Pena Cendekia</h1>
            <h5 class="textHeader fw-medium fs-5">Wahana Penyalur Ilmu Pengetahuan</h5>
            <div class="text-start me-5">
              <hr class="my-4 me-4">
              <p class="textHeader fs-6 fw-normal me-4">Konsep Penerbit Pena Cendekia bermula dari banyaknya kebutuhan dosen untuk menerbitkan naskah buku sebagai buku teks atau buku referensi. Kami melakukan penelitian, diskusi dan benchmarking selama 2 (dua tahun) tahun mengenai proses produksi apa yang paling cocok untuk memenuhi kebutuhan ini. Pada akhirnya kami berhasil menemukan polanya dan ternyata sangat menakjubkan.</p> 
              <p class="textHeader fs-6 fw-normal me-4"> Kami dapat memproses semua naskah buku hanya dalam waktu 6 (enam) minggu! Kami tidak hanya berinovasi dalam sistem produksi, kami juga mengembangkan sistem lain untuk memudahkan para Cendekia.</p>           
            </div>
          </div>
        </div>
      </div>
      <!--End Content 1-->

      <!--Content 2-->
      <div class="content container mt-5">
        <div class="row">
          <div class="col text-start">
          <img class="pop-hello mb-3" src="{{ asset('img/produk.png') }}" alt="">
          <h1 class="fw-semibold fs-2">Produk Pena Cendekia</h1>
          <h5 class="textHeader fw-medium fs-5">Kamu Bisa Mendapatkan Produk Pena Cendekia</h5>
          <div class="text-start me-5">
            <hr class="my-4 me-4">
            <p class="textHeader fs-6 fw-normal me-4">Ingin karya tulisanmu menjadi lebih bermakna dan terlihat profesional? Pena Cendekia hadir untuk membantumu! Percetakan kami menyediakan layanan percetakan berkualitas tinggi untuk berbagai jenis tulisan, mulai dari buku, jurnal, brosur, hingga kartu nama. Dengan teknologi modern dan tenaga ahli percetakan yang handal, Pena Cendekia siap membantu mewujudkan setiap ide dan karya tulisanmu menjadi produk cetakan yang istimewa. Percayakan karya tulisanmu hanya pada Pena Cendekia, percetakan yang mengutamakan kualitas dan kepuasan pelanggan.</p>        
            
            <p class="textHeader fs-6 fw-medium" >Beli Sekarang</p>

            <div class="container text-center">
  <div class="row row-cols-auto">
    <div class="col ps-0 pe-3"><a href=""><img class="icon-shop" src="{{ asset('img/ic-tokped.png') }}" alt=""></a></div>
    <div class="col pe-3"><a href=""><img class="icon-shop" src="{{ asset('img/ic-shopee.png') }}" alt=""></a></div>
    <div class="col pe-3"><a href=""><img class="icon-shop" src="{{ asset('img/ic-bukalapak.png') }}" alt=""></a></div>
  </div>
</div>


          </div>
        </div>
        <div class="slider">
          <input type="radio" name="radio-btn" id="radio1">
          <input type="radio" name="radio-btn" id="radio2">
          <input type="radio" name="radio-btn" id="radio3">
          <input type="radio" name="radio-btn" id="radio4">
          <div class="slider">
            <img class="img-content1" src="{{ asset('img/img-content1.png') }}" alt="" >
          </div>
          <div class="slider">
            <img class="img-content1" src="{{ asset('img/img-content1.png') }}" alt="" >
          </div>
          <div class="slider">
            <img class="img-content1" src="{{ asset('img/img-content1.png') }}" alt="" >
          </div>
          <div class="slider">
            <img class="img-content1" src="{{ asset('img/img-content1.png') }}" alt="" >
          </div>
        </div>
        <div class="nav-auto">
          <div class="a-b1"></div>
          <div class="a-b2"></div>
          <div class="a-b3"></div>
          <div class="a-b4"></div>
        </div>
        
        <div class="nav m"></div>

        </div>
      </div>
      <!--End Content 2-->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>