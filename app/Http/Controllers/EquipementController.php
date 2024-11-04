<?php

namespace App\Http\Controllers;

use App\Models\Equipement;
use Illuminate\Http\Request;
use App\Models\Planning;


class EquipementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
{
    $query = $request->input('search');
    $equipements = Equipement::when($query, function($queryBuilder) use ($query) {
        return $queryBuilder->where('name', 'LIKE', "%{$query}%");
    })->paginate(4);

    if ($request->ajax()) {
        return view('equipement.partials.equipement_table', compact('equipements'));
    }

    return view('equipement.index', compact('equipements'));
}



    public function affecterPlanning(Equipement $equipement)
    {
        // Récupérer les plannings futurs
        $planningsFuturs = Planning::where('dateCollecte', '>', now())->get();

        return view('equipement.affecter', compact('equipement', 'planningsFuturs'));
    }
    public function storeAffectation(Request $request, Equipement $equipement)
    {
        $request->validate([
            'planning_id' => 'required|exists:plannings,id', // Validation de l'existence du planning
        ]);


        $equipement->plannings()->attach($request->planning_id);

        return redirect()->route('equipement.show', $equipement->id)->with('status', 'Équipement affecté au planning avec succès.');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('equipement.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|min:3|max:50',
            'validity' => 'required|string',
            'disponibility' => 'nullable',
            'quantity' => 'required|integer|min:0',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
      
        $equipement = new Equipement([
            'name' => $request->name,
            'validity' => $request->validity,
            'disponibility' => $request->disponibility == true ? 1 : 0,
            'quantity' => $request->quantity,
        ]);
    
        if ($request->hasFile('image')) {
            // Generate a unique name for the image
            $imageName = time() . '.' . $request->image->extension();
            
            // Move the uploaded file to the public/images directory
            $request->image->move(public_path('images'), $imageName);
            
            // Save the image path in the database
            $equipement->image = 'images/' . $imageName;
        }
    
        // Save the Equipement instance to the database
        $equipement->save();
    
        return redirect('/equipement')->with('status', 'Equipement created successfully');
    }
    

    /**
     * Display the specified resource.
     */
    public function show(Equipement $equipement)
    {
        $equipement->load('plannings'); // Charge les plannings associés
    
        return view('equipement.show', compact('equipement'));
    }
    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Equipement $equipement)
    {
        return view('equipement.edit' , compact('equipement'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Equipement $equipement)
    {
        $request->validate([
            'name' => 'required|string|min:3|max:50',
            'validity' => 'required|string',
            'disponibility' => 'required',
            'quantity' => 'required|integer|min:0',
        ]);
        $equipement->update([
            'name'=> $request->name,
            'validity'=> $request->validity,
            'disponibility'=> $request->disponibility == true ? 1:0,
            'quantity'=> $request->quantity
        ]);
        return redirect('/equipement')->with('status', 'Equipement  updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Equipement $equipement)
    {
        $equipement->delete();
        return redirect('/equipement')->with('status', 'Equipement  deleted successfully');

    }
}
