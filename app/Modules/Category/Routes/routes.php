<?php

$namespace = 'App\Modules\Category\Controllers';

Route::group(
    ['module'=>'Category', 'namespace' => $namespace],
    function() {
        Route::get('category', [
            # middle here
            'as' => 'index',
            'uses' => 'CategoryController@index'
        ]);
    }
);