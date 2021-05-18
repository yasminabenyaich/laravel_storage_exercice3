<?php

namespace App\Http\Controllers;

use App\Models\caracteristique;
use Illuminate\Http\Request;

class CaracteristiqueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $caracteristique= Caracteristique::all();

        return view('backoffice.caracteristique.all',compact('caracteristique'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('backoffice.caracteristique.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            "nom"=>'required',
            "icone"=>'required',
            "chiffre"=> 'required'
        ]);
        $caracteristique = new Caracteristique;

        $caracteristique->nom= $request->nom;
        $caracteristique->icone= $request->icone;
        $caracteristique->chiffre= $request->chiffre;

        $caracteristique->save();
        
        return redirect()->route('caracteristiques');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\caracteristique  $caracteristique
     * @return \Illuminate\Http\Response
     */
    public function show(caracteristique $caracteristique)
    {
        return view('partials.galerie.show',compact('caracteristique'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\caracteristique  $caracteristique
     * @return \Illuminate\Http\Response
     */
    public function edit(caracteristique $caracteristique)
    {
        return view('backoffice.caracteristique.edit',compact('caracteristique'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\caracteristique  $caracteristique
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, caracteristique $caracteristique)
    {
        $caracteristique->nom = $request->nom;
        $caracteristique->icone =$request->icone;
        $caracteristique->chiffre =$request->chiffre;

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\caracteristique  $caracteristique
     * @return \Illuminate\Http\Response
     */
    public function destroy(caracteristique $caracteristique)
    {
        $caracteristique->delete();

        return redirect()->back();
    }
   
}
