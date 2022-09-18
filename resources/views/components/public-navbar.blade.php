@section('menu')
<!--LOGO-->
<div class="d-flex col-12 navbar  navbar-expand-lg" style="background: white;"><a class="col-2" href="{{ url('/') }}"><img src="mdb/img/logo.ico" alt="Logo" class="col-10"></a>
  <!--NAVBAR-->
  <nav class="m-auto col-6 position-static mb-lg-6 navbar-expand-lg bg-trasnparent">
    <div class="container-fluid m-auto col-9">
      <button
        class="navbar-toggler text-black col-4 m-auto"
        type="button"
        data-mdb-toggle="collapse"
        data-mdb-target="#navbarLeftAlignExample"
        aria-controls="navbarLeftAlignExample"
        aria-expanded="false"
        aria-label="Toggle navigation">
        <i class="fas fa-bars"></i>
      </button>

      <div class="collapse navbar-collapse m-auto" style="font-family: 'Bebas Neue', cursive; font-size: 1.5rem;" id="navbarLeftAlignExample">
        <ul class="navbar-nav m-auto">
          <li class="nav-item">
            <a class="nav-link text-black" href="{{ url('/sobre-nos') }}">AGÊNCIA</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-black" href="{{ url('/entrar-em-contato') }}">CONTATO</a>
          </li>
          <li class="nav-item dropdown">
            <a
              class="nav-link dropdown-toggle text-black"
              href="{{ url('/') }}"
              id="navbarDropdown"
              role="button"
              data-mdb-toggle="dropdown"
              aria-expanded="false">
              CASTING
            </a>
            <!-- CASTING MENU -->
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li>
                <a class="dropdown-item text-black" href="{{ url('/modelo-feminino') }}">FEMININO</a>
              </li>
              <li><hr class="dropdown-divider"/></li>
              <li>
                <a class="dropdown-item text-black" href="{{ url('/modelo-masculino') }}">MASCULINO</a>
              </li>
              <li><hr class="dropdown-divider" /></li>
              <li>
                <a class="dropdown-item text-black" href="{{ url('/modelos-criancas') }}">CRIANÇAS</a>
              </li>
            </ul>
        </ul>
        <div class="d-flex flex-row-reverse  col-10" style="font-size: 1.8rem">
          <div class="p-2"><a class="text-black" href="#"><i class="fa-brands fa-linkedin" ></i></a></div>
          <div class="p-2"><a class="text-black" href="#"><i class="fa-brands fa-square-whatsapp"></i></a></div>
          <div class="p-2"><a class="text-black" href="#"><i class="fa-brands fa-square-youtube"></i></a></div>
          <div class="p-2"><a class="text-black" href="#"><i class="fa-brands fa-square-instagram"></i></a></div>
          </div>
      </div>
    </div>
  </nav>
</div>
@endsection