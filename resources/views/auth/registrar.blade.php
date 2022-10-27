@section('title', 'Shawty Models | Login')
@extends('common.mdb-pagewithmenu')

@section('menu')
    @include('components.public-navbar')
@endsection

@section('content')
@yield('content')
<div class="container rounded-5 mt-5 p-5 m-12 mb-5" style="background: linear-gradient(0deg, rgba(32,32,32,0.9472163865546218) 0%, rgba(96,93,93,0.7903536414565826) 38%, rgba(242,242,242,0.908000700280112) 100%);" >
    <div class = "row">
        <div class="col-md-5 mx-auto mt-5" style="font-family: 'Bebas Neue', cursive; font-size: 1.2rem;">
            <form action="{{ route('user.create') }}" method="POST">
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

                <!-- NOTIFICAÇÃO DE ERRO INESPERADO -->
                @if ($message = Session::get('error'))

                    <div class="alert alert-danger alert-dismissible fade show" style="background:rgb(246,102,102); color:black" role="alert">    
                        <strong>OPS!</strong> {{ $message }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>

                @endif

                <div class="form-outline mb-4">
                    <input type="text" id="form4Example2" class="form-control" name="name" />
                    <label class="form-label text-black"  for="form4Example2">Nome Completo</label>
                </div>
                <div class="form-outline mb-4">
                    <input type="email" id="form4Example1" class="form-control" name="email"/>
                    <label class="form-label text-black" for="form4Example1">Email</label>
                </div>
                <div class="form-outline mb-4">
                    <input type="password"  id="form1Example1" class="form-control" name="password" />
                    <label class="form-label text-black" for="form1Example1">Senha</label>
                  </div>
                <button type="submit" class="btn btn-block mb-4 " style="font-size: 1.4rem; color:white; background-color:black">
                    Registrar
                </button>

                <div class="text-center m-5 text-black">
                    <p>Já é membro? <a class="text-white" href="{{ url('/login') }}">Entre aqui</a></p>
                    <p>ou registre-se usando:</p>
                    <button type="button" class="btn btn-primary btn-floating mx-1" style="background-color: black;">
                      <i class="fab fa-facebook-f"></i>
                    </button>
                
                    <button type="button" class="btn btn-primary btn-floating mx-1" style="background-color: black;">
                      <i class="fab fa-google"></i>
                    </button>
                
                    <button type="button" class="btn btn-primary btn-floating mx-1" style="background-color: black;">
                      <i class="fab fa-twitter"></i>
                    </button>
                
                    <button type="button" class="btn btn-primary btn-floating mx-1" style="background-color: black;">
                      <i class="fab fa-github"></i>
                    </button>
                </div>
            </form>  
        </div>
    </div>
</div>
@endsection