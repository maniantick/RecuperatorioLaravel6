<?php
Auth::routes();
Route::get('/', function (){
    return view('home');
});
Route::get('/peliculas', function (){
    return view('peliculas');
});
Route::get('/editarpelicula', function (){
    return view('editarpelicula');
});
Route::get('/peliculas', 'PeliculasController@listar');
Route::post('/editarpelicula', 'PeliculasController@editar');
Route::get('/generos', function (){
    return view('generos');
});
Route::get('/actores', function (){
    return view('actores');
});
Route::get('/crearactor', function (){
    return view('crearactor');
});
Route::post('/crearactor', 'ActoresController@agregar');
Route::get('/actores', 'ActoresController@listar');
