@section('title',"Mensagens de {$user->name}")
@extends('common.mdb-pagewithoutfooter')


@section('content')


  <nav class="navbar navbar-light bg-light">
    <div class="container-fluid">
      <a href="{{route('users.index', $user->id)}}" class="navbar-brand"><i class="fas fa-arrow-circle-left text-dark"></i></a>
        <h3>Mensagens de {{$user->name}}</h3>
        <a href="{{ route('contacts.create', $user->id) }}">Adicionar nova mensagem</a>
        <form action="{{ route('contacts.index', $user->id) }}" method="get" class="d-flex input-group w-auto">
          <input type="text" name="search" placeholder="Pesquisar">
          <button id="search-button" type="submit" class="btn btn-primary"><i class="fas fa-search"></i></button>
        </form>
      </form>
    </div>
  </nav>

    <table class="table align-content-center bg-white">
      <thead class="bg-light">
        <tr>
          <th class="fw-bold">ASSUNTO</th>
          <th class="fw-bold">MENSAGEM</th>
          <th class="fw-bold">VISÍVEL</th>
          <th class="fw-bold">EDITAR</th>

        </tr>
      </thead>
      <tbody class="table align-middle mb-0 bg-white">

        @foreach ($contacts as $contact)
          <tr>
            <td class="fw-normal mb-1">{{ $contact->subject }}</td>
            <td class="fw-normal mb-1">{{ $contact->body }}</td>
            <td class="fw-normal mb-1">{{ $contact->visible ? 'SIM' : 'NÃO' }}</td>
            <td>
               <a href="{{ route('contacts.edit',['user' => $user->id, 'id' => $contact->id]) }}">Editar</a> 
            </td>
          </tr>
        @endforeach

      </tbody>
  </table>


@endsection