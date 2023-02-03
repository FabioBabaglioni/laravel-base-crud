@extends('layouts.main-layout')

@section('content')

<div class="container text-center">
    <h1 class="text-danger py-4">Lista dei Santi</h1>

    <a href="" class="d-flex justify-content-center">
        <div class="add mb-5">Inserire nuovo santo</div>
    </a>


    <div class="d-flex flex-wrap justify-content-between">
        @foreach ($Saints as $Saint)

        <div class="ms_card mb-3">
            <a href="{{route('saint.show', ['id' => $Saint -> id])}}">
                <h4> Saint {{$Saint -> name}} {{$Saint -> surname}} </h4>
            </a>

            <a href="{{ route('saint.destroy', ['id' => $Saint -> id])}}">
                <div><i class="fa-solid fa-trash"></i></div>
            </a>

        </div>


        @endforeach
    </div>

</div>




@endsection