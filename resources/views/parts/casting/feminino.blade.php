@section('content')

<!-- BACKGROUND -->
<div style="background: linear-gradient(0deg, rgba(32,32,32,0.9472163865546218) 0%, rgba(96,93,93,0.7903536414565826) 38%, rgba(242,242,242,0.908000700280112) 100%);">
    <!-- CAROUSEL -->
    <div class="container p-5">
      <div id="carouselExampleControls" class="carousel slide m-auto" data-mdb-ride="carousel">
        <div class="carousel-inner border-bottom" style="height: 30vh;">
            <div class="carousel-item active">
              <img src="../mdb/img/navbar/fem1.png" class="d-block w-100" alt="Modelo 1" style="height: 50vh">
            </div>
            <div class="carousel-item">
              <img src="../mdb/img/navbar/fem2.png" class="d-block w-100" alt="Modelo 2" style="height: 50vh">
            </div>
            <div class="carousel-item">
              <img src="../mdb/img/navbar/fem3.png" class="d-block w-100" alt="Modelo 2" style="height: 50vh">
            </div>
        </div>
      </div>
    </div>
  
    <!--MAIN-->
 
    <!--MAIN-->
    <main class="mt-5" style="font-family: 'Poppins', sans-serif;">
        <!--PRIMEIRA PARTE-->
        <div class="container">
        <section class="text-left">
            <h4 style="font-family:'Bebas Neue',cursive; font-size:2.0rem; color:rgba(0, 0, 0, 0.658)" class="mb-3">
            <strong>GLAMOUR</strong>
            </h4>

            <div class="row text-center">
            <div class="col-lg-4 col-md-12 mb-4">
                <div class="card" style="background-image: url('../mdb/img/cards/card3.svg')">
                    <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                        <img src="../mdb/img/cards/carda.jpg" class="img-fluid" />
                        <a href="#!">
                        <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card" style="background-image: url('../mdb/img/cards/card2.svg')">
                    <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                        <img src='../mdb/img/cards/carda.jpg' class="img-fluid" />
                        <a href="#!">
                        <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card" style="background-image: url('../mdb/img/cards/card1.svg')">
                    <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                        <img src="../mdb/img/cards/carda.jpg" class="img-fluid" />
                        <a href="#!">
                        <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                        </a>
                    </div>
                </div>
            </div>
            </div>
        </section>  
        </div>
    </main>
</div>  
@endsection