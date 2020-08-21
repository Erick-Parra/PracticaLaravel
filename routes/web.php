<?php

Route::view('/', 'home')->name('home');
Route::view('/quienes-somos', 'about')->name('about');

Route::get('/portafolio', 'ProjectController@index')->name('projects.index');
Route::get('/portafolio/{project}', 'ProjectController@show')->name('projects.show');


Route::view('/contacto', 'contact')->name('contact');
Route::post('contact', 'MensajeController@store')->name('messages.store');

// Route::resource('proyectos', 'PortfolioController');


//Route::get('/', function(){
//	$nombre = "Erick";
  // return view('home', compact('nombre'));
//})->name('home');


