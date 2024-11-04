<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EquipementController;
use App\Http\Controllers\CampagneSensibilisationController; 
use App\Http\Controllers\PlanningController;
use App\Http\Controllers\AvisController; 
use App\Http\Controllers\DechetController;
use App\Http\Controllers\CentreRecyclageController;
use App\Http\Controllers\ZoneCollecteController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\ReclamationController;
use App\Http\Controllers\CollecteEvenementController;
use App\Http\Controllers\RapportController;

Route::get('/', function () {
    return view('landing');
})->name('landing');
Route::get('/landing', function () {
    return view('landing');
})->name('landing');

// Routes pour l'authentification
Route::get('/login', [AuthenticatedSessionController::class, 'create'])->name('login');
Route::post('/login', [AuthenticatedSessionController::class, 'store']);
Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');

Route::get('/register', [RegisteredUserController::class, 'create'])->name('register');
Route::post('/register', [RegisteredUserController::class, 'store']);

// Route pour la page d'accueil
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth']], function () {
    // Ressources pour les différentes entités
    Route::resource('equipement', EquipementController::class);
    Route::resource('zone-collectes', ZoneCollecteController::class);
    Route::resource('dechets', DechetController::class);
    Route::resource('planning', PlanningController::class);
    Route::resource('/collecte-evenements',App\Http\Controllers\CollecteEvenementController::class);
    Route::resource('/rapports',App\Http\Controllers\RapportController::class);
    Route::resource('centre-recyclage', CentreRecyclageController::class);
    // Routes pour l'affectation de l'équipement
    Route::get('equipement/{equipement}/affecter', [EquipementController::class, 'affecterPlanning'])->name('equipement.affecter');
    Route::post('equipement/{equipement}/affectation', [EquipementController::class, 'storeAffectation'])->name('equipement.storeAffectation');

    Route::get('/calendar', [PlanningController::class, 'showCalendar'])->name('calendar');

    // Routes pour les collectes et campagnes
    Route::resource('/collecte-evenements', CollecteEvenementController::class);
    Route::resource('/campagnes', CampagneSensibilisationController::class);
    
    // Routes pour les avis de campagne
    Route::prefix('campagnes/{campagne_id}')->group(function() {
        Route::get('avis', [AvisController::class, 'index'])->name('campagnes.avis.index');
        Route::get('avis/create', [AvisController::class, 'create'])->name('campagnes.avis.create');
        Route::post('avis', [AvisController::class, 'store'])->name('campagnes.avis.store');
        Route::get('avis/{id}', [AvisController::class, 'show'])->name('campagnes.avis.show');
        Route::get('avis/{id}/edit', [AvisController::class, 'edit'])->name('campagnes.avis.edit');
        Route::put('avis/{id}', [AvisController::class, 'update'])->name('campagnes.avis.update');
        Route::delete('avis/{id}', [AvisController::class, 'destroy'])->name('campagnes.avis.destroy');

        // Routes pour les réclamations et rapports dans un centre de recyclage
 
    });
    Route::resource('centre-recyclage/{centreId}/reclamation', ReclamationController::class);
    // Route::resource('centre-recyclage/{centreId}/rapports', RapportController::class);
    Route::get('/reclamation/export/{centreId}', [ReclamationController::class, 'export'])->name('reclamation.export');
});