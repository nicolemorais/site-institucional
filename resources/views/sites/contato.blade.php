@section('title', 'Shawty Models | Contato')
@extends('common.mdb-pagewithmenu')

@section('menu')
    @include('components.public-navbar')
@endsection

@section('content')
@yield('content')
<div style="background-color:rgba(224, 222, 224, 0.39)">
    <!-- CAROUSEL -->
    <div class="container">
        <div id="carouselExampleControls" class="carousel slide m-auto" data-mdb-ride="carousel">
          <div class="carousel-inner" style="height: 30vh;">
              <div class="carousel-item active">
                <img src="../mdb/img/navbar/1.png" class="d-block w-100" alt="Modelo 1" style="height: 50vh">
              </div>
              <div class="carousel-item">
                <img src="../mdb/img/navbar/2.png" class="d-block w-100" alt="Modelo 2" style="height: 50vh">
              </div>
              <div class="carousel-item">
                <img src="../mdb/img/navbar/3.png" class="d-block w-100" alt="Modelo 2" style="height: 50vh">
              </div>
          </div>
    </div>
    <!-- CONTATO -->
    <div class="container rounded-5 mt-5 p-5 m-12 mb-5" style="background: linear-gradient(0deg, rgba(32, 32, 32, 0.774) 0%, rgba(96, 93, 93, 0.671) 38%, rgba(242,242,242,0.908000700280112) 100%);" >
        <div class = "row">
            <div class="col-md-5 mx-auto mt-5" style="font-family: 'Bebas Neue', cursive; font-size: 1.2rem;">
                <form action="" method="POST">
                    @csrf
                    
                    <!-- NOTIFICAÇÃO DE FORMULÁRIO NÃO PREENCHIDO CORRETAMENTE -->
                    @if(count($errors) > 0)
                        @if ($message = Session::get('errors'))

                        <div class="alert alert-warning alert-dismissible fade show" style="background:rgb(255,126,27); color:black" role="alert">    
                            <strong>Preencha as informações corretamente!</strong>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>

                        @endif
                    @endif
                    
                    <!-- NOTIFICAÇÃO DE FORMULÁRIO PREENCHIDO COM SUCESSO  -->
                    @if ($message = Session::get('success'))

                        <div class="alert alert-success alert-dismissible fade show" style="background:rgb(137,246,102); color:black" role="alert">    
                            <strong>Sua mensagem foi enviada com sucesso!</strong><br>
                            Nossa equipe entrará em contato assim que possível.
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    
                    @endif

                    <!-- NOTIFICAÇÃO DE ERRO INESPERADO -->
                    @if ($message = Session::get('error'))

                        <div class="alert alert-danger alert-dismissible fade show" style="background:rgb(246,102,102); color:black" role="alert">    
                            <strong>OPS!</strong> {{ $message }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>

                    @endif

                    <div class="form-outline mb-4">
                        <input type="text" id="form4Example2" class="form-control" name="nome_representante" />
                        <label class="form-label text-black "  for="form4Example2">Nome / Representante</label>
                    </div>
                    <div class="form-outline mb-4">
                        <input type="text" id="form4Example1" class="form-control" name="cidade_uf"/>
                        <label class="form-label text-black" pattern="[A-Za-z]{0-20}/[A-Za-z]{2}" for="form4Example1">Cidade / UF</label>
                    </div>
                    <div class="form-outline mb-4">
                        <input type="email" id="form4Example1" class="form-control" name="email"/>
                        <label class="form-label text-black" for="form4Example1">Email</label>
                    </div>

                    <div class="form-outline mb-4">
                        <input type="text" id="form4Example1" class="form-control" name="assunto" title="Por favor seja breve neste campo! Máximo 30 caracteres." />
                        <label class="form-label text-black" pattern="[A-Za-z]{30}" for="form4Example1">Assunto</label>
                    </div>
                    <div class="form-outline mb-4">
                        <textarea inputmode="text"  class="form-control" id="form4Example3" rows="4" style="resize: none" name="msg"></textarea>
                        <label class="form-label text-black" for="form4Example3">Mensagem / Proposta / Modelo</label>
                    </div>
                    <button type="submit" class="btn btn-block mb-4 " style="font-size: 1.4rem; color:white; background-color:rgba(5, 5, 5, 0.89)">
                        Enviar
                    </button>
                </form>  
            </div>
        </div>
    </div>
</div>
@endsection