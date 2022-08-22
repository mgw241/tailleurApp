<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Hash;
use Session;
use App\Models\User;

class UserController extends Controller
{
    //index page

    public function index(){

        return view('login');
        
    }

    public function login(Request $request) {

        if (Auth::attempt($request->only('email', 'password'))) {
            return redirect('index');
        }
  
        return back()->with('Login details are not valid');
    }

    public function show(){
        return view('registre');
    }

    public function registre(Request $request){

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)

        ]); 

        return back()->with('Success', 'Utilisateur crée avec succès');

    }

    
}