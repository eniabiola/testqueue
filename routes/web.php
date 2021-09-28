<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GenerateDummyController;


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
    return view('queue');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::post('/generatedummytest', [GenerateDummyController::class, 'generateData'])
->name('generateData');
require __DIR__.'/auth.php';
