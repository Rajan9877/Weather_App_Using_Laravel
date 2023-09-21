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

use App\Http\Controllers\WeatherController;

Route::get('/weather', [WeatherController::class, 'index']);
Route::post('/weather', [WeatherController::class, 'search']);


Route::get('/', function () {
    return view('welcome');
});

Route::get('/fetchweather', function(){
    return view('weather');
})->name('weather');

