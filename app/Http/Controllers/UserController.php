<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //FUNCTION INDEX

    public function index(){

        $users= User::all();

        return view('backoffice.user.all',compact('users'));
    }


    //FUNCTION DELETE
    public function destroy(User $user) {

        $user->delete();

        return redirect()->back();

    }

    //FUNCTION EDIT
    
    public function edit(User $user) {

      

        return view('backoffice.user.edit',compact('user'));
            
       
    }


    //FUNCTION UPDATE 

    public function update(Request $request,User $user){
        
        
        // les request vont permettre d'indiquer les noms manquants

        $user->nom = $request->nom;
        $user->prenom = $request->prenom;
        $user->age = $request->age;
        $user->email = $request->email;
        $user->mdp = $request->mdp;
        $user->pdp = $request->pdp;

        $user->save();
        return redirect()->route('user');   
    }
    
//  FUNCTION CREATE : créer un nouvel utilisateur

public function create(){
    
        return view('backoffice.user.create');

   
}
// FUNCTION SHOW
public function show(User $user)
{
    
    return view('partials.user.show',compact('user'));
}

// FUNCTION STORE (stocker)

public function store(Request $request){
    //afficher sur notre page les éléments manquants si les données ne sont pas inséré

    $request->validate([
        "nom" => 'required',
        "prenom" => 'required',
        "age" => 'required',
        "email" => 'required',
        "mdp" =>'required',
       

    ]);

    $user = new User;

//créer un nvl utilsateur et stocker les données suivantes:
    $user->nom = $request->nom;
    $user->prenom = $request->prenom;
    $user->age = $request->age;
    $user->email = $request->email;
    $user->mdp = $request->mdp;
    $user->pdp = $request->file("pdp")->hashName();

    $user->save();
    $request->file("pdp")->storePublicly("img/" . $user->pdp);
    
    return redirect()->route('user.index');
}

}