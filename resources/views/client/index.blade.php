@extends('layout.app')

@if(session()->has('info'))
        <div class="notification is-success">
            {{ session('info') }}
        </div>
    @endif

@section('content')

 
<h1 class="mx-auto" style="width: 200px; margin:30px 0px 30px 0px;">Bienvenue</h1>
    <table class="table">
            <thead class="thead-dark">
                <tr>
                <th scope="col">N°</th>
                <th scope="col">Nom</th>
                <th scope="col">Prénom</th>
                <th scope="col">Tenue</th>
                <th scope="col">Taille (cm)</th>
                <th scope="col">Epaule (cm)</th>
                <th scope="col">Poitrine (cm)</th>
                <th scope="col">Prix (fcfa)</th>
                <th scope="col">Date évènement</th>
                <th scope="col">Description</th>
                <th scope="col"></th>
                <th scope="col"></th>
                <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
            @foreach($clients as $client)
            <tr>
                <td>{{$client->id_client}}</td>
                <td>{{$client->nom}}</td>
                <td>{{$client->prenom}}</td>
                <td>{{$client->tenue}}</td>
                <td>{{$client->taille}}</td>
                <td>{{$client->epaule}}</td>
                <td>{{$client->poitrine}}</td>
                <td>{{$client->prix}}</td>
                <td>{{$client->date_evenement}}</td>
                <td>{{$client->description}}</td>
                <td>
                    <div class="btn-group" role="group" aria-label="Basic-example">  
                        <a href="{{ route('client.show', $client->id_client) }}">
                        <button class="btn btn-primary">Voir</button>
                        </a>&nbsp;
                        <a href="{{ route('client.edit', $client->id_client) }}">
                            <button class="btn btn-warning">Modifier</button>
                        </a>&nbsp;    
                        <form action="{{ route('client.destroy', $client->id_client) }}" method="POST">
                           <input type="hidden" name="_method" value="DELETE">
                           <input type="hidden" name="_token" value="{{ csrf_token() }}">
                           <input type="submit" class="btn btn-danger" value="Supprimer">
                        </form>
                    </div>
                </td>
            </tr>
            @endforeach
            </tbody>
    </table>

    
@endsection
