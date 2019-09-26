<?php

//Filtro para deterinar acesso a x parte do sistema//
Route::group(['namespace' => 'Site', 'middleware' => 'auth'], function(){
    Route::get('index', 'SiteController@index'); /*-middleware('auth');  pode também ser passado string e arrays, varios*/
    Route::get('contato', 'SiteController@contato');
    Route::get('/categoria/{id}', 'SiteController@categoria');
    Route::get('/categoria2/{id?}', 'SiteController@categoriaOp');
});


//Rota Home//
Route::get('/', function () {
    return view('welcome');
});
