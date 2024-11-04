<?php

namespace App\Http\Controllers;

use App\Models\Dechet;
use App\Models\ZoneCollecte;
use Illuminate\Http\Request;

class ZoneCollecteController extends Controller
{
    public function index()
    {
        $dechets = Dechet::all();
        $zoneCollectes = ZoneCollecte::all();
        $dechets = Dechet::with('zoneCollecte')->paginate(10); // Ajustez le nombre selon vos besoins
        $zoneCollectes = ZoneCollecte::paginate(10); // Ajustez le nombre selon vos besoins
    
        return view('dechets.index',[
            'dechets' =>$dechets,
            'zoneCollectes' =>$zoneCollectes
    
        ], compact('zoneCollectes'));
    }

    public function create()
    {
        return view('zone_collectes.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'code_postal' => 'required|numeric|digits:4',
            'localisation' => 'required|string|max:255',
        ],);

        ZoneCollecte::create($request->all());
        return redirect()->route('dechets.index')
            ->with('success', 'Zone de collecte créée avec succès.');
    }

    public function show(ZoneCollecte $zoneCollecte)
    {
        return view('zone_collectes.show', compact('zoneCollecte'));
    }

    public function edit(ZoneCollecte $zoneCollecte)
    {
        return view('zone_collectes.edit', compact('zoneCollecte'));
    }

    public function update(Request $request, ZoneCollecte $zoneCollecte)
    {
        $request->validate([
            'nom' => 'required|string|max:255|min:3',
            'code_postal' => 'required|numeric|digits:4',
            'localisation' => 'required|string|max:255|min:3',
        ],[
            'nom.required' => 'Le nom est obligatoire.',
            'code_postal.required' => 'Le code postal est obligatoire.',
            'code_postal.digits' => 'Le code postal doit être composé de 4 chiffres.',
            'localisation.required' => 'La localisation est obligatoire.',
            'nom.min' => 'La nom doit comporter au moins 3 caractères' ,
            'localisation.min' => 'La localisation doit comporter au moins 3 caractères'

            
        ]);

        $zoneCollecte->update($request->all());
        return redirect()->route('zone-collectes.index')
            ->with('success', 'Zone de collecte mise à jour avec succès.');
    }

    public function destroy(ZoneCollecte $zoneCollecte)
    {
        $zoneCollecte->delete();
        return redirect()->route('zone-collectes.index')
            ->with('success', 'Zone de collecte supprimée avec succès.');
    }
}
