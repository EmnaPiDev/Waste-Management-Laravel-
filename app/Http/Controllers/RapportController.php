<?php

namespace App\Http\Controllers;

use App\Models\Rapport;
use App\Models\CollecteEvenement;
use Illuminate\Http\Request;
use PDF;

class RapportController extends Controller
{
    
    public function index()
    {
        $rapports = Rapport::all();
        return view('Rapport.index', compact('rapports'));
    }

    
    public function create()
    {
        
        $collecteEvenements = CollecteEvenement::all();

        return view('Rapport.create', compact('collecteEvenements'));
    }

    
    public function store(Request $request)
    {
        
        $validatedData = $request->validate([
            'titre' => 'required|max:255',
            'contenu' => 'required',
            'date_rapport' => 'required|date',
            'collecte_evenement_id' => 'required|exists:collecte_evenements,id',
        ]);

        
        $rapport = Rapport::create($validatedData);

        
        $pdf = PDF::loadView('Rapport.pdf', ['rapport' => $rapport]);

      
        return $pdf->download('rapport_' . $rapport->id . '.pdf');
    }

    
    public function show($id)
    {
        $rapport = Rapport::findOrFail($id);
        return view('Rapport.show', compact('rapport'));
    }

    
    public function edit($id)
    {
        $rapport = Rapport::findOrFail($id);
        $collecteEvenements = CollecteEvenement::all();
        return view('Rapport.edit', compact('rapport', 'collecteEvenements'));
    }

    
    public function update(Request $request, $id)
    {
        
        $validatedData = $request->validate([
            'titre' => 'required|max:255',
            'contenu' => 'required',
            'date_rapport' => 'required|date',
            'collecte_evenement_id' => 'required|exists:collecte_evenements,id',
        ]);

        
        $rapport = Rapport::findOrFail($id);
        $rapport->update($validatedData);

        return redirect()->route('Rapport.index')->with('status', 'Rapport mis à jour avec succès.');
    }

    
    public function destroy($id)
    {
        $rapport = Rapport::findOrFail($id);
        $rapport->delete();

        return redirect()->route('rapports.index')->with('status', 'Rapport supprimé avec succès.');
    }
}