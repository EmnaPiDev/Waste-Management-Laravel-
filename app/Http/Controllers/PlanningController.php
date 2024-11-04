<?php

namespace App\Http\Controllers;

use App\Models\Planning;
use App\Models\Equipement;

use Illuminate\Http\Request;

class PlanningController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $plannings = Planning::paginate(3);
        return view('planning.index',[
            'plannings' => $plannings
        ]);
    }
    public function showCalendar()
    {
        // Fetch all planning events
        $plannings = Planning::all();

        return view('calender.index', compact('plannings')); // Change 'calendar.index' to your desired view
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $equipements = Equipement::all(); // Récupérer tous les équipements disponibles
        return view('planning.create', compact('equipements'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $request->validate([
        'dateCollecte' => 'required|date|after:now',
        'heureDebut' => 'required|date_format:H:i',
        'remarques' => 'string|nullable',
        'equipements' => 'array|exists:equipements,id', // Validation des équipements
    ], [
        'dateCollecte.after' => 'La date de collecte doit être supérieure à la date et l\'heure actuelles.',
    ]);

    // Créer le planning et stocker l'instance dans $planning
    $planning = Planning::create([
        'dateCollecte' => $request->dateCollecte,
        'heureDebut' => $request->heureDebut,
        'remarques' => $request->remarques,
    ]);

    // Associer les équipements sélectionnés au planning
    $planning->equipements()->attach($request->equipements);

    return redirect('/planning')->with('status', 'Planning created successfully');
}


    /**
     * Display the specified resource.
     */
    public function show(Planning $planning)
    {
        $planning->load('equipements');

        return view('planning.show' , compact('planning'));


    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Planning $planning)
    {
        $equipements = Equipement::all(); // Tous les équipements
        $selectedEquipements = $planning->equipements->pluck('id')->toArray(); // Équipements liés au planning

        return view('planning.edit' , compact('planning', 'equipements', 'selectedEquipements'));


    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Planning $planning)
{
    $request->validate([
        'dateCollecte' => 'required|date|after:now',
        'heureDebut' => 'required|date_format:H:i',
        'remarques' => 'string|nullable',
        'equipements' => 'array|exists:equipements,id', // Validation des équipements
    ], [
        'dateCollecte.after' => 'La date de collecte doit être supérieure à la date et l\'heure actuelles.',
    ]);
    
    // Met à jour le planning
    $planning->update([
        'dateCollecte' => $request->dateCollecte,
        'heureDebut' => $request->heureDebut,
        'remarques' => $request->remarques,
    ]);

    // Détache tous les équipements précédemment associés (si nécessaire)
    $planning->equipements()->sync($request->equipements); // Utilise sync() pour mettre à jour les associations

    return redirect('/planning')->with('status', 'Planning updated successfully');
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Planning $planning)
    {
        $planning->equipements()->detach(); // Détacher les équipements avant de supprimer

        $planning->delete();
        return redirect('/planning')->with('status', 'Planning deleted successfully');

    }
    


    
    
}
