@extends('layouts.main-layout')

@section('content')

<div class="container">
    <h2 class="text-center py-3">Compila il form per creare un nuovo santo da inserire nel database</h2>

    <form class="row g-3">
        <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Nome</label>
            <input type="email" class="form-control" id="inputEmail4">
        </div>
        <div class="col-md-6">
            <label for="inputPassword4" class="form-label">Cognome</label>
            <input type="password" class="form-control" id="inputPassword4">
        </div>
        <div class="col-12">
            <label for="inputAddress" class="form-label">Data di cannonizzazione</label>
            <input type="date" class="form-control" id="inputAddress" placeholder="1234 Main St">
        </div>
        <div class="col-12">
            <label for="inputAddress2" class="form-label">Numero di miracoli</label>
            <input type="number" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
        </div>

        <div class="col-12">
            <button type="submit" class="btn btn-primary">Aggiungi al Database</button>
        </div>
    </form>
</div>
@endsection