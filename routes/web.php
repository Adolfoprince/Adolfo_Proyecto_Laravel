<?php

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
    return view('portal.dashboard');
});



Route::get('admin' , function(){

	return view('admin.dashboard');

});

Route::get('/compradores', function (){
	//
	return view('compradores');
});

Route::post('/comprador', function (Request $request){


	$compradores = new compradores;
	$compradores->name = $request->name;
	$compradores->name = $request->apellido;
	$compradores->name = $request->cedula;
	$compradores->name = $request->direccion;
	$compradores->save();

	return redirect('/compradores');

});

Route::delete('/comprador/{id}', function ($id){

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
