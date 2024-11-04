<?php

namespace App\Http\Controllers;

use PDF;

use App\Models\Reclamation;
use App\Models\CentreRecyclage; 
use Illuminate\Http\Request;

class ReclamationController extends Controller
{
    // Afficher toutes les réclamations
    public function index($centreId = null)
{
    if (is_null($centreId)) {
       
        return redirect()->route('some.route'); // Remplacez par la route appropriée
    }

    $centre = CentreRecyclage::findOrFail($centreId);
    $reclamations = Reclamation::where('centre_recyclage_id', $centreId)->get();
    return view('reclamation.index', compact('centre', 'reclamations'));
}
   
    
public function create($centreId)
{
    // Récupérer les centres de recyclage ou d'autres données si nécessaire
    $centres = CentreRecyclage::all(); // ou un autre code pour récupérer vos centres
    return view('reclamation.create', compact('centreId', 'centres'));
}
    // Stocker une nouvelle réclamation
    public function store(Request $request, $centreId)
    {
        $request->validate([
            'subject' => 'required|string|max:255',
            'description' => 'required|string',
            'status' => 'nullable|string|in:' . implode(',', Reclamation::validStatuses()),
        ]);
    
        Reclamation::create([
            'subject' => $request->subject,
            'description' => $request->description,
            'centre_recyclage_id' => $centreId,
            'status' => $request->status ?: Reclamation::STATUS_PENDING,
        ]);
    
        return redirect()->route('reclamation.index', ['centreId' => $centreId])
                         ->with('status', 'Reclamation created successfully.'); // Message en anglais
    }
    
    
    // Afficher une réclamation spécifique
    public function show($centreId, $id)
    {
        $reclamation = Reclamation::findOrFail($id);
        $centre = CentreRecyclage::find($centreId);

        return view('reclamation.show', compact('reclamation', 'centre'));
    }
    // Afficher le formulaire d'édition d'une réclamation
    public function edit($centreId, $id)
    {
        $reclamation = Reclamation::findOrFail($id);
        $centre = CentreRecyclage::find($centreId);
        
        return view('reclamation.edit', compact('reclamation', 'centre'));
    }

    public function update(Request $request, $centreId, $id)
{
    $request->validate([
        'subject' => 'required|string|max:255',
        'description' => 'required|string',
    ]);

    $reclamation = Reclamation::findOrFail($id);
    $reclamation->update([
        'subject' => $request->subject,
        'description' => $request->description,
    ]);

    return redirect()->route('reclamation.index', $centreId)->with('success', 'Reclamation updated successfully.'); // Message en anglais
}

public function destroy($centreId)
{
    $reclamation = Reclamation::where('centre_recyclage_id', $centreId)->first();

    if ($reclamation) {
        $reclamation->delete();

        return redirect()->route('reclamation.index', ['centreId' => $centreId])
                         ->with('success', 'Reclamation deleted successfully.'); // Message en anglais
    }

    return redirect()->route('reclamation.index', ['centreId' => $centreId])
                     ->with('error', 'Reclamation not found.'); // Message en anglais
}
    
public function export($centreId)
{
    

    $reclamations = Reclamation::where('centre_recyclage_id', $centreId)->get();
    $centre = CentreRecyclage::findOrFail($centreId);


    $html = '<h1>Réclamations pour le centre ' . $centre->name . '</h1>';
    $html .= '<table style="width: 100%; border-collapse: collapse;">';
    $html .= '<thead>
                <tr>
                    <th style="border: 1px solid black; padding: 8px;">Sujet</th>
                    <th style="border: 1px solid black; padding: 8px;">Description</th>
                    <th style="border: 1px solid black; padding: 8px;">Date de création</th>
                    <th style="border: 1px solid black; padding: 8px;">Statut</th>
                </tr>
              </thead>';
    $html .= '<tbody>';
    foreach ($reclamations as $reclamation) {
        $html .= '<tr>
                    <td style="border: 1px solid black; padding: 8px;">' . $reclamation->subject . '</td>
                    <td style="border: 1px solid black; padding: 8px;">' . $reclamation->description . '</td>
                    <td style="border: 1px solid black; padding: 8px;">' . $reclamation->created_at->format('d/m/Y') . '</td>
                    <td style="border: 1px solid black; padding: 8px;">' . ucfirst($reclamation->status) . '</td>
                  </tr>';
    }
    $html .= '</tbody>';
    $html .= '</table>';

    $pdf = PDF::loadHTML($html);

    return $pdf->download('reclamations_' . $centre->name . '.pdf');
}
}