<?php

use App\Http\Controllers\doctorkyc\DoctorKycCOntroller;
use App\Http\Controllers\heealthcare\HealthCareController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () { return view('auth.login');});

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified', ])->group(function () {
    Route::get('/dashboard', function () { 
        $user = Auth::user();
        return view('dashboard' ,compact('user'));
     })->name('dashboard');

    Route::controller(HealthCareController::class)->group(function () {
        Route::prefix('healthcare')->group(function () {
            Route::get('/view','index')->name('healthcare.view');
            Route::post('/store','store')->name('healthcare.store');
            Route::get('/add','add')->name('healthcare.add');
            Route::get('/edit/{id}', 'edit')->name('healthcare.edit');
            Route::get('/delete/{id}', 'delete')->name('healthcare.delete');
        });
    });

    Route::controller(DoctorKycCOntroller::class)->group(function () {
        Route::prefix('doctorkyc')->group(function () {
            Route::get('/view','index')->name('doctorkyc.view');
            Route::get('/add','add')->name('doctorkyc.add');
            Route::post('/store','store')->name('doctorkyc.store');
            Route::get('/edit/{id}', 'edit')->name('doctorkyc.edit');
            Route::get('/delete/{id}', 'delete')->name('doctorkyc.delete');
        });
    });

    Route::controller(DoctorKycCOntroller::class)->group(function () {
        Route::prefix('doctorkyc')->group(function () {
            Route::get('/view','index')->name('doctorkyc.view');
            Route::get('/add','add')->name('doctorkyc.add');
            Route::post('/store','store')->name('doctorkyc.store');
            Route::get('/edit/{id}', 'edit')->name('doctorkyc.edit');
            Route::get('/delete/{id}', 'delete')->name('doctorkyc.delete');
        });
    });
});
