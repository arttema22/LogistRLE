<?php

use App\Http\Controllers\DirectoryController;
use Illuminate\Support\Facades\Route;

// Типы грузовиков
Route::get('/type-trucks', [DirectoryController::class, 'type_trucks'])->name('type-trucks');
Route::get('/type-trucks-new', [DirectoryController::class, 'type_trucks_new'])->name('type-trucks-new');
Route::post('/type-trucks-new', [DirectoryController::class, 'type_trucks_new_save'])->name('type-trucks-new-save');
Route::get('/type-trucks-update/{id}', [DirectoryController::class, 'type_trucks_update'])->name('type-trucks-update');
Route::post('/type-trucks-update/{id}', [DirectoryController::class, 'type_trucks_update_save'])->name('type-trucks-update-save');
Route::get('/type-trucks-delete/{id}', [DirectoryController::class, 'type_trucks_delete'])->name('type-trucks-delete');
Route::get('/type-trucks-recover/{id}', [DirectoryController::class, 'type_trucks_recover'])->name('type-trucks-recover');

// Владельцы грузовиков
Route::get('/owner-trucks', [DirectoryController::class, 'owner_trucks'])->name('owner-trucks');
Route::get('/owner-trucks-new', [DirectoryController::class, 'owner_trucks_new'])->name('owner-trucks-new');
Route::post('/owner-trucks-new', [DirectoryController::class, 'owner_trucks_new_save'])->name('owner-trucks-new-save');
Route::get('/owner-trucks-update/{id}', [DirectoryController::class, 'owner_trucks_update'])->name('owner-trucks-update');
Route::post('/owner-trucks-update/{id}', [DirectoryController::class, 'owner_trucks_update_save'])->name('owner-trucks-update-save');
Route::get('/owner-trucks-delete/{id}', [DirectoryController::class, 'owner_trucks_delete'])->name('owner-trucks-delete');
Route::get('/owner-trucks-recover/{id}', [DirectoryController::class, 'owner_trucks_recover'])->name('owner-trucks-recover');

// Маста работы водителей
Route::get('/place-work', [DirectoryController::class, 'place_work'])->name('place-work');
Route::get('/place-work-new', [DirectoryController::class, 'place_work_new'])->name('place-work-new');
Route::post('/place-work-new', [DirectoryController::class, 'place_work_new_save'])->name('place-work-new-save');
Route::get('/place-work-update/{id}', [DirectoryController::class, 'place_work_update'])->name('place-work-update');
Route::post('/place-work-update/{id}', [DirectoryController::class, 'place_work_update_save'])->name('place-work-update-save');
Route::get('/place-work-delete/{id}', [DirectoryController::class, 'place_work_delete'])->name('place-work-delete');
Route::get('/place-work-recover/{id}', [DirectoryController::class, 'place_work_recover'])->name('place-work-recover');

// Грузы
Route::get('/cargo', [DirectoryController::class, 'cargo'])->name('cargo');
Route::get('/cargo-new', [DirectoryController::class, 'cargo_new'])->name('cargo-new');
Route::post('/cargo-new', [DirectoryController::class, 'cargo_new_save'])->name('cargo-new-save');
Route::get('/cargo-update/{id}', [DirectoryController::class, 'cargo_update'])->name('cargo-update');
Route::post('/cargo-update/{id}', [DirectoryController::class, 'cargo_update_save'])->name('cargo-update-save');
Route::get('/cargo-delete/{id}', [DirectoryController::class, 'cargo_delete'])->name('cargo-delete');
Route::get('/cargo-recover/{id}', [DirectoryController::class, 'cargo_recover'])->name('cargo-recover');

// АЗС
Route::get('/petrol-stations', [DirectoryController::class, 'petrol_stations'])->name('petrol-stations');
Route::get('/petrol-stations-new', [DirectoryController::class, 'petrol_stations_new'])->name('petrol-stations-new');
Route::post('/petrol-stations-new', [DirectoryController::class, 'petrol_stations_new_save'])->name('petrol-stations-new-save');
Route::get('/petrol-stations-update/{id}', [DirectoryController::class, 'petrol_stations_update'])->name('petrol-stations-update');
Route::post('/petrol-stations-update/{id}', [DirectoryController::class, 'petrol_stations_update_save'])->name('petrol-stations-update-save');
Route::get('/petrol-stations-delete/{id}', [DirectoryController::class, 'petrol_stations_delete'])->name('petrol-stations-delete');
Route::get('/petrol-stations-recover/{id}', [DirectoryController::class, 'petrol_stations_recover'])->name('petrol-stations-recover');

// Плательщики
Route::get('/payers', [DirectoryController::class, 'payers'])->name('payers');
Route::get('/payers-new', [DirectoryController::class, 'payers_new'])->name('payers-new');
Route::post('/payers-new', [DirectoryController::class, 'payers_new_save'])->name('payers-new-save');
Route::get('/payers-update/{id}', [DirectoryController::class, 'payers_update'])->name('payers-update');
Route::post('/payers-update/{id}', [DirectoryController::class, 'payers_update_save'])->name('payers-update-save');
Route::get('/payers-delete/{id}', [DirectoryController::class, 'payers_delete'])->name('payers-delete');
Route::get('/payers-recover/{id}', [DirectoryController::class, 'payers_recover'])->name('payers-recover');

// Услуги
Route::get('/services', [DirectoryController::class, 'services'])->name('services');
Route::get('/services-new', [DirectoryController::class, 'services_new'])->name('services-new');
Route::post('/services-new', [DirectoryController::class, 'services_new_save'])->name('services-new-save');
Route::get('/services-update/{id}', [DirectoryController::class, 'services_update'])->name('services-update');
Route::post('/services-update/{id}', [DirectoryController::class, 'services_update_save'])->name('services-update-save');
Route::get('/services-delete/{id}', [DirectoryController::class, 'services_delete'])->name('services-delete');
Route::get('/services-recover/{id}', [DirectoryController::class, 'services_recover'])->name('services-recover');
