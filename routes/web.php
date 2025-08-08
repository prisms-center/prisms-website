<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

// PRISMS public site routes
Route::view('/', 'pages.home')->name('home');
Route::view('/science', 'pages.science.index')->name('science');
Route::view('/tools', 'pages.codes.index')->name('tools');
Route::view('/repository', 'pages.repository.index')->name('repository');
Route::view('/people', 'pages.people.index')->name('people');
Route::view('/publications', 'pages.section', [
    'title' => 'Publications',
    'heading' => 'Publications',
    'description' => 'Publications and papers.'
])->name('publications');
Route::view('/community', 'pages.section', [
    'title' => 'Community',
    'heading' => 'Community',
    'description' => 'Community and outreach.'
])->name('community');
Route::view('/workshop', 'pages.section', [
    'title' => 'Workshop',
    'heading' => 'Annual PRISMS Center Workshop',
    'description' => 'Details for the annual PRISMS workshop.'
])->name('workshop');

// Keep existing dashboard/auth routes
Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
    Volt::route('settings/password', 'settings.password')->name('settings.password');
    Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');
});

require __DIR__.'/auth.php';
