@extends('layout.app')

@section('content')

    <h1 class="mx-auto" style="width: 500px; margin:30px 0px 30px 0px;">Modifier un client</h1>
    <hr>
        <form action="{{ url('client', [$client->id_client]) }}" method="POST"> 
            <input type="hidden" name="_method" value="PUT">
            {{ csrf_field() }}
                <div class="col-md-4">
                    <label for="inputName" class="form-label">Nom</label>
                    <input type="text" class="form-control" id="inputName" name="nom" value="{{ $client->nom }}">
                </div>
                <div class="col-md-4">
                    <label for="inputFirstName" class="form-label">Prénom</label>
                    <input type="text" class="form-control" id="inputFirstName" name="prenom" value="{{ $client->prenom }}">
                </div>
                <div class="col-md-4">
                    <label for="inputTenue" class="form-label">Tenue</label>
                    <select id="inputState" class="form-select" name="tenue" value="{{ $client->tenue}}">
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
                    <label for="inputTaille" class="form-label">Taille (cm)</label>
                    <input type="decimal" class="form-control" id="inputTaille" name="taille" value="{{ $client->taille }}">
                </div>
                <div class="col-md-4">
                    <label for="inputEpaule" class="form-label">Epaule (cm)</label>
                    <input type="decimal" class="form-control" id="inputEpaule" name="epaule" value="{{ $client->epaule }}">
                </div>
                <div class="col-md-4">
                    <label for="inputPoitrine" class="form-label">Poitrine (cm)</label>
                    <input type="decimal" class="form-control" id="inputPoitrine" name="poitrine" value="{{ $client->poitrine }}">
                </div>
                <div class="col-md-2">
                    <label for="inputPrix" class="form-label">Prix (fcfa)</label>
                    <input type="number" class="form-control" id="inputPrix" name="prix" value="{{ $client->prix }}">
                </div>
                <div class="col-md-2">
                    <label for="inputEventDate" class="form-label">Date évèvement</label>
                    <input type="date" class="form-control" id="inputEventDate" name="date_evenement" value="{{ $client->date_evenement }}">
                </div>
                <div class="col-md-4">
                    <label for="inputDescription" class="form-label">Description</label>
                    <input type="text" class="form-control" id="inputDescription" name="description" value="{{ $client->description }}">
                </div>
                <div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <!--<button onclick="history.back()">Accueil</button>-->
                </div>
        </form>
@endsection