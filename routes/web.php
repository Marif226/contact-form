<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::get('/contact', function () {
    return view('contact');
})->name("contact");

Route::post('/contact/submit', [ContactController::class, 'submit'])->name("contact-form");