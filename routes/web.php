<?php

Route::get('/', function () {
    return redirect('/home');
});

// Authentication Routes...
$this->get('login', 'Auth\LoginController@showLoginForm')->name('auth.login');
$this->post('login', 'Auth\LoginController@login')->name('auth.login');
$this->post('logout', 'Auth\LoginController@logout')->name('auth.logout');

Route::group(['middleware' => 'auth'], function () {
Route::get('/home', 'HomeController@index');

//Rutas de los Controladores
//
 Route::resource('users', 'UsersController');
 Route::resource('clientes', 'ClientesController');
 Route::resource('user_actions', 'UserActionsController');
 Route::get('clientes/{id}','ClientesController@show');  
 
  
 

});