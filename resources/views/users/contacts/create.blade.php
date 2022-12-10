@section('title', 'Nova Mensagem')
@extends('common.mdb-pagewithmenu')

@section('menu')
    @include('components.public-navbar')
@endsection

@section('content')
@yield('content')
<div style="background-color:rgba(224, 222, 224, 0.39)">
    <!-- CONTATO -->
    <div class="container rounded p-5 mb-5" style="background: linear-gradient(0deg, rgba(32, 32, 32, 0.774) 0%, rgba(96, 93, 93, 0.671) 38%, rgba(242,242,242,0.908000700280112) 100%);" >
        <div class = "row">
            <div class="col-md-5 mx-auto mt-5">
                <a href="{{route('contacts.index', $user->id)}}" class="navbar-brand"><i class="fas fa-arrow-circle-left text-dark"></i></a>
                <h2  style="font-family: 'Bebas Neue', cursive; font-size: 1.8rem;">Nova Mensagem</h2>

                @include('includes.validations-form')

                <form action="{{route('contacts.store',$user->id) }}" method="POST">

                    @include('users.contacts._partials.form')

                </form>  
            </div>
        </div>
    </div>
</div>
@endsection