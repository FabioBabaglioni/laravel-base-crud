@extends('layouts.main-layout')

@section('content')

<div class="container text-center">
    <h1 class="text-danger py-4">Lista dei Santi</h1>

    <div class="d-flex flex-wrap justify-content-between">
        @foreach ($Saints as $Saint)

        <div class="ms_card mb-3">
            <a href="/saint/ {{$Saint -> id}}">
                <h4> Saint {{$Saint -> name}} {{$Saint -> surname}} </h4>
            </a>
        </div>


        @endforeach
    </div>

</div>




@endsection