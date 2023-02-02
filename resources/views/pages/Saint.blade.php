@extends('layouts.main-layout')

@section('content')

<div class="container d-flex justify-content-center align-items-center">
    <div class="ms_card_singola mt-5">
        <h2>Saint {{$saint -> name}} {{$saint -> surname}}</h2>

        <div>Canonizzato il {{$saint -> canonization}}</div>
        <div>Numero di Miracoli: {{$saint -> numberOfMiracle}}</div>


    </div>

</div>

<div class="text-center mt-5">
    <a href="/">
        <span class="indietro ">Indietro</span>
    </a>
</div>






@endsection