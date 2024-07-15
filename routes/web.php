<?php
use Illuminate\Support\Facades\Route;

// quando l'utente chiama home...
Route::get('/', function() {
    return view('home');
});

// quando l'utente chiama profile...
Route::get('/profile', function() {
    $name = "Martina";
    $surname = "Liporata";
    $age = 23;
    $place = "Milano";
    return view('profile', compact('name', 'surname', 'age', 'place'));
});
