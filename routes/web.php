<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TicketsController;
//

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

Route::get('/login', function () {
    return view('auth.register');
})->name('login');

Route::get('/', function () {
    return view('auth.register');
});

// Route::get('/dashboard', [TicketsController::class, 'index']);
Route::resource('tickets', TicketsController::class)->middleware('auth');
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', [TicketsController::class, 'index'])->name('dashboard');
// route pour la page delete
Route::get('/destroy/{id}', [TicketsController::class, 'destroy'])->name('destroy');
//faire une route pour la page app.blade.php dans le repertoire pages
Route::get('/pages/app', function () {
    return view('pages.app');
});

// ajouter un route qui redirige vers la page dashboard quand on accede a /login ou /register quand on est connecte a l'aide de la methode auth
Route::group(['middleware' => 'auth'], function () {
    Route::get('/login', function () {
        return redirect('/dashboard');
    });
    Route::get('/', function () {
        return redirect('/dashboard');
    });
});







