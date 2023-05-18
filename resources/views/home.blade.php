@extends('layouts.main')

@section('home')
<!-- Beranda -->
      <div class="container text-center mt-5 p-0">
        <div class="row mx-1">
          <div class="col-lg-6 col-md-6 mb-5">            
            <div class="text-start">
            <h1 class="Header fw-bold mb-4">
                Menerbitkan Buku Cetak Dengan Kualitas Terbaik
            </h1> 
            <p class="textHeader fw-normal">Buku adalah jendela dunia, dan percetakan adalah pintu masuk ke dalamnya. <br> Di balik setiap halaman buku yang kita pegang, terdapat kerja keras dari para ahli percetakan yang menyempurnakan setiap detail dari desain hingga cetakan.</p>
            <div class="d-grid gap-2">
                <button class="btn btn-primary mt-2" type="button" style="background-color:#0095DA !important; border-color:#0095DA">Lihat Selengkapnya</button>
              </div>
            </div>
        </div>
          <div class="col-lg-6 col-md-6">
            <div class="">
              <img class="img-header" src="{{ asset('img/home-img.png') }}" alt="" >
            </div>
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

      <!--Content 2-->
      <div class="container mt-5">
        <div class="row p-0 m-0">
          <div class="col text-start p-0">
          <img class="pop-hello mb-3" src="{{ asset('img/produk.png') }}" alt="">
          <h1 class="h1-left fw-medium fs-2">Produk <strong class="fw-semibold"> Pena Cendekia</strong></h1>
          <h5 class="textHeader fw-medium fs-5">Kamu Bisa Mendapatkan Produk Pena Cendekia</h5>
          <div class="text-start">
            <hr class="my-4">
            <p class="textHeader fs-6 fw-normal me-4">Ingin karya tulisanmu menjadi lebih bermakna dan terlihat profesional? Pena Cendekia hadir untuk membantumu! Percetakan kami menyediakan layanan percetakan berkualitas tinggi untuk berbagai jenis tulisan, mulai dari buku, jurnal, brosur, hingga kartu nama. Dengan teknologi modern dan tenaga ahli percetakan yang handal, Pena Cendekia siap membantu mewujudkan setiap ide dan karya tulisanmu menjadi produk cetakan yang istimewa. Percayakan karya tulisanmu hanya pada Pena Cendekia, percetakan yang mengutamakan kualitas dan kepuasan pelanggan.</p>        
            <p class="buy-now fs-6 mt-4 fw-medium" >Beli Sekarang</p>

        <div class="ic-shop text-left">
            <div class="col-lg-4 col-md-6 col-sm-12 my-2">
              <div class="container p-0">
                <a href=""><img class="icon-shop me-2" src="{{ asset('img/ic-tokped.png') }}" alt=""></a>
                <a href=""><img class="icon-shop me-2" src="{{ asset('img/ic-shopee.png') }}" alt=""></a>
                <a href=""><img class="icon-shop me-2" src="{{ asset('img/ic-bukalapak.png') }}" alt=""></a>

              </div>
            </div>         
          </div>
          </div>
        </div>
        
        <!--Slider-->
        <div class="slider">
          <div class="slides">
            <!--radio buttons start-->
            <input type="radio" name="radio-btn" id="radio1">
            <input type="radio" name="radio-btn" id="radio2">
            <input type="radio" name="radio-btn" id="radio3">
            <input type="radio" name="radio-btn" id="radio4">
            <!--radio buttons end-->
            <!--slide images start-->
            <div class="slide first">
              <img src="{{ asset('img/book1.png') }}" alt="">
            </div>
            <div class="slide">
              <img src="{{ asset('img/book1.png') }}" alt="">
            </div>
            <div class="slide">
              <img src="{{ asset('img/book1.png') }}" alt="">
            </div>
            <div class="slide">
              <img src="{{ asset('img/book1.png') }}" alt="">
            </div>
            <!--slide images end-->
            <!--automatic navigation start-->
            <div class="navigation-auto">
              <div class="auto-btn1"></div>
              <div class="auto-btn2"></div>
              <div class="auto-btn3"></div>
              <div class="auto-btn4"></div>
            </div>
            <!--automatic navigation end-->
          </div>
          <!--manual navigation start-->
          <div class="navigation-manual">
            <label for="radio1" class="manual-btn"></label>
            <label for="radio2" class="manual-btn"></label>
            <label for="radio3" class="manual-btn"></label>
            <label for="radio4" class="manual-btn"></label>
          </div>
          <!--manual navigation end-->
        </div>
        <!--image slider end-->
        <!--Slider-->
        </div>
      </div>
      <!--End Content 2-->

      <!--Content 3-->
      <div class="content container mt-5">
        <div class="services text-start">
          <img class="pop-hello mb-3" src="{{ asset('img/services.png') }}" alt="">
          <h1 class="fw-medium fs-2">Layanan <strong class="fw-semibold"> Pena Cendekia</strong></h1>
          <h5 class="six-service  fw-medium fs-5">Enam Layanan Pena Cendekia</h5>
          <hr class="container my-4">

          <!--Services-->      
          <div class="container-services row p-0">
            <div class="col-lg-4 col-md-6 col-sm-12 my-2">
              <div class="card">
                <div class="card-body text-start px-4" style="display:inline-block;vertical-align:top;">
                  <img class="ic-layanan" src="{{ asset('img/icon-service/penerbitan.png') }}" alt="">
                  <div class="card-title" style="display:inline-block;">
                    <h5 class="ms-3">Penerbitan Buku</h5>
                  </div>
                  <div class="card-text">
                    <p class="text-secondary mt-2">
                      Semua buku yang diterbitkan di Pena Cendekia pasti memperoleh ISBN dari Perpustakaan Nasional Republik Indonesia.
                    </p>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12 my-2">
              <div class="card">
                <div class="card-body text-start px-4" style="display:inline-block;vertical-align:top;">
                  <img class="ic-layanan" src="{{ asset('img/icon-service/Konversi.png') }}" alt="">
                  <div class="card-title" style="display:inline-block;">
                    <h5 class="ms-3">Konversi Karya Ilmiah</h5>
                  </div>
                  <div class="card-text">
                    <p class="text-secondary mt-2">
                      Penerbit Pena Cendekia melayani konversi Karya Tulis Ilmiah (Skripsi, Tesis, Disertasi, dll) untuk diubah menjadi buku
                    </p>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12 my-2">
              <div class="card">
                <div class="card-body text-start px-4" style="display:inline-block;vertical-align:top;">
                  <img class="ic-layanan" src="{{ asset('img/icon-service/buku.png') }}" alt="">
                  <div class="card-title" style="display:inline-block;">
                    <h5 class="ms-3">Pengadaan Buku</h5>
                  </div>
                  <div class="card-text">
                    <p class="text-secondary mt-2">
                      Anda sedang atau akan melakukan pengadaan buku untuk perpustakaan? Penerbit Pena Cendekia siap membantu Pengadaan Perpustakaan Anda.
                    </p>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12 my-2">
              <div class="card">
                <div class="card-body text-start px-4" style="display:inline-block;vertical-align:top;">
                  <img class="ic-layanan" src="{{ asset('img/icon-service/kerjasama.png') }}" alt="">
                  <div class="card-title" style="display:inline-block;">
                    <h5 class="ms-3">Kerjasama Institusi</h5>
                  </div>
                  <div class="card-text">
                    <p class="text-secondary mt-2">
                      Penerbit Pena Cendekia membuka peluang kerjasama dengan institusi pendidikan dalam hal penerbitan, pencetakan buku dan workshop.
                    </p>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12 my-2">
              <div class="card">
                <div class="card-body text-start px-4" style="display:inline-block;vertical-align:top;">
                  <img class="ic-layanan" src="{{ asset('img/icon-service/buku.png') }}" alt="">
                  <div class="card-title" style="display:inline-block;">
                    <h5 class="ms-3">Cetak Buku Berkualitas</h5>
                  </div>
                  <div class="card-text">
                    <p class="text-secondary mt-2">
                      Banyak penerbitan buku ketika mencatak buku terbitannya dengan asal-asalan. Berbeda dengan Pena Cendekia , buku yang kami terbitkan akan dicetak dengan hasil yang berkualitas. Tidak perlu ragu untuk mendapatkan hasilnya.
                    </p>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12 my-2">
              <div class="card">
                <div class="card-body text-start px-4" style="display:inline-block;vertical-align:top;">
                  <img class="ic-layanan" src="{{ asset('img/icon-service/buku.png') }}" alt="">
                  <div class="card-title" style="display:inline-block;">
                    <h5 class="ms-3">Jasa Pengurusan HAKI</h5>
                  </div>
                  <div class="card-text">
                    <p class="text-secondary mt-2">
                      Hak Cipta adalah hak eksklusif pencipta yang timbul secara otomatis berdasarkan prinsip deklaratif setelah suatu ciptaan diwujudkan dalam bentuk nyata tanpa mengurangi pembatasan sesuai dengan ketentuan peraturan perundang-undangan. [sumber: dgip.go.id].
                    </p>
                  </div>
                </div>
              </div>
            </div>



          </div>
          <!--Services-->
        </div>
      </div>
      <!--End Content 3-->


      <!--Content 4-->
      <div class="container mt-5 ">
          <div class="col text-start ">
            <img class="pop-hello mb-3" src="{{ asset('img/blog.png') }}" alt="">
            <h1 class="fw-medium fs-2">Artikel <strong class="fw-semibold">Pena Cendekia</strong></h1>
              <div class=" row row-cols-2 col-sm-12 p-0 m-0">
                <div class="col p-0"><h5 class="textHeader fw-medium fs-5 text-start">Halaman Artikel</h5></div>
                <div class="col p-0"><a class="text-decoration-none fw-medium" href=""><p class="fs-6 text-end">Lihat Semua Artikel <img class="ic-arrow" src="{{ asset('img/arrow-right.png') }}" alt=""></p></a></div>
              </div>
            </div>
          </div>   

      <hr class="my-3">
      <div class="row">
        <div class="col-lg-4 col-md-6 col-sm-12 my-2">
          <div class="card">
            <img class="img-article px-4 pt-4" src="{{ asset('img/image-article/1.png') }}" alt="">
            <div class="card-body text-start px-4" style="display:inline-block;vertical-align:top;">
              <img class="ic-layanan" src="{{ asset('img/icon-service/penerbitan.png') }}" alt="">
              <div class="card-title" style="display:inline-block;">
                <h5>Sejarah Gedung Merdeka</h5>
              </div>
              <div class="card-text">
                <p class="text-secondary mt-2">
                  Gedung Merdeka Bandung adalah sebuah gedung bersejarah yang terletak di kota Bandung, Jawa Barat, Indonesia. Gedung ini memiliki peran penting dalam sejarah kemerdekaan Indonesia, khususnya dalam perjuangan memproklamirkan kemerdekaan Indonesia pada tanggal 17 Agustus 1945.
                </p>
              </div>
                <img class="ic-arrow" src="{{ asset('img/eyes.png') }}" alt=""> 255
              <a href="#" class="float-end text-decoration-none">Lihat Selengkapnya <img class="ic-arrow" src="{{ asset('img/arrow-right.png') }}" alt=""></a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 col-sm-12 my-2">
          <div class="card">
            <img class="img-article px-4 pt-4" src="{{ asset('img/image-article/1.png') }}" alt="">
            <div class="card-body text-start px-4" style="display:inline-block;vertical-align:top;">
              <img class="ic-layanan" src="{{ asset('img/icon-service/penerbitan.png') }}" alt="">
              <div class="card-title" style="display:inline-block;">
                <h5>Sejarah Gedung Merdeka</h5>
              </div>
              <div class="card-text">
                <p class="text-secondary mt-2">
                  Gedung Merdeka Bandung adalah sebuah gedung bersejarah yang terletak di kota Bandung, Jawa Barat, Indonesia. Gedung ini memiliki peran penting dalam sejarah kemerdekaan Indonesia, khususnya dalam perjuangan memproklamirkan kemerdekaan Indonesia pada tanggal 17 Agustus 1945.
                </p>
              </div>
                <img class="ic-arrow" src="{{ asset('img/eyes.png') }}" alt=""> 255
              <a href="#" class="float-end text-decoration-none">Lihat Selengkapnya <img class="ic-arrow" src="{{ asset('img/arrow-right.png') }}" alt=""></a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 col-sm-12 my-2">
          <div class="card">
            <img class="img-article px-4 pt-4" src="{{ asset('img/image-article/1.png') }}" alt="">
            <div class="card-body text-start px-4" style="display:inline-block;vertical-align:top;">
              <img class="ic-layanan" src="{{ asset('img/icon-service/penerbitan.png') }}" alt="">
              <div class="card-title" style="display:inline-block;">
                <h5>Sejarah Gedung Merdeka</h5>
              </div>
              <div class="card-text">
                <p class="text-secondary mt-2">
                  Gedung Merdeka Bandung adalah sebuah gedung bersejarah yang terletak di kota Bandung, Jawa Barat, Indonesia. Gedung ini memiliki peran penting dalam sejarah kemerdekaan Indonesia, khususnya dalam perjuangan memproklamirkan kemerdekaan Indonesia pada tanggal 17 Agustus 1945.
                </p>
              </div>
                <img class="ic-arrow" src="{{ asset('img/eyes.png') }}" alt=""> 255
              <a href="#" class="float-end text-decoration-none">Lihat Selengkapnya <img class="ic-arrow" src="{{ asset('img/arrow-right.png') }}" alt=""></a>
            </div>
          </div>
        </div>
      </div>
      </div>
      <!--End Content 4-->

      <!--Content 5-->
      <div class="text-center my-5">
        <h4 class="fw-medium text-secondary fs-5">Mengapa Harus Memilih Kami?</h4>
        <h1 class="fw-medium fs-2 mb-5">Penerbit <strong class="fw-semibold"> Pena Cendekia</strong></h1>
        <div class="container text-center">
          <div class="row row-col-lg-2 ">
            <div class=" col-sm-12 col-md-6 col-lg-3">
              <img class="img-choose" src="{{ asset('img/image-services/clock.png') }}" alt="" style="width: 110px; height: 145px;">
              <h5 class="mt-3 fw-medium">Proses Cepat & Pasti</h5>
              <p class="fw-normal">Pelayanan yang ramah dan cepat adalah prioritas kami.</p>
            </div>
            <div class=" col-sm-12 col-md-6 col-lg-3">
              <img class="img-choose" src="{{ asset('img/image-services/distribusi.png') }}" alt="" style="width: 130px; height: 145px;">
              <h5 class="mt-3 fw-medium">Distribusi Luas</h5>
              <p class="fw-normal">Buku-buku yang diterbitkan oleh Kelompok Pena Cendekia dapat ditemukan di toko buku offline dan online seluruh Indonesia.</p>
            </div>
            <div class=" col-sm-12 col-md-6 col-lg-3">
              <img class="img-choose" src="{{ asset('img/image-services/akuisisi.png') }}" alt="" style="width: 145px; height: 145px;">
              <h5 class="mt-3 fw-medium">Royalti & Akuisisi</h5>
              <p class="fw-normal">Dapatkan Biaya Royalti dan Akuisisi dengan Menerbitkan Buku bersama Kelompok Pena Cendekia.</p>
            </div>
            <div class=" col-sm-12 col-md-6 col-lg-3">
              <img class="img-choose" src="{{ asset('img/image-services/perjanjian.png') }}" alt="" style="width: 150px; height: 145px;">
              <h5 class="mt-3 fw-medium">Perjanjian yang Jelas</h5>
              <p class="fw-normal">Segala perjanjian dan kerja sama dalam bentuk apapun akan diatur melalui Surat Perjanjian Kerjasama (SPK) sehingga setiap perjanjian terjamin aman.</p>
            </div>
          </div>
        </div>
      </div>
      @endsection
      <!--End Content 5-->