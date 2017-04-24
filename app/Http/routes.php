<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'PageController@getIndex');

Route::get('Quienessomos', 'PageController@getQuienessomos');

Route::get('Servicios', 'PageController@getServicios');

Route::get('Noticias', 'PageController@getNoticias');

Route::get('Contacto', 'PageController@getContacto');

Route::get('Grupojca', 'PageController@getGrupojca');

Route::get('Megatecnica', 'PageController@getMegatecnica');

Route::get('EMTrealygrup', 'PageController@getEMTrealygrup');

Route::get('Invertia', 'PageController@getInvertia');

Route::get('Latinpro', 'PageController@getLatinpro');

Route::get('Garajesmega', 'PageController@getGarajesmega');

Route::get('Vitaefisio', 'PageController@getVitaefisio');

Route::get('Noticiavista', 'PageController@getNoticiavista');

Route::resource('Noticia','NoticiaController');

Route::auth();

//Route::get('/home', 'HomeController@index');
