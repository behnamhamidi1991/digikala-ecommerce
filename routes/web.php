<?php

use Illuminate\Support\Facades\Route;
use \App\Livewire\Admin\Dashboard\Index as DashboardIndex;
use \App\Livewire\Admin\Country\Index as CountryIndex;

Route::get('/admin', DashboardIndex::class)->name('admin.dashboard.index');
Route::get('/admin/country', CountryIndex::class)->name('admin.country.index');

