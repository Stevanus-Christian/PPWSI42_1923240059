<?php

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
});

// mengirim data ke view
Route::get("/hallo", function() {
    $data = ['nama' => 'Stevanus Christian', 'npm' => '1923240059'];
    return view("hallo", $data);
});

// menerima data dan menampilkannya di view
Route::get("/kenalan/{nama}/{npm}", function($nama, $npm) {
    $data = ['nama' => $nama, 'npm' => $npm];
    return view("kenalan", $data);
});

//Route ke halaman fakultas
Route::get("/fakultas", function(){
    $data = ["fakultas" => ["Fasilkom Rekayasa", "Fak. Ekonomi dan Bisnis"]];
    return view("fakultas.index", $data);
}); 