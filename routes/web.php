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
// route pour la page show



