<?php

use App\Http\Controllers\PersonController;
use App\Models\Person;
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

Route::get('/', function () {
    return view('people', [
        'people' => Person::all()
    ]);
});


Route::get('people/{person}', function ($id) {
    return view('person', [
        'person' => Person::findOrFail($id)
    ]);
});

Route::get('/add-person',  [PersonController::class, 'addPerson']);

Route::post('/create-person',  [PersonController::class, 'createPerson'])->name('person.create');

Route::get('/delete-person/{id}',  [PersonController::class, 'deletePerson']);

Route::get('/edit-person/{id}',  [PersonController::class, 'editPerson']);

Route::post('/update-person',  [PersonController::class, 'updatePerson'])->name('person.update');

Route::get('/', [PersonController::class,'index'])->name('home');