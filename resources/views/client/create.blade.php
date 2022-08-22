@extends('layout.app')

@section('content')

<h1 class="mx-auto" style="width: 500px; margin:30px 0px 30px 0px;">Ajouter un nouveau client</h1>



    <form class="row g-3" method="POST" action="{{ route('client.store') }}" style="width: 1500px; margin:30px 30px 30px 30px;">
    @csrf
        <div class="col-md-4">
            <label for="inputName" class="form-label" style="font-weight:bold;">Nom</label>
            <input type="text" class="form-control" id="inputName" name="nom">
        </div>
        <div class="col-md-4">
            <label for="inputFirstName" class="form-label" style="font-weight:bold;">Prénom</label>
            <input type="text" class="form-control" id="inputFirstName" name="prenom">
        </div>
        <div class="col-md-4">
            <label for="inputTenue" class="form-label" style="font-weight:bold;">Tenue</label>
            <select id="inputState" class="form-select" name="tenue">
                <option selected>Choisir</option>
                <option>Chemisette</option>
                <option>Chemise</option>
                <option>Costume</option>
                <option>Costume trois pièces</option>
                <option>Veste</option>
                <option>Pantalon</option>
            </select>
        </div>
        <div class="col-md-4">
            <label for="inputTaille" class="form-label" style="font-weight:bold;">Taille (cm)</label>
            <input type="decimal" class="form-control" id="inputTaille" name="taille">
        </div>
        <div class="col-md-4">
            <label for="inputEpaule" class="form-label" style="font-weight:bold;">Epaule (cm)</label>
            <input type="decimal" class="form-control" id="inputEpaule" name="epaule">
        </div>
        <div class="col-md-4">
            <label for="inputPoitrine" class="form-label" style="font-weight:bold;">Poitrine (cm)</label>
            <input type="decimal" class="form-control" id="inputPoitrine" name="poitrine">
        </div>
        <div class="col-md-2">
            <label for="inputPrix" class="form-label" style="font-weight:bold;">Prix (fcfa)</label>
            <input type="number" class="form-control" id="inputPrix" name="prix">
        </div>
        <div class="col-md-2">
            <label for="inputEventDate" class="form-label" style="font-weight:bold;">Date évèvement</label>
            <input type="date" class="form-control" id="inputEventDate" name="date_evenement">
        </div>
        <div class="col-md-4">
            <label for="inputDescription" class="form-label" style="font-weight:bold;">Description</label>
            <input type="text" class="form-control" id="inputDescription" name="description">
        </div>
      @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
      @endif
        <div class="col-md-6">
            <button type="submit" class="btn btn-primary">Envoyer</button>&nbsp; 
            <button type="reset" class="btn btn-primary">Annuler</button>
    </form>

    
@endsection