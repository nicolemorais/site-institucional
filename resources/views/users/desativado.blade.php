@section('title', 'Shawty Models | Entrar')
@extends('common.mdb-pagewithmenu')

@section('menu')
    @include('components.public-navbar')
@endsection

@section('content')
@yield('content')
<!-- FORMULÁRIO DE LOGIN -->
<div class="container rounded-5 mt-5 p-5 m-12 mb-5" style="background: linear-gradient(0deg, rgba(32,32,32,0.9472163865546218) 0%, rgba(96,93,93,0.7903536414565826) 38%, rgba(242,242,242,0.908000700280112) 100%);" >
    <div class = "row">
          <!-- NOTIFICAÇÃO DE FORMULÁRIO NÃO PREENCHIDO CORRETAMENTE -->
          @if(count($errors) > 0)
          @if ($message = Session::get('errors'))
          <div class="alert alert-warning alert-dismissible fade show " style="background:rgb(255,126,27); color:black" role="alert">    
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
        <div class="col-md-5 mx-auto mt-5" style="font-size: 1.2rem;">
            <h1 class="text-center mb-5" style="font-family: 'Bebas Neue', cursive;">Entre em Shawty Models</h1>
            <form action="{{ route('users.store') }}" method="POST">
                @csrf

                <div class="form-outline mb-4">
                      <input type="email" id="form4Example1" class="form-control" name="email" autocomplete="off"/>
                      <label class="form-label text-black" for="form4Example1">Email</label>
                  </div>
                  <div class="form-outline mb-4">
                      <input type="password"  id="form1Example1" class="form-control" name="password" autocomplete="off"/>
                      <label class="form-label text-black" for="form1Example1">Senha</label>
                  </div>
                  <button type="submit" class="btn btn-block mb-4 " style="font-family: 'Bebas Neue', cursive; font-size: 1.4rem; color:white; background-color:black">
                      Entrar
                  </button>
                </div>
            </form>  
        </div>
    </div>
</div>
@endsection





@section('content')
  <nav class="navbar navbar-light bg-light">
    <div class="container-fluid">
      <a href="{{ url('/') }}" class="navbar-brand">Modelos</a>
      <form action="{{ route('users.index') }}" method="get" class="d-flex input-group w-auto">
        <input
          type="search"
          class="form-control rounded"
          placeholder="Buscar"
          aria-label="Search"
          aria-describedby="search-addon"
        />
        <button id="search-button" type="button" class="btn btn-primary">
          <i class="fas fa-search"></i>
        </button>
      </form>
    </div>
  </nav>

    <table class="table align-content-center bg-white">
      <thead class="bg-light">
        <tr>
          <th class="fw-bold">NOME</th>
          <th class="fw-bold">EMAIL</th>
          <th class="fw-bold">EDITAR</th>
          <th class="fw-bold">DETALHES</th>
        </tr>
      </thead>
      <tbody class="table align-middle mb-0 bg-white">

        @foreach ($users as $user)
          <tr>
            <td class="fw-normal mb-1">{{$user->name}}</td>
            <td class="fw-normal mb-1">{{$user->email}}</td>
            <td>
              <button class="btn btn-link btn-rounded btn-sm fw-bold" data-mdb-ripple-color="dark"> 
               <a href="{{ route('users.edit') }}">Editar</a> 
              </button>
            </td>
            <td>
              <button type="submit" class="btn btn-link btn-rounded btn-sm fw-bold" data-mdb-ripple-color="dark">
               <a href="{{ route('users.show') }}">Detalhes</a> 
              </button>
            </td>
          </tr>
        @endforeach

      </tbody>
  </table>