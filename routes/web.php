<?php

use Illuminate\Support\Facades\Route;

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

// HOME route
Route::get('/', function () {
    return view('home');
})->name('home');

// ABOUT route
Route::get('/about', function () {
    $data = [
        'title' => 'Descrizione della vita',
        'description' => "Questa è la maxi-storia di come la mia vita cambiata, capovolta, sottosopra sia finita seduto su due piedi qui con te ti parlerò di Willy superfico di Bel Air, Giocando a basket con gli amici sono cresciuto me la sono spassata, wow che fissa ogni minuto le mie toste giornate filavano così tra un megatiro a canestro e un film di Spike Lee. Poi la mia palla lanciata un po' più in su andò proprio sulla testa di quei vichinghi laggiù il più duro si imballò, fece una trottola di me e la mia mamma preoccupata disse \"Vattene a Bel Air\"; L'ho pregata scongiurata ma dallo zio vuole che vada lei mi ha fatto le valige e ha detto \"Va' per la tua strada\" dopo avermi dato un bacio e un biglietto per partire con lo stereo nelle orecchie ho detto \"Qua meglio sgommare\" ; Prima classe, ma è uno sballo spremute d'arancia in bicchieri di cristallo se questa è la vita che fanno a Bel Air per me poi tanto male non è; Ho chiamato un taxi giallo col mio fischio collaudato come in formula 1 mi sentivo gasato una vita tutta nuova sta esplodendo per me avanti a tutta forza portami a Bel Air; Oh che sventola di casa, mi sento già straricco la vita di prima mi puzza di vecchio guardate adesso gente in pista chi c'è il principe Willy lo svitato di Bel Air."
    ];
    return view('about', $data);
})->name('about');

// CONTACTS route
Route::get('/contacts', function () {
    $data = [
        'title' => 'Contatti',
        'contacts' => [
            'Email' => 'rizza.matteo96@gmail.com',
            'Telefono' => '+39 1234567890',
            'Indirizzo' => 'Via Roma 1, Vicenza'
        ]
    ];
    return view('contacts', $data);
})->name('contacts');
