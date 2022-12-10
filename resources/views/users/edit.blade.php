@section('title', "Perfil | {$user->name}")
@extends('common.mdb-pagewithmenu')

@section('menu')
    @include('components.public-navbar')
@endsection

@section('content')

@include('includes.validations-form')
<div class="container rounded-5 mt-5 p-5 m-12 mb-5" style="background: linear-gradient(0deg, rgba(32,32,32,0.9472163865546218) 0%, rgba(96,93,93,0.7903536414565826) 38%, rgba(242,242,242,0.908000700280112) 100%);" >
    <div class = "row">
        <div class="col-md-5 mx-auto mt-5" style="font-size: 1.2rem;">
            <a href="{{route('users.index')}}" class="navbar-brand"><i class="fas fa-arrow-circle-left text-dark"></i></a>
            <h1 class="text-center" style="font-family: 'Bebas Neue', cursive;">Editar Dados</h1>

           
            @include('includes.validations-form')

            <form action="{{ route('users.update', $user->id) }}" method="post" enctype="multipart/form-data">
                @method('PUT')
                @include('users._partials.form')
                <button type="submit" class="btn btn-block mb-4 " style="font-family: 'Bebas Neue', cursive; font-size: 1.4rem; color:white; background-color:black">
                    Editar
                </button>
            </form>  
        </div>
    </div>
</div>
@endsection
