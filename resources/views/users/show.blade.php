@section('title',"Perfil | {$user->name}")
@extends('common.mdb-pagewithoutfooter')


@section('content')

<a href="{{route('users.index')}}" class="navbar-brand"><i class="fas fa-arrow-circle-left text-dark"></i></a>

<div class="container">

<h1>{{$user->name}}</h1>

<p>Deseja deletar este contato?</p>

<form action="{{ route('users.destroy', $user->id)}}" method="post">
    @csrf
    @method('DELETE')
    <button class="btn btn-primary btn-dark text-white" type="submit">Deletar contato</button>
</form>

</div>
@endsection




