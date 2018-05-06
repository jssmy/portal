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

Route::get('/', function () {
    return redirect('board');
});






Route::auth();

Route::get('/home', 'HomeController@index');


/****   acceso a usuarios autenticados   **********/
Route::get('/board',[
    'as' => 'board',
    'uses'=>'HomeController@board'
    ]);

Route::get('/asig', [
    'as' => 'asig', 'uses' => 'HomeController@asig'
]);


Route::get('api/trazabilidad',[
    'as'=>'api.traza',
    'uses'=>'ApiController@index'
    ]);
    
Route::post('api/insert/asig-indivual',[
    'uses'=>'ApiController@insertAsignacionIndividual',
    'as'=>'api.insert.asig.indivual'
    ]);
    
/****************/
Route::get('reclamos',[
    'uses'=>'ReclamoSimpleController@index',
    'as'=>'reclamos.index'
    ]);
    
    
    
Route::get('detalles-reclamo/{reclamo_numero}',[
    'uses'=>'ReclamoSimpleController@details',
    'as'=>'reclamo.details'
    
    ]);

Route::get('crear-carta/{numero}',[
    'uses'=>'ReclamoSimpleController@make_letter',
    'as'=>'make.letter'

]);
/****  crear cartas ****/

Route::get('cartas',[
    'uses'=>'CartaController@index',
    'as'=>'carta.index'
    ]);

Route::post('cartas/reclamo/{reclamo_numero}/store',[
    'uses'=>'CartaController@store',
    'as'=>'carta.store'
    ]);
Route::get('ver-carta',[
    'uses'=>'CartaController@show',
    'as'=>'carta.show'
    ]);

Route::get('pdf',[
    'uses'=>'ReclamoSimpleController@convert_pdf',
    'as'=>'convert.pdf'
]);

/****** modelos de carta ***********/


Route::get('modelos',[
    'uses'=>'ModeloCartaController@index',
    'as'=>'modelo.index'
    ]);
    
Route::get('editar-modelo/{numero}',[
    'uses'=>'ModeloCartaController@edit',
    'as'=>'modelo.edit'
]);

Route::get('ver-modelo/{numero}',[
    'uses'=>'ModeloCartaController@show',
    'as'=>'modelo.show'
    
    ]);
    
Route::get('crear-modelo',[
    'uses'=>'ModeloCartaController@create',
    'as'=>'modelo.create'
    ]);

Route::post('guardar-modelo',[
    'uses'=>'ModeloCartaController@store',
    'as'=>'modelo.store'
]);

Route::post('modificar-modelo',[
    'uses'=>'ModeloCartaController@update',
    'as'=>'modelo.update'
]); 


Route::get('api/modelos/resultado/{resultado}',[
    'uses'=>'ModeloCartaController@api_modelos_resultado',
    'as'=>'api.modelos.resultado'
    ]);
    
Route::get('api/modelo/{id}',[
    'uses'=>'ModeloCartaController@api_modelos_resultado',
    'as'=>'api.modelos.resultado'
    ]);

Route::get('api/modelo/{id_modelo}/reclamo/{cod_reclamo}',[
    'uses'=>'ModeloCartaController@api_modelo_reclamo',
    'as'=>'api.modelo.reclamo'
    ]);
    
Route::get('api/modelo/resultado/{id_resultado}',[
    'uses'=>'ModeloCartaController@api_modelo_resultado',
    'as'=>'api.modelo.resultado'
    ]);
    
Route::get('carta', function(){
    
    return view('carta.create');
});



///bandejas masivas
Route::get('/bandejas',[
    'uses'=>'BandejaController@index',
    'as'=>'bandeja.index'
    ]);
    
Route::get('/bandeja/{id_bandeja}/modelo/{id_modelo}',[
        'uses'=>'BandejaController@add_modelo',
        'as'=>'bandeja.add.modelo'
    ]);

Route::get('/bandeja/{id_bandeja}/reclamo/{id_reclamo}',[
    'uses'=>'BandejaController@add_reclamo',
    'as'=>'bandeja.add.reclamo'
    ]);


Route::get('crear-bandeja',[
    'uses'=>'BandejaController@create',
    'as'=>'bandeja.create'
    ]);
    
Route::get('ver-bandeja/{id_bandeja}',[
    'uses'=>'BandejaController@details',
    'as'=>'bandeja.details'
    ]);
    
    
Route::post('bandeja-store',[
    'uses'=>'BandejaController@store',
    'as'=>'bandeja.store'
    ]);
    
    
    
Route::get('asignar-reclamos',[
    'uses'=>'ReclamoSimpleController@reclamos_asig',
    'as'=>'reclamos.asig'
    ]);
    
    
Route::get('html2pdf',[
    'uses'=>'Html2PdfController@index',
    'as'=>'html2pdf.index'
    ]);