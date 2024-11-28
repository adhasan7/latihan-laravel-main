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
    return view('layouts.mainlayout');
});


Route::get('/home', function () {
    return view('home', 
    [
        'nama' => 'Hasan', 
        'role' => 'staff',
        'buah' => ['mangga', 'jambu', 'semangka', 'belimbing', 'apel', 'jeruk', 'pir']
    ]);

});

Route :: get ('/about', function () {
    return view('about');
});

Route :: get('/product', function () {
    return view('product');
});




// Route::get('/', function () {
//     return view('home', [
//         'name' => 'Reni',
//         'role' => 'staff',
//         'buah' => ['mangga','apel','anggur','jambu','pir']
//     ]);
// });


// Route::view('/contact', 'contact', ['name' => 'whatever','kontak' => '08999' ]);



