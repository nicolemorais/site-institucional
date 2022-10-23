@section('content')

<header>
  <style>
    #intro {
      background-image: url('../mdb/img/cards/tela2.svg');
      height: 100vh;
    }

    @media (min-width: 992px) {
      #intro {
        margin-top: -58.59px;
      }
    }
    
    .navbar .nav-link {
      color: rgb(255, 255, 255) !important;
      font-family: 'Bebas Neue', cursive;
    }
  </style>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark d-none d-lg-block" style="z-index: 2000;">
    <div class="container-fluid">

      <a class="navbar-brand nav-link" target="_blank" href="{{ url('/') }}">
        <strong>Shawty Models Agency</strong>
      </a>
      <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarExample01"
      aria-controls="navbarExample01" aria-expanded="false" aria-label="Toggle navigation">
      <i class="fas fa-bars"></i>
      </button>
  
    </div>
  </nav>
  <!-- Navbar -->

  <!-- Background image -->
  <div id="intro" class="bg-image shadow-2-strong">
    <div class="mask d-flex align-items-center h-100" style="background-color: rgba(0, 0, 0, 0.8);">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xl-5 col-md-8">
            
            <form action="{{ url('/login') }}" method="POST" class="bg-white  rounded-5 shadow-5-strong p-5">

              @csrf

              <h1 class="container text-center mb-5" style="font-family: 'Bebas Neue', cursive;">Acesso Privado</h1>
              <div class="form-outline mb-4">
                <input type="email" name="email" id="form1Example1" class="form-control" />
                <label class="form-label" for="form1Example1">Email</label>
              </div>

              <div class="form-outline mb-4">
                <input type="password" name="password" id="form1Example2" class="form-control" />
                <label class="form-label" for="form1Example2">Senha</label>
              </div>

              <div class="row mb-4" style="font-family: 'Bebas Neue', cursive;">
                <div class="col text-center">
                  <a href="#!">Esqueceu a senha?</a>
                </div>
              </div>

              <button type="submit" class="btn btn-primary btn-block" style="font-size: 1rem; font-family: 'Bebas Neue', cursive;">Entrar</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>

<footer class="text-lg-start text-white" style="font-family: 'Bebas Neue', cursive;">
  <div class="text-center p-3" style="background-color: rgba(10, 10, 10, 0.856); font-size:1.1rem;">
    © 2022 Copyright:
    <a class="text-white fw-bold" target="_blank" href="{{ url('/') }}">shawtymodels.com</a>
  </div>
</footer>

@endsection
