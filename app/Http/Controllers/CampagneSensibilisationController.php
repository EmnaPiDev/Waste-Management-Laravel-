<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CampagneSensibilisation;

class CampagneSensibilisationController extends Controller
{
    // Affiche toutes les campagnes
    public function index()
    {
        $campagnes = CampagneSensibilisation::all();
        return view('campagnes.index', compact('campagnes'));
    }

    // Affiche le formulaire pour créer une campagne
    public function create()
    {
        return view('campagnes.create');
    }

    // Stocke une nouvelle campagne dans la base de données avec validation avancée
    public function store(Request $request)
    {
        $request->validate([
            'titre' => 'required|string|max:255',  // Obligatoire, doit être une chaîne de caractères, max 255 caractères
            'date_debut' => 'required|date|after_or_equal:today',  // Obligatoire, doit être une date, doit être égale ou après aujourd'hui
            'date_fin' => 'required|date|after:date_debut',  // Obligatoire, doit être une date, doit être après la date_debut
        ], [
            'titre.required' => 'The title field is mandatory.',
            'titre.string' => 'The title must be a valid string.',
            'titre.max' => 'The title may not exceed 255 characters.',
            'date_debut.required' => 'The start date is required.',
            'date_debut.date' => 'The start date must be a valid date.',
            'date_debut.after_or_equal' => 'The start date cannot be in the past.',
            'date_fin.required' => 'The end date is required.',
            'date_fin.date' => 'The end date must be a valid date.',
            'date_fin.after' => 'The end date must be after the start date.',
        ]);

        CampagneSensibilisation::create($request->all());

        return redirect()->route('campagnes.index')->with('success', 'Campaign successfully created.');
    }

    // Affiche une campagne spécifique
    public function show(CampagneSensibilisation $campagne)
    {
        return view('campagnes.show', compact('campagne'));
    }

    // Affiche le formulaire pour éditer une campagne
    public function edit(CampagneSensibilisation $campagne)
    {
        return view('campagnes.edit', compact('campagne'));
    }

    // Met à jour une campagne existante dans la base de données avec validation avancée
    public function update(Request $request, CampagneSensibilisation $campagne)
    {
        $request->validate([
            'titre' => 'required|string|max:255',  // Obligatoire, doit être une chaîne de caractères, max 255 caractères
            'date_debut' => 'required|date|after_or_equal:today',  // Obligatoire, doit être une date, doit être égale ou après aujourd'hui
            'date_fin' => 'required|date|after:date_debut',  // Obligatoire, doit être après la date_debut
        ], [
            'titre.required' => 'The title field is mandatory.',
            'titre.string' => 'The title must be a valid string.',
            'titre.max' => 'The title may not exceed 255 characters.',
            'date_debut.required' => 'The start date is required.',
            'date_debut.date' => 'The start date must be a valid date.',
            'date_debut.after_or_equal' => 'The start date cannot be in the past.',
            'date_fin.required' => 'The end date is required.',
            'date_fin.date' => 'The end date must be a valid date.',
            'date_fin.after' => 'The end date must be after the start date.',
        ]);

        $campagne->update($request->all());

        return redirect()->route('campagnes.index')->with('success', 'Campaign successfully updated.');
    }

    // Supprime une campagne
    public function destroy(CampagneSensibilisation $campagne)
    {
        $campagne->delete();
        return redirect()->route('campagnes.index')->with('success', 'Campaign successfully deleted.');
    }
}
