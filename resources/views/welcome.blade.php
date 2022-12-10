@extends('common.mdb-pagewithmenu')

@section('title', 'Página Inicial')

@section('menu')
    @include('components.public-navbar')
@endsection

@section('content')
    @include('parts.blog-post')
@endsection