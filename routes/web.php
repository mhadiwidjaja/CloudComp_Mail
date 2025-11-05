<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmailSubscriptionController;

// Displays the email subscription form
Route::get('/', [EmailSubscriptionController::class, 'create'])->name('subscribe.form');

// Handles the form submission
Route::post('/subscribe', [EmailSubscriptionController::class, 'store'])->name('subscribe.store');

