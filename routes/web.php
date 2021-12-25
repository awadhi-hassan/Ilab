<?php

use App\Http\Controllers\MPESAController;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('about', function () {
    return view('about');
})->name('about');

Route::get('blog', function () {
    return view('blog');
})->name('blog');

Route::get('contact', function () {
    return view('contact');
})->name('contact');

Route::get('ccTVs', function () {
    return view('systems');
})->name('ccTVs');

Route::get('services', function () {
    return view('services');
})->name('services');

// middleware(['auth:sanctum', 'verified'])->
Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('order', function () {
    $user = auth()->user();

    $request = request();

    return view('order', ['user' => $user, 'request'=>$request]);
})->name('order');

Route::get('wifi', function () {
    return view('wifi');
})->name('wifi');

Route::get('pay', [MPESAController::class, 'pay'])->name('pay');

//mpesa_API
Route::post('get-token', [MPESAController::class, 'getAccessToken']);
Route::post('register-urls', [MPESAController::class, 'registerURLS']);
Route::post('stkpush', [MPESAController::class, 'stkPush']);
