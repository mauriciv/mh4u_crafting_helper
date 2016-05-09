<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('weapons', 'WeaponsController@index');
Route::get('items', 'ItemsController@index');
