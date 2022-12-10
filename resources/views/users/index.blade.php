@section('title','Contato')
@extends('common.mdb-pagewithoutfooter')


@section('content')


  <nav class="navbar navbar-light bg-light">
    <div class="container-fluid">
        <a href="{{ url('/') }}" class="navbar-brand"><i class="fas fa-arrow-circle-left"></i></a>
        <a href="{{route('users.create')}}" style="color:black;">Adicionar contato (+)</a>
        <form action="{{ route('users.index') }}" method="get" class="d-flex input-group w-auto">
          <input type="text" name="search" placeholder="Pesquisar">
          <button id="search-button" type="submit" class="btn btn-dark"><i class="fas fa-search"></i></button>
        </form>
      </form>
    </div>
  </nav>

    <table class="table align-content-center bg-white">
      <thead class="bg-light">
        <tr>
          <th class="fw-bold">NOME</th>
          <th class="fw-bold">E-MAIL</th>
          <th class="fw-bold">EDITAR</th>
          <th class="fw-bold">MENSAGENS</th>
          <th class="fw-bold">DELETAR</th>
        </tr>
      </thead>
      <tbody class="table align-middle mb-0 bg-white">

        @foreach ($users as $user)
          <tr>
            <td class="fw-normal mb-1">
              @if ($user->name)
                  <img class="h-25 d-inline-block rounded-4" style="width: 80px;" src=" {{ url("storage/{$user->image}") }}"  alt= "{{$user->name}}">
              @else
                  <img class="h-25 d-inline-block rounded-4" style="width: 80px;"  src="{{ url("../mdb/img/logo2.ico") }}" alt="  {{$user->name}}">
              @endif
              {{$user->name}}
            </td>
            <td class="fw-normal mb-1">{{$user->email}}</td>
            <td>
               <a href="{{ route('users.edit',$user->id) }}">Editar</a> 
            </td>
           <td>
            <a href="{{ route('contacts.index',$user->id) }}">Mensagens ({{ $user->contacts->count()}})</a> 
           </td>
           <td>
               <a href="{{ route('users.show',$user->id) }}">Deletar</a> 
            </td>
          </tr>
        @endforeach
      </tbody>
  </table>

    <div>
       {{$users->appends([
            'search' => request()->get('search', '')
        ])->links() }}
    </div>

  
      
 

@endsection
