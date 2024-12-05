<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', '\App\Http\Controllers\Admin\IndexController');

Route::group(['prefix' => 'building', 'namespace' => '\App\Http\Controllers\Admin\Building'], function (){
    Route::get('/', 'IndexController')->name('building.index');
    Route::get('/create', 'CreateController')->name('building.create');
    Route::post('/store', 'StoreController')->name('building.store');
    Route::get('/{building}', 'ShowController')->name('building.show');
    Route::get('/{building}/edit', 'EditController')->name('building.edit');
    Route::patch('/{building}', 'UpdateController')->name('building.update');
    Route::delete('/{building}', 'DestroyController')->name('building.destroy');
});

Route::group(['prefix' => 'cabinet_type', 'namespace' => '\App\Http\Controllers\Admin\CabinetType'], function (){
    Route::get('/', 'IndexController')->name('cabinetType.index');
    Route::get('/create', 'CreateController')->name('cabinetType.create');
    Route::post('/store', 'StoreController')->name('cabinetType.store');
    Route::get('/{cabinet_type}', 'ShowController')->name('cabinetType.show');
    Route::get('/{cabinet_type}/edit', 'EditController')->name('cabinetType.edit');
    Route::patch('/{cabinet_type}', 'UpdateController')->name('cabinetType.update');
    Route::delete('/{cabinet_type}', 'DestroyController')->name('cabinetType.destroy');
});

Route::group(['prefix' => 'cabinet', 'namespace' => '\App\Http\Controllers\Admin\Cabinet'], function (){
    Route::get('/', 'IndexController')->name('cabinet.index');
    Route::get('/create', 'CreateController')->name('cabinet.create');
    Route::post('/store', 'StoreController')->name('cabinet.store');
    Route::get('/{cabinet}', 'ShowController')->name('cabinet.show');
    Route::get('/{cabinet}/edit', 'EditController')->name('cabinet.edit');
    Route::patch('/{cabinet}', 'UpdateController')->name('cabinet.update');
    Route::delete('/{cabinet}', 'DestroyController')->name('cabinet.destroy');
});

Route::group(['prefix' => 'equipment_type', 'namespace' => '\App\Http\Controllers\Admin\EquipmentType'], function (){
    Route::get('/', 'IndexController')->name('equipmentType.index');
    Route::get('/create', 'CreateController')->name('equipmentType.create');
    Route::post('/store', 'StoreController')->name('equipmentType.store');
    Route::get('/{type_equipment}', 'ShowController')->name('equipmentType.show');
    Route::get('/{type_equipment}/edit', 'EditController')->name('equipmentType.edit');
    Route::patch('/{type_equipment}', 'UpdateController')->name('equipmentType.update');
    Route::delete('/{type_equipment}', 'DestroyController')->name('equipmentType.destroy');
});

Route::group(['prefix' => 'brand', 'namespace' => '\App\Http\Controllers\Admin\Brand'], function (){
    Route::get('/', 'IndexController')->name('brand.index');
    Route::get('/create', 'CreateController')->name('brand.create');
    Route::post('/store', 'StoreController')->name('brand.store');
    Route::get('/{brand}', 'ShowController')->name('brand.show');
    Route::get('/{brand}/edit', 'EditController')->name('brand.edit');
    Route::patch('/{brand}', 'UpdateController')->name('brand.update');
    Route::delete('/{brand}', 'DestroyController')->name('brand.destroy');
});

Route::group(['prefix' => 'model', 'namespace' => '\App\Http\Controllers\Admin\Model'], function (){
    Route::get('/', 'IndexController')->name('model.index');
    Route::get('/create', 'CreateController')->name('model.create');
    Route::post('/store', 'StoreController')->name('model.store');
    Route::get('/{model_equipment}', 'ShowController')->name('model.show');
    Route::get('/{model_equipment}/edit', 'EditController')->name('model.edit');
    Route::patch('/{model_equipment}', 'UpdateController')->name('model.update');
    Route::delete('/{model_equipment}', 'DestroyController')->name('model.destroy');
});

Route::group(['prefix' => 'equipment', 'namespace' => '\App\Http\Controllers\Admin\Equipment'], function (){
    Route::get('/', 'IndexController')->name('equipment.index');
    Route::get('/create', 'CreateController')->name('equipment.create');
    Route::post('/store', 'StoreController')->name('equipment.store');
    Route::get('/{equipment}', 'ShowController')->name('equipment.show');
    Route::get('/{equipment}/edit', 'EditController')->name('equipment.edit');
    Route::patch('/{equipment}', 'UpdateController')->name('equipment.update');
    Route::delete('/{equipment}', 'DestroyController')->name('equipment.destroy');
});

Route::group(['prefix' => 'furniture_type', 'namespace' => '\App\Http\Controllers\Admin\FurnitureType'], function (){
    Route::get('/', 'IndexController')->name('furnitureType.index');
    Route::get('/create', 'CreateController')->name('furnitureType.create');
    Route::post('/store', 'StoreController')->name('furnitureType.store');
    Route::get('/{furniture_type}', 'ShowController')->name('furnitureType.show');
    Route::get('/{furniture_type}/edit', 'EditController')->name('furnitureType.edit');
    Route::patch('/{furniture_type}', 'UpdateController')->name('furnitureType.update');
    Route::delete('/{furniture_type}', 'DestroyController')->name('furnitureType.destroy');
});

Route::group(['prefix' => 'furniture', 'namespace' => '\App\Http\Controllers\Admin\Furniture'], function (){
    Route::get('/', 'IndexController')->name('furniture.index');
    Route::get('/create', 'CreateController')->name('furniture.create');
    Route::post('/store', 'StoreController')->name('furniture.store');
    Route::get('/{furniture}', 'ShowController')->name('furniture.show');
    Route::get('/{furniture}/edit', 'EditController')->name('furniture.edit');
    Route::patch('/{furniture}', 'UpdateController')->name('furniture.update');
    Route::delete('/{furniture}', 'DestroyController')->name('furniture.destroy');
});

Auth::routes();

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
