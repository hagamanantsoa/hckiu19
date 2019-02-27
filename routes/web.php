<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/ajout_domaines', function() {
    return view('ajout_domaines');
});

Route::post('/ajout_domaines', function(){
    $domaine = new App\Domaine;
    $domaine->domaineuniversite_libelle = request('libelle');
    $domaine->save();
    return "Nous avons bien enregistré votre nom de domaine qui est: " . request('libelle');
    return "L'ajout de domaine est un succès!";
});

Route::get('/domaines', function() {
    $domaines = App\Domaine::all();
    return view('domaines', [
        'domaines' => $domaines
    ]);
});