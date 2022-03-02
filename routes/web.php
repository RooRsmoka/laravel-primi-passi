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
    $data = [
        'title' => 'Homepage',
        'links' => [
            'home' => '/',
            'about' => '/about',
            'products' => '/products',
            'contacts' => '/contacts'
        ]
    ];
    return view('home', $data);
});

Route::get('/about', function() {
    $data = [
        'title' => 'About',
        'links' => [
            'home' => '/',
            'about' => '/about',
            'products' => '/products',
            'contacts' => '/contacts'
        ]
    ];
    return view('about', $data);
});

Route::get('/products', function() {
    $data = [
        'title' => 'Products',
        'links' => [
            'home' => '/',
            'about' => '/about',
            'products' => '/products',
            'contacts' => '/contacts'
        ]
    ];
    return view('products', $data);
});

Route::get('/contacts', function() {
    $data = [
        'title' => 'Contacts',
        'links' => [
            'home' => '/',
            'about' => '/about',
            'products' => '/products',
            'contacts' => '/contacts'
        ]
    ];
    return view('contacts', $data);
});