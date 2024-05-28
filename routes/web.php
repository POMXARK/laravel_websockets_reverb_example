<?php

use App\Events\NewMessage;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('send-message', function () {
    event(new NewMessage('test NewMessage'));
});
