@extends('layouts.app')
@auth
    @section('myttitle','PANEL')
    @section('myHeader','INICIO')
    @section('myDescription','página de inicio')

    @section('content')
        <h1>BIENVENIDOS AL SISTEMA DE GESTION MONTT</h1>
    @endsection
@endauth
@guest
    @section('myttitle','LOGIN')
@endguest