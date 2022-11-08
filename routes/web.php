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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', function () {
    return view('mainContent');
});

Route::get('/mainContent', function () {
    return view('mainContent');
});


Route::get('/card', function () {
    $Name = ['VALORANT', 'COVID-19', 'JAKARTA' , 'INDONESIA', 'BITCOIN','RUSH HOUR','CONJURING','GENSHIN'];
    $Img = ['img/valorant.jpg', 'img/covid.jpg','img/jakarta.jpg','img/indonesia.jpg', 'img/bitcoin.jpg','img/rushHour.jpg','img/conjuring.jpg','img/genshin.jpg'];
    return view('card',array('title' => $Name,'img'=> $Img));
});




