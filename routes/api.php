<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//

Route::get('/', 'App\Http\Controllers\API\PessoaController@index')->name('index');

Route::get('/{pessoa}', 'App\Http\Controllers\API\PessoaController@show')->name('show');
