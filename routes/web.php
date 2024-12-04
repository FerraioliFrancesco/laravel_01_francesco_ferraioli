<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/prodotti', function () {
    return view('prodotti');
})->name('prodotti');
