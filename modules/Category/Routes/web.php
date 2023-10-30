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

Route::group(['prefix' => 'dashboard', 'middleware' => 'auth:dashboard'], function(){

    // other routes
    Route::group(['prefix' => 'categories', 'as' => 'category.'], function(){

        //the grouped operations (declare them before resource routes to avoid conflicts)
        Route::delete('delete-many', [Modules\Category\Http\Controllers\CategoryController::class, 'destroyMany'])
        ->name('destroy.many');

        Route::get('ajax/datatable', CategoryDatatableController::class)
            ->name('datatable');

        //Model Resources routes
        //didn't use resource to have the ability to attach permission middleware to each route
        // avoid using middlewares inside of controllers keep this structure maintained
        Route::get('/',[Modules\Category\Http\Controllers\CategoryController::class, 'index'])
            ->name('index');
        
        Route::post('/',[Modules\Category\Http\Controllers\CategoryController::class, 'store'])
            ->name('store');

        Route::get('create',[Modules\Category\Http\Controllers\CategoryController::class, 'create'])
            ->name('create');

        Route::put('{category}',[Modules\Category\Http\Controllers\CategoryController::class, 'update'])
            ->name('update');

        Route::get('{category}/edit',[Modules\Category\Http\Controllers\CategoryController::class, 'edit'])
            ->name('edit');

        Route::delete('{category}',[Modules\Category\Http\Controllers\CategoryController::class, 'destroy'])
            ->name('destroy');

            
        // trashed routes
        Route::group(['prefix' => 'trashed', 'as' => 'trashed.', 'namespace' => 'Trashed'], function(){
            //the grouped operations (declare them before resource routes to avoid conflicts)
            Route::delete('/delete-many', [Modules\Category\Http\Controllers\Trashed\CategoryTrashedController::class, 'destroyMany'])
                ->name('destroy.many');

            Route::post('/restore-many', [Modules\Category\Http\Controllers\Trashed\CategoryTrashedController::class, 'restoreMany'])
                ->name('restore.many');

            // trashed resource operation
            Route::delete('/{category}', [Modules\Category\Http\Controllers\Trashed\CategoryTrashedController::class, 'destroy'])
                ->name('destroy');

            Route::post('/{category}', [Modules\Category\Http\Controllers\Trashed\CategoryTrashedController::class, 'restore'])
                ->name('restore');

            Route::get('/ajax/datatable', CategoryTrashedDataTableController::class)
                ->name('datatable');
        });

    });
});

});


