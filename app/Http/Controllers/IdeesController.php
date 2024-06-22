<?php

namespace App\Http\Controllers;

use App\Models\Idees;
use Illuminate\Http\Request;

class IdeesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        //
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
        //
    }
}
