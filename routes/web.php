<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InoController;

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
});

Route::get('/ino', [InoController::class, 'ino']);

//sekarang tugasnya adalah membuat menampilkan halaman dengan nama kalian lewat controller -> ke view
