<?php

namespace App\Http\Controllers;

use App\Models\Galerie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GalerieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galerie= Galerie::all();

         return view('backoffice.galerie.all',compact('galerie'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('backoffice.galerie.create');
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
            "nom"=> 'required',
            "image"=>'required',
            "description" => 'required'
        ]);
        
        $galerie = new Galerie;

        $galerie->nom= $request->nom;
        $galerie->image= $request->image;
        $galerie->description= $request-> description;

        $galerie->save();

        return redirect()->route('galeries');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Galerie  $galerie
     * @return \Illuminate\Http\Response
     */
    public function show(Galerie $galerie)
    {
        return view('partials.galerie.show',compact('galerie'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Galerie  $galerie
     * @return \Illuminate\Http\Response
     */
    public function edit(Galerie $galerie)
    {
        return view('backoffice.galerie.edit',compact('galerie'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Galerie  $galerie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Galerie $galerie)
    {
        $galerie->nom = $request->nom;
        $galerie->image =$request->image;
        $galerie->description =$request->description;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Galerie  $galerie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Galerie $galerie)
    {
        $galerie->delete();

        return redirect()->back();
    
    }

    public function download ($id){

        $galerie= Galerie::find($id);
        Storage::disk('public')->download('img/'.$galerie->image);
    }
}
