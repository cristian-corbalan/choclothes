<?php

use Illuminate\Support\Facades\Route;

Route::get('/',[\App\Http\Controllers\StaticController::class,'index'])
    -> name ('index');
Route::get('/contacto',[\App\Http\Controllers\StaticController::class,'contact'])
    ->name('contact');
Route::get('/lo-nuevo',[\App\Http\Controllers\StaticController::class,'newIn'])
    ->name('newIn');
Route::get('/catalogo',[\App\Http\Controllers\ProductsController::class,'products'])
    ->name('products.products');

//--------> Crear Producto

Route::get('/tarjetas/crear',[\App\Http\Controllers\ProductsController::class,'createProducts'])
    ->name('products.create')
    ->middleware('auth');
Route::post('/tarjetas/crear',[\App\Http\Controllers\ProductsController::class,'createAccionProducts'])
    ->name('products.createaccionproducts')
    ->middleware('auth');

//--------> Datos del Producto

Route::get('/tarjetas/{id}',[\App\Http\Controllers\ProductsController::class,'cards'])
    ->name('products.products')
    ->whereNumber('id');

Route::get('/tarjetas/{id}',[\App\Http\Controllers\ProductsController::class,'cards'])
    ->name('products.cards')
    ->whereNumber('id');

//--------> Eliminar un Producto

Route::get('/tarjetas/{id}/eliminar',[\App\Http\Controllers\ProductsController::class,'deleteProductsForm'])
    ->name('products.deleteproductsform')
    ->whereNumber('id')
    ->middleware('auth');
Route::post('/tarjetas/{id}/eliminar',[\App\Http\Controllers\ProductsController::class,'deleteAccionProducts'])
    ->name('products.deleteaccionproducts')
    ->whereNumber('id')
    ->middleware('auth');

//--------> Editar un Producto


Route::get('/tarjetas/{id}/editar',[\App\Http\Controllers\ProductsController::class,'editProductsForm'])
    ->name('products.editproductsform')
    ->whereNumber('id')
    ->middleware('auth');

Route::post('/tarjetas/{id}/editar',[\App\Http\Controllers\ProductsController::class,'editAccionProducts'])
    ->name('products.editaccionproducts')
    ->whereNumber('id')
    ->middleware('auth');

//--------> Login usuarios

Route::get('/inicio-sesion', [\App\Http\Controllers\AuthController::class, 'loginForm'])
    ->name('auth.loginForm');
Route::post('/inicio-sesion', [\App\Http\Controllers\AuthController::class, 'loginAccion'])
    ->name('auth.loginAccion');
Route::post('/cierro-sesion', [\App\Http\Controllers\AuthController::class, 'logoutAccion'])
    ->name('auth.logoutAccion');


//--------> Datos de colores

Route::get('/color/{id}',[\App\Http\Controllers\ColorsController::class,'colors'])
    ->name('colors.colorsProducts')
    ->whereNumber('id');
