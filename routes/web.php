<?php

use App\Livewire\Admin\Dashboard;
use App\Livewire\Admin\UserPage;
use Illuminate\Support\Facades\Route;

Route::get('/', Dashboard::class)->name('dashboard');
Route::get('/users', UserPage::class)->name('users');