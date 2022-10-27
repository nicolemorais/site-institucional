@section('title', 'Shawty Models | Sobre nós')
@extends('common.mdb-pagewithmenu')

@section('menu')
    @include('components.public-navbar')
@endsection

@section('content')
@yield('content')
<!-- BACKGROUND -->
<div style="background: linear-gradient(0deg, rgba(32,32,32,0.9472163865546218) 0%, rgba(96,93,93,0.7903536414565826) 38%, rgba(242,242,242,0.908000700280112) 100%);">
    <!-- CAROUSEL -->
    <div class="container p-5">
      <div id="carouselExampleControls" class="carousel slide m-auto" data-mdb-ride="carousel">
        <div class="carousel-inner border-bottom" style="height: 30vh;">
            <div class="carousel-item active">
              <img src="../mdb/img/navbar/sobre1.png" class="d-block w-100" alt="Modelo 1" style="height: 50vh">
            </div>
            <div class="carousel-item">
              <img src="../mdb/img/navbar/sobre2.png" class="d-block w-100" alt="Modelo 2" style="height: 50vh">
            </div>
            <div class="carousel-item">
              <img src="../mdb/img/navbar/sobre3.png" class="d-block w-100" alt="Modelo 2" style="height: 50vh">
            </div>
        </div>
      </div>
    </div>
  
    <!--MAIN-->
    <main class="mt-5" style="font-family: 'Poppins', sans-serif;">
        <!-- SOBRE -->
        <div class="container">
            <section class="text-left">
                <h4 style="font-family:'Bebas Neue',cursive; font-size:2.0rem; color:rgba(0, 0, 0, 0.658)" class="mb-3">
                    <strong>NOSSA HISTÓRIA</strong>
                </h4>
                <div class="row">
                    <div class="col-md-6 gx-5 mb-4">
                        <div class="bg-image hover-overlay ripple shadow-2-strong rounded-5" data-mdb-ripple-color="light">
                        <img src="../mdb/img/cards/tela.svg" class="img-fluid" />
                        </div>
                    </div>

                    <div class="col-md-6 gx-5 mb-4">
                        <h4 style="font-family:'Bebas Neue',cursive; font-size:2.0rem; color:rgb(255, 255, 255)" ><strong>COMO TUDO COMEÇOU</strong></h4>
                        <p class="text-white">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis
                        consequatur eligendi quisquam doloremque vero ex debitis
                        veritatis placeat unde animi laborum sapiente illo possimus,
                        commodi dignissimos obcaecati illum maiores corporis.
                        </p>
                        <p style="font-family:'Bebas Neue',cursive; font-size:1.3rem; color:rgb(255, 255, 255)" ><strong>TRABALHANDO COM OS MODELOS MAIS REQUISITADOS</strong></p>
                        <p class="text-white">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod
                        itaque voluptate nesciunt laborum incidunt. Officia, quam
                        consectetur. Earum eligendi aliquam illum alias, unde optio
                        accusantium soluta, iusto molestiae adipisci et?
                        </p>
                    </div>
                </div>
            </section>
        </div>
    </main>
</div>
@endsection