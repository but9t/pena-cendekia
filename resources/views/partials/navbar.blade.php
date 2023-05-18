<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container-fluid mx-5 mt-3">
      <a class="navbar-brand" href="#">
        <img src="{{ asset('img/logo.png') }}" alt="Logo Pena Cendekia" width="50" height="30">
      </a>
      <a class="navbar-brand d-none d-md-block" href="#">Pena Cendekia</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ms-auto py-auto">      
          <a class="nav-link {{ ($title === "Home" ? 'active' : '') }} pe-5" aria-current="page" href="/"><img class="nav-pic pe-2" src="{{ asset('img/home.svg') }}" alt=""> Beranda</a>     
          <a class="nav-link {{ ($title === "Tentang Kami" ? 'active' : '') }} pe-5" href="/tentang"><img class="nav-pic pe-2" src="{{ asset('img/tentang.svg') }}" alt=""> Tentang Kami</a>    
          <a class="nav-link {{ ($title === "Blog" ? 'active' : '') }} pe-5" href="/blog"><img class="nav-pic pe-2" src="{{ asset('img/blog.svg') }}" alt=""> Blog</a>    
          <a class="nav-link {{ ($title === "Kontak Kami" ? 'active' : '') }} pe-5" href="/kontak"><img class="nav-pic pe-2" src="{{ asset('img/kontak.svg') }}" alt=""> Kontak</a>
          <button class="btn btn-primary px-3" type="button" style="background-color:#0095DA !important; border-color:#0095DA">
            <img class="px-1" src="{{ asset('img/login.svg') }}" alt="">
            Login</button>
        </div>
      </div>
    </div>
  </nav>