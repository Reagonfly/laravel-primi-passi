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
    $hi_laravel = 'Hello Laravel';


    $menu = [
        'homepage' => '/',
        'about_laravel' => '/about_laravel',
        'contacts' => '/contacts'
    ];
    return view('home', compact('hi_laravel', 'menu'));
})->name('homepage');


Route::get('/about_laravel', function () {
    $menu = [
        'homepage' => '/',
        'about_laravel' => '/about_laravel',
        'contacts' => '/contacts'
    ];

    return view('about_laravel', compact('menu'));
})->name('about_laravel');


Route::get('/contacts', function () {
    $menu = [
        'homepage' => '/',
        'about_laravel' => '/about_laravel',
        'contacts' => '/contacts'
    ];
    return view('contacts', compact('menu'));
})->name('contacts');
