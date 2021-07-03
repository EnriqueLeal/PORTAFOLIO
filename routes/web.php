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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('saludos/{nombre?}', function($nombre = 'Guest'){
// return 'SALUDOS!'.' '.$nombre;
// });

// Route::get('contactanos', function(){
// 	return 'Sección de contactos';
// })->name('contactos');

// Route::get('/', function(){
// 	echo "<a href = '".route('contactos')."' >Contactos 1#</a>";
// });
// Route::get("/",function(){

// return view('home')->with('nombre' => $nombre);
// })->name('Inicio');

Route::view("/", 'home')->name('home');
Route::view("/about", 'about')->name('about');
Route::view("/portafolio", 'portafolio',compact('portafolio'))->name('portafolio');

Route::get('/portafolio','PortfolioController@index')->name('portafolio');

Route::view("/contact", 'contact')->name('contact');

// Route::resource('projects', 'PortfolioController')->only(['index','show']);
// Route::resource('projects', 'PortfolioController')->except(['index','show']);