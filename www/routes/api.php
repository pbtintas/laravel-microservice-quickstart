<?php

use Illuminate\Http\Request;


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['namespace' => 'Api'], function () {
    Route::resource('categories', 'CategoryController', ['except' => ['create', 'edit']]);
    Route::resource('cars', 'CarController', ['except' => ['create', 'edit']]);
    Route::resource('montadoras', 'MontadoraController', ['except' => ['create', 'edit']]);
    Route::resource('marcas', 'MarcaController', ['except' => ['create', 'edit']]);
    Route::resource('brands', 'BrandController', ['except' => ['create', 'edit']]);
});
