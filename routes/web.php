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

use App\Http\Middleware\RedmineSession;

// route::get('/','PaginaWebController@index')->name('index');
route::get('/','PaginaWebController@indexZar')->name('indexZar');
route::get('menu','PaginaWebController@menu')->name('menu');
route::get('distribucion','PaginaWebController@distribucion')->name('distribucion');
route::get('nueva','PaginaWebController@nueva')->name('nueva');
route::get('menuNueva','PaginaWebController@menuNueva')->name('menuNueva');

route::get('admonLvl','SessionController@admonLvl')->name('admonLvl');
route::post('valida','SessionController@valida')->name('valida');

Route::middleware([RedmineSession::class])->group(function () {
    
route::get('closesesion','SessionController@closesesion')->name('closesesion');

route::get('inicioAdmin','AdminController@inicioAdmin')->name('inicioAdmin');

route::get('categorias','AdminController@categorias')->name('categorias');
route::post('saveCategoria','AdminController@saveCategoria')->name('saveCategoria');
route::get('modificarCategoria','AdminController@modificarCategoria')->name('modificarCategoria');
route::post('updateCategoria','AdminController@updateCategoria')->name('updateCategoria');
route::get('operacionesCategoria','AdminController@operacionesCategoria')->name('operacionesCategoria');

route::get('seccionPrecios','AdminController@seccionPrecios')->name('seccionPrecios');
route::get('seccionPreciosEdit','AdminController@seccionPreciosEdit')->name('seccionPreciosEdit');
route::post('saveProducto','AdminController@saveProducto')->name('saveProducto');
route::get('modificarProducto','AdminController@modificarProducto')->name('modificarProducto');
route::post('updateProducto','AdminController@updateProducto')->name('updateProducto');
route::get('operacionesProducto','AdminController@operacionesProducto')->name('operacionesProducto');
route::get('showImagen','AdminController@showImagen')->name('showImagen');

route::get('promociones','AdminController@promociones')->name('promociones');
route::post('savePromociones','AdminController@savePromociones')->name('savePromociones');
route::get('operacionesPromociones','AdminController@operacionesPromociones')->name('operacionesPromociones');

});