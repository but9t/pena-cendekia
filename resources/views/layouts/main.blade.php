<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pena Cendekia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!-- css -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- css -->
    @stack('css')
    </head>
  <body id="home">
    <!-- Navbar -->
    @include('partials.navbar')
      <!--End Navbar -->
      
      <!--Header-->
      <div class="container text-center mt-5">
        @yield('home')
      </div>
      <!--End Content 5-->

      <!--Footer-->
      <div class="container-fluid footer px-5 mt-5">
        <footer class="py-5 px-5">
          <div class="row">
            <div class="col-6 col-md-2 mb-3">
              <h5 class="text-light fw-semibold">Resources</h5>
              <ul class="nav flex-column">
                <li class="nav-item mb-2 fw-lighter"><a href="#" class="nav-link p-0 text-light">Beranda</a></li>
                <li class="nav-item mb-2 fw-lighter"><a href="#" class="nav-link p-0 text-light">Blog</a></li>
                <li class="nav-item mb-2 fw-lighter"><a href="#" class="nav-link p-0 text-light">Portofolio</a></li>
                <li class="nav-item mb-2 fw-lighter"><a href="#" class="nav-link p-0 text-light">Kontak</a></li>
              </ul>
            </div>
      
            <div class="col-6 col-md-2 mb-3">
              <h5 class="text-light fw-semibold">Company</h5>
              <ul class="nav flex-column">
                <li class="nav-item mb-2 fw-lighter"><a href="#" class="nav-link p-0 text-light">Tentang Kami</a></li>
                <li class="nav-item mb-2 fw-lighter"><a href="#" class="nav-link p-0 text-light">Mengapa Pilih Kami?</a></li>
                <li class="nav-item mb-2 fw-lighter"><a href="#" class="nav-link p-0 text-light">Layanan</a></li>
              </ul>
            </div>
      
            <div class="col-6 col-md-2 mb-3">
              <h5 class="text-light fw-semibold">Product</h5>
              <ul class="nav flex-column">
                <li class="nav-item mb-2 fw-lighter"><a href="#" class="nav-link p-0 text-light">Artikel</a></li>
                <li class="nav-item mb-2 fw-lighter"><a href="#" class="nav-link p-0 text-light">Buku</a></li>
                <li class="nav-item mb-2 fw-lighter"><a href="#" class="nav-link p-0 text-light">Alat Tulis</a></li>
                <li class="nav-item mb-2 fw-lighter"><a href="#" class="nav-link p-0 text-light">Penerbitan</a></li>
              </ul>
            </div>
      
            <div class="col-md-5 offset-md-1 mb-3">
              <form>
                <div class="text-center">
                  <div class="row row-cols-auto">
                    <div class="col ">
                      <img src="{{ asset('img/logo.png') }}" alt="Logo Pena Cendekia" width="50" height="50">
                    </div>
                    <div class="col ">
                      <h5 class="text-light fw-semibold mt-2">Pena Cendekia</h5>
                    </div>
                  </div>
                </div>
                
                
                <p class="text-light mt-2">Jl. Pahlawan No.83, Sukaluyu, Kec. Cibeunying Kaler, <br> Kota Bandung, Jawa Barat 40123</p>
                <div class="d-flex flex-column flex-sm-row w-100 gap-2">
                  <label for="newsletter1" class="visually-hidden" >Enter your email</label>
                  <input id="newsletter1" type="text" class="form-control" placeholder="Enter your email" style="background-color: #D2F0FF ">
                  <button class="btn btn-light" type="button">Contact Us</button>
                </div>
              </form>
            </div>
          </div>
      
          <div class="d-flex flex-column flex-sm-row justify-content-between py-4 my-4 border-top">
            <p>&copy; 2022 Company, Inc. All rights reserved.</p>
            <ul class="list-unstyled d-flex">
              <li class="ms-3"><a class="link-light" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#twitter"/></svg></a></li>
              <li class="ms-3"><a class="link-light" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#instagram"/></svg></a></li>
              <li class="ms-3"><a class="link-light" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#facebook"/></svg></a></li>
            </ul>
          </div>
        </footer>
      </div>
      <!--End Footer-->
      


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript">
        var counter = 1;
        setInterval(function(){
          document.getElementById('radio' + counter).checked = true;
          counter++;
          if(counter > 4){
            counter = 1;
          }
        }, 5000);
        </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>