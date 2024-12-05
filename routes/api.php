<?php 

use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::group([ 'middleware' => 'api', 'prefix' => 'auth'], function ($router) {
    Route::post('register', 'Auth\RegisterController@register');
    Route::post('login', 'AuthController@login');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('me', 'AuthController@me');

    Route::group(['middleware' => 'jwt.auth'], function () {
        Route::group(['prefix' => 'building', 'namespace' => 'Building'], function (){
            Route::get('/', 'IndexController');
            Route::post('/store', 'StoreController')->middleware('admin');
            Route::get('/{building}', 'ShowController');
            Route::patch('/{building}', 'UpdateController')->middleware('admin');
            Route::delete('/{building}', 'DestroyController')->middleware('admin');
        });
        Route::group(['prefix' => 'cabinet_type', 'namespace' => 'CabinetType'], function (){
            Route::get('/', 'IndexController');
            Route::post('/store', 'StoreController')->middleware('admin');
            Route::get('/{cabinet_type}', 'ShowController');
            Route::patch('/{cabinet_type}', 'UpdateController')->middleware('admin');
            Route::delete('/{cabinet_type}', 'DestroyController')->middleware('admin');
        });
        Route::group(['prefix' => 'cabinet', 'namespace' => 'Cabinet'], function (){
            Route::get('/', 'IndexController');
            Route::post('/store', 'StoreController')->middleware('admin');
            Route::get('/{cabinet}', 'ShowController');
            Route::patch('/{cabinet}', 'UpdateController')->middleware('admin');
            Route::delete('/{cabinet}', 'DestroyController')->middleware('admin');
        });
        Route::group(['prefix' => 'equipment_type', 'namespace' => 'EquipmentType'], function (){
            Route::get('/', 'IndexController');
            Route::post('/store', 'StoreController')->middleware('admin');
            Route::get('/{type_equipment}', 'ShowController');
            Route::patch('/{type_equipment}', 'UpdateController')->middleware('admin');
            Route::delete('/{type_equipment}', 'DestroyController')->middleware('admin');
        });
        Route::group(['prefix' => 'equipment_brand', 'namespace' => 'Brand'], function (){
            Route::get('/', 'IndexController');
            Route::post('/store', 'StoreController')->middleware('admin');
            Route::get('/{equipment_brand}', 'ShowController');
            Route::patch('/{equipment_brand}', 'UpdateController')->middleware('admin');
            Route::delete('/{equipment_brand}', 'DestroyController')->middleware('admin');
        });
        Route::group(['prefix' => 'equipment_model', 'namespace' => 'Model'], function (){
            Route::get('/', 'IndexController');
            Route::post('/store', 'StoreController')->middleware('admin');
            Route::get('/{model_equipment}', 'ShowController');
            Route::patch('/{model_equipment}', 'UpdateController')->middleware('admin');
            Route::delete('/{model_equipment}', 'DestroyController')->middleware('admin');
        });
        Route::group(['prefix' => 'equipment', 'namespace' => 'Equipment'], function (){
            Route::get('/', 'IndexController');
            Route::post('/store', 'StoreController')->middleware('admin');
            Route::get('/{equipment}', 'ShowController');
            Route::patch('/{equipment}', 'UpdateController')->middleware('admin');
            Route::delete('/{equipment}', 'DestroyController')->middleware('admin');
        });
        Route::group(['prefix' => 'furniture_type', 'namespace' => 'FurnitureType'], function (){
            Route::get('/', 'IndexController');
            Route::post('/store', 'StoreController')->middleware('admin');
            Route::get('/{furniture_type}', 'ShowController');
            Route::patch('/{furniture_type}', 'UpdateController')->middleware('admin');
            Route::delete('/{furniture_type}', 'DestroyController')->middleware('admin');
        });
        Route::group(['prefix' => 'furniture', 'namespace' => 'Furniture'], function (){
            Route::get('/', 'IndexController');
            Route::post('/store', 'StoreController')->middleware('admin');
            Route::get('/{furniture}', 'ShowController');
            Route::patch('/{furniture}', 'UpdateController')->middleware('admin');
            Route::delete('/{furniture}', 'DestroyController')->middleware('admin');
        });
    });
});


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
