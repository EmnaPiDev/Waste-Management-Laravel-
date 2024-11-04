<?php

namespace App\Http\Controllers;

use App\Models\Avis;
use App\Models\CampagneSensibilisation;
use Illuminate\Http\Request;

class AvisController extends Controller
{
    public function index($campagne_id)
    {
        $campagne = CampagneSensibilisation::findOrFail($campagne_id);
        $avis = $campagne->avis; // Récupérer tous les avis pour cette campagne
        return view('avis.index', compact('avis', 'campagne'));
    }

    public function create($campagne_id)
    {
        $campagne = CampagneSensibilisation::findOrFail($campagne_id);
        return view('avis.create', compact('campagne'));
    }

    public function store(Request $request, $campagne_id)
    {
        // Validation avancée avec des messages personnalisés
        $request->validate([
            'auteur' => 'required|string|max:100',  // L'auteur est requis, doit être une chaîne, max 100 caractères
            'contenu' => 'required|string|min:10|max:1000',  // Le contenu est requis, entre 10 et 1000 caractères
        ], [
            'auteur.required' => 'The author field is required.',
            'auteur.string' => 'The author must be a valid string.',
            'auteur.max' => 'The author name cannot exceed 100 characters.',
            'contenu.required' => 'The content field is required.',
            'contenu.string' => 'The content must be a valid string.',
            'contenu.min' => 'The content must be at least 10 characters long.',
            'contenu.max' => 'The content cannot exceed 1000 characters.',
        ]);

        // Récupérer la campagne
        $campagne = CampagneSensibilisation::findOrFail($campagne_id);

        // Créer un nouvel avis pour cette campagne
        $campagne->avis()->create([
            'auteur' => $request->auteur,
            'contenu' => $request->contenu,
            'campagne_sensibilisation_id' => $campagne_id, // Lié à la campagne
        ]);

        return redirect()->route('campagnes.avis.index', $campagne_id)->with('success', 'Review successfully added.');
    }

    public function show($campagne_id, $id)
    {
        $avis = Avis::findOrFail($id);
        return view('avis.show', compact('avis'));
    }

    public function edit($campagne_id, $id)
    {
        $campagne = CampagneSensibilisation::findOrFail($campagne_id); // Récupérer la campagne
        $avis = Avis::findOrFail($id); // Récupérer l'avis à éditer
        return view('avis.edit', compact('avis', 'campagne')); // Passer les deux variables à la vue
    }

    public function update(Request $request, $campagne_id, $id)
    {
        // Validation avancée avec des messages personnalisés
        $request->validate([
            'auteur' => 'required|string|max:100',  // L'auteur est requis, doit être une chaîne, max 100 caractères
            'contenu' => 'required|string|min:10|max:1000',  // Le contenu est requis, entre 10 et 1000 caractères
        ], [
            'auteur.required' => 'The author field is required.',
            'auteur.string' => 'The author must be a valid string.',
            'auteur.max' => 'The author name cannot exceed 100 characters.',
            'contenu.required' => 'The content field is required.',
            'contenu.string' => 'The content must be a valid string.',
            'contenu.min' => 'The content must be at least 10 characters long.',
            'contenu.max' => 'The content cannot exceed 1000 characters.',
        ]);

        $avis = Avis::findOrFail($id);
        $avis->update($request->all());

        return redirect()->route('campagnes.avis.index', $campagne_id)->with('success', 'Review successfully updated.');
    }

    public function destroy($campagne_id, $id)
    {
        $avis = Avis::findOrFail($id);
        $avis->delete();

        return redirect()->route('campagnes.avis.index', $campagne_id)->with('success', 'Review successfully deleted.');
    }
}
