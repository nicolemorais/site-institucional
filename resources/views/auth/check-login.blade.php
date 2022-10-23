@section('title', 'Shawty Models | Login')

@extends('common.mdb-pagewithoutfooter')

@section('content')
    @if (Auth::check())
        <h2>O usuário logado é {{Auth::user()->name}}</h2>

    @else
        <h2>O usuário não esta logado</h2>
    @endif
    
@endsection