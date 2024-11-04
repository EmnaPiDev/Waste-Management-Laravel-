<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CollecteEvenement;
class CollecteEvenementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $collecte_evenements = CollecteEvenement::paginate(2); 
    return view('CollecteEvent.Collecte')->with('collecte_evenements', $collecte_evenements);
    }
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('CollecteEvent.Create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $validatedData = $request->validate([
            'titre' => 'required|string|max:255',
            'statut' => 'required|string|max:255',       
            'date_collecte' => 'required|date',          
            'description' => 'nullable|string',     
            'lieu' => 'nullable|string',   
        ]);
    
     
        $collecteEvenement = new CollecteEvenement();
        
        $collecteEvenement->titre = $request->input('titre');
        $collecteEvenement->statut = $request->input('statut');
        $collecteEvenement->date_collecte = $request->input('date_collecte');
        $collecteEvenement->description = $request->input('description');  
    
        $collecteEvenement->lieu = $request->input('lieu');
        $collecteEvenement->save();
    
    
        return redirect()->route('collecte-evenements.index')->with('success', 'Événement de collecte créé avec succès.');
    }
    
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $collecteEvenement = CollecteEvenement::findOrFail($id);
        return view('collecteEvent.show' , compact('collecteEvenement'));
    }
   
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CollecteEvenement $collecteEvenement)
    {
        return view('collecteEvent.edit' , compact('collecteEvenement'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        
        $validatedData = $request->validate([
            'titre' => 'required|string|max:255',
            'statut' => 'required|string|max:255',
            'date_collecte' => 'required|date',
            'description' => 'required|string',
            'lieu' => 'required|string',
        ]);
    
        
        $collecteEvenement = CollecteEvenement::findOrFail($id);
    
        $collecteEvenement->titre = $request->input('titre');
        $collecteEvenement->statut = $request->input('statut');
        $collecteEvenement->date_collecte = $request->input('date_collecte');
        $collecteEvenement->description = $request->input('description');
        $collecteEvenement->lieu = $request->input('lieu');
    
        
        $collecteEvenement->save();
    
        
        return redirect()->route('collecte-evenements.index')->with('success', 'Événement de collecte mis à jour avec succès.');
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CollecteEvenement $collecteEvenement)
    {
        $collecteEvenement->delete();
        return redirect('/collecte-evenements')->with('status', 'event  deleted successfully');

    }
}