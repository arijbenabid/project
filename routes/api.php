<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BuildingController;



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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Admin


Route::post('/addadmin',[AdminController::class,'addAdmin']);

/** Routes for Building **/
Route::get('/listbuildings', [BuildingController::class, 'listBuildings']);
Route::post('/addbuilding', [BuildingController::class, 'addBuilding']);
Route::get('/getbuilding/{building_id}', [BuildingController::class, 'getBuilding']);





