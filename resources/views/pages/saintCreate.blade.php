@extends('layouts.main-layout')

@section('content')

<div class="container">
    <h2 class="text-center py-3">Compila il form per creare un nuovo santo da inserire nel database</h2>

    <form class="row g-3" method="post" action="{{route('saint.store')}}">
        @csrf
        <div class="col-md-6">
            <label for="name" class="form-label">Nome</label>
            <input type="text" class="form-control" name="name">
        </div>
        <div class="col-md-6">
            <label for="surname" class="form-label">Cognome</label>
            <input type="text" class="form-control" name="surname">
        </div>
        <div class="col-12">
            <label for="canonization" class="form-label">Data di cannonizzazione</label>
            <input type="date" class="form-control" name="canonization">
        </div>
        <div class="col-12">
            <label for="numberOfMiracle" class="form-label">Numero di miracoli</label>
            <input type="number" class="form-control" name="numberOfMiracle">
        </div>

        <div class="col-12">
            <button type="submit" class="btn btn-primary">Aggiungi al Database</button>
        </div>
    </form>
</div>
@endsection