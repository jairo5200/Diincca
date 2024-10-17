<?php

use App\Http\Controllers\PageController;
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

Route::controller(PageController::class)->group(function (){
    //enrutamiento hacia la pagina index
    Route::get('/', 'inicio')->name('inicio');
    Route::get('/productos', 'productos')->name('productos');
    Route::get('/nosotros', 'nosotros')->name('nosotros');
    Route::get('/contactanos', 'contactanos')->name('contactanos');

});
