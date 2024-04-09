<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

//front roures

Route::prefix('/')->name('front.')->group(function (){

    //=======Route index
Route::view('','front.index')->name('index');

    //=======Route About
Route::view('about','front.about')->name('about');
    //=======Route contact
Route::view('contact','front.contact')->name('contact');
    //=======Route project
Route::view('project','front.project')->name('project');
    //=======Route services
Route::view('services','front.services')->name('services');
    //=======Route testmonial
Route::view('testmonial','front.testmonial')->name('testmonial');
    //=======Route team
Route::view('team','front.team')->name('team');

});
