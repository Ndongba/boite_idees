<?php

namespace App\Http\Controllers;

use App\Models\Commentaire;
use App\Models\Idees;
use Illuminate\Http\Request;

class IdeesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $idees=Idees::all();
        

        return view('idees.affiche_idee', compact('idees'));
    }

    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('idees.ajouter_idee');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Idees::create($request->all());

        return redirect()->back()->with('status','Votre idée a été ajoutée avec succés');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
  {     
        $idee=Idees::with('commentaires')->find($id);
       

        return view('idees.detail_idee', compact('idee'));
  }

    public function save_commentaire(Request $request){
        Commentaire::create($request->all());
        return redirect()->back();
}

    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $idee=Idees::find($id);
        $idee->delete();

        return redirect()->back();
    }
}
