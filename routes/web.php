<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\{
    Pessoas
};

//

Route::view('/', 'welcome');

Route::get('/people', Pessoas::class);
