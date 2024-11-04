<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CentreRecyclage;

class CentreRecyclageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Pagination avec 5 éléments par page
        $centres = CentreRecyclage::paginate(5);

        // Retourner la vue avec la liste des centres
        return view('centre-recyclage.index', [
            'centres' => $centres
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('centre-recyclage.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validation des données
        $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'city' => 'nullable|string|max:255', // Validation pour la ville
            'material_type' => 'required|string',
            'capacity' => 'required|integer',
            'number_of_employees' => 'required|integer',
            'contact_number' => 'nullable|string|max:20', // Validation pour le numéro de contact
            'email' => 'nullable|email|max:255', // Validation pour l'e-mail
            'website' => 'nullable|url|max:255', // Validation pour le site web
        ], [
            'name.required' => 'The name of the recycling center is required.',
            'address.required' => 'The address is required.',
            'city.max' => 'The city may not be greater than 255 characters.',
            'material_type.required' => 'The material type is required.',
            'capacity.required' => 'The capacity is required.',
            'number_of_employees.required' => 'The number of employees is required.',
            'contact_number.max' => 'The contact number may not be greater than 20 characters.',
            'email.email' => 'The email address must be a valid email address.',
            'website.url' => 'The website must be a valid URL.',
        ]);

        // Créer un nouveau centre de recyclage
        CentreRecyclage::create([
            'name' => $request->name,
            'address' => $request->address,
            'city' => $request->city, // Ajout de la ville
            'material_type' => $request->material_type,
            'capacity' => $request->capacity,
            'number_of_employees' => $request->number_of_employees,
            'contact_number' => $request->contact_number, // Ajout du numéro de contact
            'email' => $request->email, // Ajout de l'e-mail
            'website' => $request->website // Ajout du site web
        ]);

        // Rediriger avec un message de succès
        return redirect('/centre-recyclage')->with('status', 'Recycling center created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(CentreRecyclage $centreRecyclage)
    {
        return view('centre-recyclage.show', compact('centreRecyclage'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CentreRecyclage $centreRecyclage)
    {
        return view('centre-recyclage.edit', compact('centreRecyclage'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CentreRecyclage $centreRecyclage)
    {
        // Validation des données mises à jour
        $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'city' => 'nullable|string|max:255', // Validation pour la ville
            'material_type' => 'required|string',
            'capacity' => 'required|integer',
            'number_of_employees' => 'required|integer',
            'contact_number' => 'nullable|string|max:20', // Validation pour le numéro de contact
            'email' => 'nullable|email|max:255', // Validation pour l'e-mail
            'website' => 'nullable|url|max:255', // Validation pour le site web
        ], [
            'name.required' => 'The name of the recycling center is required.',
            'address.required' => 'The address is required.',
            'city.max' => 'The city may not be greater than 255 characters.',
            'material_type.required' => 'The material type is required.',
            'capacity.required' => 'The capacity is required.',
            'number_of_employees.required' => 'The number of employees is required.',
            'contact_number.max' => 'The contact number may not be greater than 20 characters.',
            'email.email' => 'The email address must be a valid email address.',
            'website.url' => 'The website must be a valid URL.',
        ]);

        // Mettre à jour les informations du centre de recyclage
        $centreRecyclage->update([
            'name' => $request->name,
            'address' => $request->address,
            'city' => $request->city, // Mise à jour de la ville
            'material_type' => $request->material_type,
            'capacity' => $request->capacity,
            'number_of_employees' => $request->number_of_employees,
            'contact_number' => $request->contact_number, // Mise à jour du numéro de contact
            'email' => $request->email, // Mise à jour de l'e-mail
            'website' => $request->website // Mise à jour du site web
        ]);

        // Rediriger avec un message de succès
        return redirect('/centre-recyclage')->with('status', 'Recycling center updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CentreRecyclage $centreRecyclage)
    {
        // Supprimer le centre
        $centreRecyclage->delete();

        // Rediriger avec un message de succès
        return redirect('/centre-recyclage')->with('status', 'Recycling center deleted successfully.');
    }
}
