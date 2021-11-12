<?php

use App\Http\Livewire\Index;
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
     return view('layouts.index');
 });

 Route::get('/order', function () {
    return view('layouts.order');
});

Route::get('/catalogue', function () {
    return view('layouts.catalogue');
});
//Route::get('/', Index::class);