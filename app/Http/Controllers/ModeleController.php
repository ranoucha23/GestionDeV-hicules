<?php

namespace App\Http\Controllers;

use App\modele;
use Illuminate\Http\Request;

class ModeleController extends Controller
{
    
    public function index()
    {
        return Modele::find(1)->mycar;
    }

   
    public function create()
    {
       return view('modele_create');
    }

   
    public function store(Request $request)
    {   $res=new Modele;
        $res->nom=$request->input("nom");
        $res->save();
        $request->session()->flash('msg','véhicule ajoutée');
        return redirect('modele_show');
    }

    
    public function show(modele $modele)
    {
       return view ('modele_show')->with('modeleArr',Modele::all());
    }

  
    public function edit(modele $modele , $id)
    {
        return view ('modele_edit')->with('modeleArr',Modele::find($id));

    }

    
    public function update(Request $request, modele $modele)
    {
        $res=Modele::find($request->id);
        $res->nom=$request->input("nom");
        $res->save();
        $request->session()->flash('msg','véhicule modifiée');
        return redirect('modele_show');
    }

    
    public function destroy(Request $request ,modele $modele,$id)
    {
        Modele::destroy(array('id',$id));
        return redirect('modele_show');
    }
    public function modele(){
        return response()->json(modele::get(),200);
    }

   
}
