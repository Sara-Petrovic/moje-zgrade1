<?php

use App\Http\Controllers\ZgradeControler;
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
    return view('welcome');
});


Route::middleware(['auth:sanctum', 'verified'])->group(function(){
    Route::get('/dashboard', [ZgradeControler::class, 'index'])->name('dashboard');

    Route::get('/zgrada', [ZgradeControler::class, 'add']); //prikazuje se forma za dodavanje i otvara se, pa kad se klikne ide se create post zahtev
    Route::post('/zgrada', [ZgradeControler::class, 'create']);

    Route::get('/zgrada/{zgrada}', [ZgradeControler::class, 'edit']); //edit pa otvaram prozor , a update posle toga kao post zahtev da se to sacuva
    Route::post('/zgrada/{zgrada}', [ZgradeControler::class, 'update']);
    //delete imam kao dugme ne treba ruta

});