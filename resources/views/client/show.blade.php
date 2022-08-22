@extends('layout.app')

@section('content')



<div class="card" style="width: 30rem; margin:30px 0px 0px 850px" >
    <header class="card-header">
        <p class="card-header-title"><strong>Nom :</strong> {{ $client->nom }}<br>
            <strong>Prenom :</strong> {{ $client->prenom }}
        </p>
    </header>
    <div class="card-content">
        <div class="content" style="margin:0px 0px 0px 18px">
            <p><strong>Tenue : </strong>{{ $client->tenue }}</p>
            <p><strong>Prix :</strong>{{ $client->prix }}</p>
            <p><strong>Date évènement :</strong> {{ $client->date_evenement }}</p>
            <p><strong>Description :</strong> {{ $client->description }}</p>
        </div>
    </div>
</div>

@endsection
