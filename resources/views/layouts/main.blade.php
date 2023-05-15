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
    <link rel = "icon" href = "{{ asset('img/logo.png') }}" type = "image/x-icon">
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
            <div class="col-6 col-md-2 col-sm-4 mb-3">
              <h5 class="text-light fw-semibold p-0">Resources</h5>
              <ul class="nav flex-column">
                <li class="nav-item mb-2 fw-lighter"><a href="#" class="nav-link p-0 text-light">Beranda</a></li>
                <li class="nav-item mb-2 fw-lighter"><a href="#" class="nav-link p-0 text-light">Blog</a></li>
                <li class="nav-item mb-2 fw-lighter"><a href="#" class="nav-link p-0 text-light">Portofolio</a></li>
                <li class="nav-item mb-2 fw-lighter"><a href="#" class="nav-link p-0 text-light">Kontak</a></li>
              </ul>
            </div>
      
            <div class="col-6 col-md-2 col-sm-4 mb-3">
              <h5 class="text-light fw-semibold">Company</h5>
              <ul class="nav flex-column">
                <li class="nav-item mb-2 fw-lighter"><a href="#" class="nav-link p-0 text-light">Tentang Kami</a></li>
                <li class="nav-item mb-2 fw-lighter"><a href="#" class="nav-link p-0 text-light">Mengapa Pilih Kami?</a></li>
                <li class="nav-item mb-2 fw-lighter"><a href="#" class="nav-link p-0 text-light">Layanan</a></li>
              </ul>
            </div>
      
            <div class="col-6 col-md-2 col-sm-4 mb-3">
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
          <div class="row col-sm-12">
          <h6>Copyright @2022
            <a class="link-social ms-5" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="white" class="bi bi-facebook" viewBox="0 0 16 16">
            <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
          </svg></a>
          <a class="link-social" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="white" class="bi bi-twitter" viewBox="0 0 16 16">
            <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
          </svg></a>
          <a class="link-social" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="white" class="bi bi-instagram" viewBox="0 0 16 16">
            <path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z"/>
          </svg></a>
          <a class="link-social" href="http://tiktok.com/@yayasankiwariofficial"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="white" class="bi bi-linkedin" viewBox="0 0 16 16">
            <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"/>
          </svg></a>     
        </h6>
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