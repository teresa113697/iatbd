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

Route::middleware(['auth', 'blocked'])->group(function() {
    Route::get('/huisdieren', [\App\Http\Controllers\HuisdierController::class, 'index']);
    Route::get('/huisdier/{id}', [\App\Http\Controllers\HuisdierController::class, 'show']);

    Route::get('/oppassers', [\App\Http\Controllers\UserController::class, 'index']);
    Route::get('/oppas/{id}', [\App\Http\Controllers\UserController::class, 'showOppas']);

    Route::get('/aanvragen', [\App\Http\Controllers\AanvraagController::class, 'index']);
    Route::get('/aanvraag/{id}', [\App\Http\Controllers\AanvraagController::class, 'show']);
    Route::post('/create/aanvraag', [\App\Http\Controllers\AanvraagController::class, 'plaatsAanvraag']);
    Route::post('/aanvraag/update', [\App\Http\Controllers\AanvraagController::class, 'update']);
    Route::post('/aanvraag/remove', [\App\Http\Controllers\AanvraagController::class, 'remove']);

    Route::get('/create/huisdier', [\App\Http\Controllers\HuisdierController::class, 'showForm']);
    Route::post('/huisdier', [\App\Http\Controllers\HuisdierController::class, 'store']);
    Route::post('/huisdier/remove', [\App\Http\Controllers\HuisdierController::class, 'remove']);

    Route::get('/create/oppas', [\App\Http\Controllers\UserController::class, 'showForm']);
    Route::post('/oppas', [\App\Http\Controllers\UserController::class, 'update']);
    Route::post('/oppas/remove', [\App\Http\Controllers\UserController::class, 'remove']);

    Route::get('/create/comment/{oppas_id}/{aanvraag_id}', [\App\Http\Controllers\AanvraagController::class, 'showCommentForm']);
    Route::post('/comment/{oppas_id}', [\App\Http\Controllers\AanvraagController::class, 'plaatsComment']);
});

Route::get('/blocked', function () {
    return view('blocked');
});

Route::get('/', function () {
    return redirect('/huisdieren');
});

Route::get('/dashboard', function () {
    return redirect('/huisdieren');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
