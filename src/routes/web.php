<?php

use Illuminate\Support\Facades\Route;
use Livewire\Livewire;

// NOTE: Do not remove Livewire asset handling if using subfolder in domain
Livewire::setUpdateRoute(function ($handle) {
    return Route::post(config('app.asset_prefix') . '/livewire/update', $handle);
});

Livewire::setScriptRoute(function ($handle) {
    return Route::get(config('app.asset_prefix') . '/livewire/livewire.js', $handle);
});

/*
 * END: Livewire routes
 */

// Default Route
Route::get('/', function () {
    return view('welcome');
});

// Route for Swagger UI documentation
Route::get('api/documentation', function () {
    return view('swagger');
});

// Route for serving the swagger.json file
Route::get('api/docs-json', function () {
    // Fetch the swagger.json file from the public folder
    return response()->json(json_decode(file_get_contents(public_path('swagger.json'))));
});


