<?php

// use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LoginController;
use App\Http\Controllers\PagesController;
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

// Route::get('/welcome', function () {
//     return view('welcome', [
//         "judul" => "Praktikum Pwl",
//     ]);
// });
// Route::get('/about', function () {
//     return view('about', [
//         "judul" => "About me",
//         "nama" => "Carlos",
//         "nim" => "231402031"
//     ]);
// });
// Route::get('/dosen', function () {
//     return view('dosen', [
//         "judul" => "Dosen",
//         "dosen" => "sir.opim"
        
//     ]);
// });
// Route::get('/wisata', function () {
//     return view('wisata', [
//         "judul" => "Wisata",
//         "wisata" => "gda"
        
//     ]);
// });

Route::get('/', [PagesController::class, 'index']);
Route::prefix('admin')->group(function(){
Route::get('/about', [PagesController::class, 'about']);
Route::get('/dosen', [PagesController::class, 'dosen']);
Route::get('/wisata', [PagesController::class, 'wisata']);
});