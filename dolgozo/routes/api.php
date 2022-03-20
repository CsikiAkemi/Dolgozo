<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get( "/uj-dolgozo", [ WorkerController::class, "add_dolgozo" ]);
Route::post( "/tarol-dolgozo", [WorkerController::class, "storeDolgozo" ]);
Route::post( "/kiir-dolgozo", [ WorkerController::class, "selectDolgozo" ]);

Route::get( "/", function() {
    return view( "welcome" );
});