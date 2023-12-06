<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DosenController;

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
    // return view('welcome');
    return 'hello world';
});

Route::get('/profile/{nama}', function (string $nama) {
    // return view('welcome');
    return 'Profile '.$nama;
});

Route::get('/hitung/{a}/{b}', function (int $x,int $y) {
    // return view('welcome');
    return '<b>'.$x+$y.'</b>';
});

Route::get('/html', function () {
    // return view('welcome');
    return view('html');
});

Route::get('/dosen', [DosenController::class, 'index']);
Route::get('/dosen/{id}', [DosenController::class, 'show']);
Route::post('/dosen', [DosenController::class, 'store']);
Route::put('/dosen/{id}', [DosenController::class, 'update']);
Route::delete('/dosen/{id}', [DosenController::class, 'destroy']);

