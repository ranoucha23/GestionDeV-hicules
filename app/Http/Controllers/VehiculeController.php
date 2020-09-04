<?php

namespace App\Http\Controllers;

use App\vehicule;
use DB;
use Illuminate\Http\Request;

class VehiculeController extends Controller
{
    
    public function index()
    {
        $vehicule=DB::table('vehicules')
          ->join('marques',"=",'marques.marque_id','vehicule.marque_id')
          ->join('modeles','modeles.modele_id',"=",'vehicule.modele_id')
          ->get();
        return view('vehicule_show',compact('post'));
    }

   
    public function create()
    {
       return view('vehicule_create');
    }

   
    public function store(Request $request)
    {   $res=new Vehicule;
        $res->nom=$request->input("nom");
        $res->marques_id=$request->input("marques_id");
        $res->modeles_id=$request->input("modeles_id");
        $res->save();
        $request->session()->flash('msg','véhicule ajoutée');
        return redirect('vehicule_show');
    }

    
    public function show(vehicule $vehicule)
    {   $vehicule=DB::table('vehicules')
        ->join('marques','marques.id','vehicules.id')
        ->join('modeles','modeles.id','vehicules.id')
        ->get();
        #return view('vehicule_show',compact($vehicule));
        return view ('vehicule_show')->with('vehiculeArr',vehicule::all());
    }

  
    public function edit(vehicule $vehicule , $id)
    {
        return view ('vehicule_edit')->with('vehiculeArr',Vehicule::find($id));

    }

    
    public function update(Request $request, vehicule $vehicule)
    {
        $res=Vehicule::find($request->id);
        $res->nom=$request->input("nom");
        $res->marque_id=$request->input("marque_id");
        $res->modele_id=$request->input("modele_id");
        $res->save();
        $request->session()->flash('msg','véhicule modifiée');
        return redirect('vehicule_show');
    }

    
    public function destroy(Request $request ,vehicule $vehicule,$id)
    {
        vehicule::destroy(array('id',$id));
        return redirect('vehicule_show');
    }

    public function vehicule(){
        return response()->json(vehicule::get(),200);
    }
    public function vehiculeUpdate(Request $request, vehicule $vehicule){
       $vehicule->update($request->all());
       return response()->json($vehicule,200); 

   } 
}
