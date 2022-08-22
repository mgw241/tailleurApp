<?php

namespace App\Http\Controllers;

use Redirect;
use App\Http\Requests\StoreClientRequest;
use App\Http\Requests\UpdateClientRequest;
use App\Models\Client;
use Log;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $clients = Client::all();
        //$clients['clients'] = Client::orderBy('id_client', 'desc');
        //dd($clients);
        //return view('client.index', $clients);

        return view('client.index', ['clients' => $clients]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('client.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreClientRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreClientRequest $request)
    {
        //Validate
        $client = Client::create([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'tenue' => $request->tenue,
            'taille' => $request->taille,
            'epaule' => $request->epaule,
            'poitrine' => $request->poitrine,
            'prix' => $request->prix,
            'date_evenement' => $request->date_evenement,
            'description' => $request->description
        ]);
    
        return Redirect::to('client')->with('message','client crée avec succès');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {
        return view('client.show', compact('client'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit(Client $client)
    {
        //
        return view('client.edit', compact('client'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateClientRequest  $request
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateClientRequest $request, Client $client)
    {
        
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'tenue' => 'required',
            'taille' => 'required', 'numeric',
            'epaule' => 'required', 'numeric',
            'poitrine' => 'required', 'numeric',
            'prix' => 'required', 'numeric',
            'date_evenement' => 'required',
        ]);

        $client->nom = $request->nom;
        $client->prenom = $request->prenom;
        $client->tenue = $request->tenue;
        $client->taille = $request->taille;
        $client->epaule = $request->epaule;
        $client->poitrine = $request->poitrine;
        $client->prix = $request->prix;
        $client->date_evenement = $request->date_evenement;
        $client->save();
        $request->session()->flash('message', 'Client modifié avec succès!');

        return redirect('client');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client)
    {
        $client->delete();
        return back()->with('info', 'client supprimé avec succès');

    }

    /** Search Methode */

    public function search(Request $request){

        $key = trim($request->get('q'));
        $posts = Client::query()
            ->where('nom', 'like', "%{$key}%")
            ->orWhere('prenom', 'like', "%{$key}%")
            ->orWhere('date_evenement', 'like', "%{$key}%")
            ->orderBy('date_evenement', 'desc')
            ->get();

        return view('search');
    }


}
