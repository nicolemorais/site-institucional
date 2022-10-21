@section('content')

<!-- BACKGROUND -->
<div style="background-image: url('../mdb/img/cards/tela.svg');">
  <!-- CAROUSEL -->
  <div class="container p-5">
    <div id="carouselExampleControls" class="carousel slide m-auto" data-mdb-ride="carousel">
      <div class="carousel-inner border-bottom" style="height: 30vh;">
          <div class="carousel-item active">
            <img src="../mdb/img/navbar/img1.png" class="d-block w-100" alt="Modelo 1" style="height: 50vh">
          </div>
          <div class="carousel-item">
            <img src="../mdb/img/navbar/img2.png" class="d-block w-100" alt="Modelo 2" style="height: 50vh">
          </div>
          <div class="carousel-item">
            <img src="../mdb/img/navbar/img3.png" class="d-block w-100" alt="Modelo 2" style="height: 50vh">
          </div>
      </div>
    </div>
  </div>

  <!--MAIN-->
  <main class="mt-5" style="font-family: 'Poppins', sans-serif;">
          <!--PRIMEIRA PARTE-->
          <div class="container">
            <section class="text-left">
              <h4 style="font-family:'Bebas Neue',cursive; font-size:2.0rem; color:rgba(0, 0, 0, 0.658)" class="mb-3">
                <strong>Catalogo</strong>
              </h4>

              <div class="row text-center">
                <div class="col-lg-4 col-md-12 mb-4">
                  <div class="card" style="background-image: url('../mdb/img/cards/card3.svg')">
                    <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                      <img src="../mdb/img/cards/carda.jpg" class="img-fluid" />
                      <a href="{{ url('/modelo-feminino') }}">
                        <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                      </a>
                    </div>
                    <div class="card-body">
                      <h5 class="card-title" style="font-family:'Bebas Neue',cursive; font-size:1.8rem; color:rgb(194, 194, 194);">GLAMOUR</h5>
                      <p class="card-text">
                        <br><br>
                      </p>
                      <a href="{{ url('/modelo-feminino') }}" class="btn btn-transparent" style="font-family:'Bebas Neue',cursive;  font-size:1.4rem; background-color: rgba(255, 255, 255, 0.445);">Feminino</a>
                    </div>
                  </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                  <div class="card" style="background-image: url('../mdb/img/cards/card2.svg')">
                    <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                      <img src='../mdb/img/cards/cardb.jpg' class="img-fluid" />
                      <a href="{{ url('/modelo-masculino') }}">
                        <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                      </a>
                    </div>
                    <div class="card-body">
                      <h5 class="card-title"style="font-family:'Bebas Neue',cursive;font-size:1.8rem; color:rgb(194, 194, 194);">FASHION</h5>
                      <p class="card-text">
                        <br><br>
                      </p>
                      <a href="{{ url('/modelo-masculino') }}" class="btn btn-trasnparent" style="font-family:'Bebas Neue',cursive;  font-size:1.4rem; background-color: rgba(255, 255, 255, 0.445);">Masculino</a>
                    </div>
                  </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                  <div class="card" style="background-image: url('../mdb/img/cards/card1.svg')">
                    <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                      <img src="../mdb/img/cards/cardc.jpg" class="img-fluid" />
                      <a href="{{ url('/modelos-criancas') }}">
                        <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                      </a>
                    </div>
                    <div class="card-body">
                      <h5 class="card-title" style="font-family:'Bebas Neue',cursive; font-size:1.8rem; color:rgb(194, 194, 194);">VOGUE</h5>
                      <p class="card-text">
                        <br><br>
                      </p>
                      <a href="{{ url('/modelos-criancas') }}" class="btn btn-transparente" style="font-family:'Bebas Neue',cursive;  font-size:1.4rem; background-color: rgba(255, 255, 255, 0.445)">Crianças</a>
                    </div>
                  </div>
                </div>
              </div>
            </section>  
          </div>
          
          <div class="container">
            <hr class="my-5" />
            <h4 style="font-family:'Bebas Neue',cursive; font-size:2.0rem; color:rgba(0, 0, 0, 0.658)" class="mb-3">
              <strong>Tendências para o sucesso</strong>
            </h4>
          </div>
  

        <!-- SEGUNDA PARTE -->
        <div class="container">
          <style>
            #intro {
              height: 500px;
              margin-top: 60px;
            }
          </style>
          <!-- Background image -->
          <div id="intro" class="p-5 text-center bg-image shadow-1-strong" style="background-image: url('../mdb/img/cards/tela2.svg'); font-family:'Bebas Neue',cursive;">
            <div class="mask" style="background-color: rgba(0, 0, 0, 0.527);">
              <div class="d-flex justify-content-center align-items-center h-100">
                <div class="text-white px-4">
                  <h1 class="mb-3" style="font-size: 4.8rem; color:rgb(255, 255, 255); ">VOGUE ACCESS</h1>

                  <!--  Anúncio  -->

                  <p style="font-size: 1.5rem; color:rgb(241, 241, 241);">Fique por dentro dos assuntos mais comentados da moda</p>
                  <p style="font-size: 1.2rem; color:rgb(241, 241, 241);">Tenha acesso as tendências das passarelas</p>

                  <a class="btn btn-outline-light btn-lg m-2" href="#" style="font-family:'Bebas Neue',cursive; font-size:1.0rem;" role="button">BLOG</a>
                  <a class="btn btn-outline-light btn-lg m-2" href="#" style="font-family:'Bebas Neue',cursive; font-size:1.0rem;" role="button">PASSARELA</a>
                </div>
              </div>
            </div>
          </div>      
        </div>

        <div class="container">
          <hr class="my-5" />
        </div>

        <!--TERCEIRA PARTE-->
        <div class="container">
          <section>
            <h4 style="font-family:'Bebas Neue',cursive; font-size:2.0rem; color:rgba(0, 0, 0, 0.658)" class="mb-3">
              <strong>Notícias do mundo da moda</strong>
            </h4>

            <div class="row gx-lg-5">
              <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
                <!-- News block -->
                <div>
                  <!-- Featured image -->
                  <div class="bg-image hover-overlay shadow-1-strong ripple rounded-5 mb-4" data-mdb-ripple-color="light">
                    <img src="../mdb/img/cards/news3.jpg" class="img-fluid" />
                    <a href="#!">
                      <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                    </a>
                  </div>
                  <!-- Article data -->
                  <div class="row mb-3">
                    <div class="col-6">
                      <a href="#" class="text-black">
                        <i class="fas fa-plane" style="color:black"></i>
                        Viagens
                      </a>
                    </div>
                  </div>
                  <!-- Article title and description -->
                  <a href="#" class="text-dark">
                    <h5 style="font-family:'Bebas Neue',cursive; font-size:2.0rem; color:rgba(0, 0, 0, 0.815)">O sucesso da cultura</h5>
                    <p>
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit, iste aliquid. Sed
                      id nihil magni, sint vero provident esse numquam perferendis ducimus dicta
                      adipisci iusto nam temporibus modi animi laboriosam?
                    </p>
                  </a>          
                </div>
              </div>
  
              <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                <!-- News block -->
                <div>
                  <!-- Featured image -->
                  <div class="bg-image hover-overlay shadow-1-strong rounded-5 ripple mb-4" data-mdb-ripple-color="light">
                    <img src="../mdb/img/cards/news2.jpg" class="img-fluid" />
                    <a href="#!">
                      <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                    </a>
                  </div>
                  <!-- Article data -->
                  <div class="row mb-3">
                    <div class="col-6">
                      <a href="#" class="text-black">
                        <i class="fas fa-chart-pie"style="color:black;"></i>
                        Negócios
                      </a>
                    </div>
                  </div>
                  <!-- Article title and description -->
                  <a href="#" class="text-dark">
                    <h5 style="font-family:'Bebas Neue',cursive; font-size:2.0rem; color:rgba(0, 0, 0, 0.815)">Vida de modelo</h5>
                    <p>
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit, iste aliquid. Sed
                      id nihil magni, sint vero provident esse numquam perferendis ducimus dicta
                      adipisci iusto nam temporibus modi animi laboriosam?
                    </p>
                  </a>
                </div>
              </div>

              <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                <!-- News block -->
                <div>
                  <!-- Featured image -->
                  <div class="bg-image hover-overlay shadow-1-strong rounded-5 ripple mb-4" data-mdb-ripple-color="light">
                    <img src="../mdb/img/cards/news1.jpg" class="img-fluid" />
                    <a href="#!">
                      <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                    </a>
                  </div>
                  <!-- Article data -->
                  <div class="row mb-3">
                    <div class="col-6">
                      <a href="#" class="text-black">
                        <i class="fas fa-expand" style="color:black;"></i>
                        Tecnologias
                      </a>
                    </div>
                  </div>
                  <!-- Article title and description -->
                  <a href="#" class="text-dark">
                    <h5 style="font-family:'Bebas Neue',cursive; font-size:2.0rem; color:rgba(0, 0, 0, 0.815)">As tecnologias das passarelas</h5>
                    <p>
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit, iste aliquid. Sed
                      id nihil magni, sint vero provident esse numquam perferendis ducimus dicta
                      adipisci iusto nam temporibus modi animi laboriosam?
                    </p>
                  </a>
                </div>
              </div>
            </div>
          </section>
          <br><br><br>
        </div>
  </main>
</div>
@endsection
