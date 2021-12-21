<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use App\Mail\reclamacionesMailable;

Route::get('/', 'productsController@principal')->name('home');

Route::get('/cargar/productos', 'productsController@cargarProductos')->name('cargarProductos');
Route::post('/cargaProducts', 'productsController@cargaProducts')->name('cargaProducts');
Route::get('/stockcero', 'productsController@stockcero')->name('stockcero');

Route::get('/cargar/categorias', 'categoriaController@cargarCategorias')->name('cargarCategorias');
Route::post('/cargaCategory', 'categoriaController@cargaCategory')->name('cargaCategory');

Route::post('/actualizarTipoCambio', 'tipoCambioController@actualizarTipoCambio')->name('actualizarTipoCambio');


Route::get('/reclamaciones', 'reclamacionesController@index')->name('index');
Route::post('/envioReclamacion', 'reclamacionesController@envioReclamacion')->name('envioReclamacion');

Route::get('/cargarpdf', 'reclamacionesController@cargarpdf')->name('cargarpdf');


// Route::get('/email', function(){
//     $correo = new reclamacionesMailable;
//     Mail::to('jean.f.ponte.solis@gmail.com')->send($correo);
//     return "Mensaje Enviado";
// });
