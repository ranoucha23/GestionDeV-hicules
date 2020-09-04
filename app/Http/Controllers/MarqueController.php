<?php

namespace App\Http\Controllers;

use App\marque;
use Illuminate\Http\Request;

class MarqueController extends Controller
{
    
    public function index()
    {
        return Marque::find(1)->myVe;
    }

   
    public function create()
    {
       return view('marque_create');
    }

   
    public function store(Request $request)
    {   $res=new Marque;
        $res->nom=$request->input("nom");
        $res->save();
        $request->session()->flash('msg','marque ajoutée');
        return redirect('marque_show');
    }

    
    public function show(marque $marque)
    {
       return view ('marque_show')->with('marqueArr',Marque::all());
    }

  
    public function edit(marque  $marque , $id)
    {
        return view ('marque_edit')->with('marqueArr',Marque::find($id));

    }

    
    public function update(Request $request, marque $marque)
    {
        $res=Marque::find($request->id);
        $res->nom=$request->input("nom");
        $res->save();
        $request->session()->flash('msg','marque modifiée');
        return redirect('marque_show');
    }

    
    public function destroy(Request $request ,marque $marque,$id)
    {
        Marque::destroy(array('id',$id));
        return redirect('marque_show');
    }
    public function marque(){
        return response()->json(marque::get(),200);
    }

   
}
