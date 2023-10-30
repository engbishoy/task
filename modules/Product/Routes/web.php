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

Route::group(['prefix' => LaravelLocalization::setLocale(),'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]], function(){

Route::group(['prefix' => 'dashboard', 'middleware' => 'auth:dashboard'], function () {

    // other routes
    Route::group(['prefix' => 'products', 'as' => 'product.'], function () {

        //the grouped operations (declare them before resource routes to avoid conflicts)
        Route::delete('delete-many', [Modules\Product\Http\Controllers\ProductController::class, 'destroyMany'])
            ->name('destroy.many');

        Route::get('ajax/datatable', ProductDatatableController::class)
            ->name('datatable');

        //Model Resources routes
        //didn't use resource to have the ability to attach permission middleware to each route
        // avoid using middlewares inside of controllers keep this structure maintained
        Route::get('/', [Modules\Product\Http\Controllers\ProductController::class, 'index'])
            ->name('index');

        Route::post('/', [Modules\Product\Http\Controllers\ProductController::class, 'store'])
            ->name('store');

        Route::get('create', [Modules\Product\Http\Controllers\ProductController::class, 'create'])
            ->name('create');

        Route::put('{product}', [Modules\Product\Http\Controllers\ProductController::class, 'update'])
            ->name('update');

        Route::get('{product}/edit', [Modules\Product\Http\Controllers\ProductController::class, 'edit'])
            ->name('edit');

        Route::delete('{product}', [Modules\Product\Http\Controllers\ProductController::class, 'destroy'])
            ->name('destroy');




        // trashed routes
        Route::group(['prefix' => 'trashed', 'as' => 'trashed.', 'namespace' => 'Trashed'], function () {
            //the grouped operations (declare them before resource routes to avoid conflicts)
            Route::delete('/delete-many', [Modules\Product\Http\Controllers\Trashed\ProductTrashedController::class, 'destroyMany'])
                ->name('destroy.many');

            Route::post('/restore-many', [Modules\Product\Http\Controllers\Trashed\ProductTrashedController::class, 'restoreMany'])
                ->name('restore.many');

            // trashed resource operation
            Route::delete('/{product}', [Modules\Product\Http\Controllers\Trashed\ProductTrashedController::class, 'destroy'])
                ->name('destroy');

            Route::post('/{product}', [Modules\Product\Http\Controllers\Trashed\ProductTrashedController::class, 'restore'])
                ->name('restore');

            Route::get('/ajax/datatable', ProductTrashedDataTableController::class)
                ->name('datatable');
        });
    });
});

});

